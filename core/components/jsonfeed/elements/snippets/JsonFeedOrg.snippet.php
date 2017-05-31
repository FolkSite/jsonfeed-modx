<?php
/**
 * JsonFeed
 * Based on https://jsonfeed.org/
 *
 * JsonFeed is free software; you can redistribute it and/or modify it
 * under the terms of the MIT License
 *
 *
 * Usage [[!JsonFeed? &templates=`1,2,3,4`]]
 *
 */

 $input = $modx->getOption('templates', $scriptProperties);
 $templates = explode(",", $input);

 $q = $modx->newQuery('modResource');
 $q->where(array(
   'deleted'=>'0','template:IN' => $templates,
 ));
 $q->sortby('menuindex','ASC');
 $resources = $modx->getCollection('modResource', $q);

 $output = "";
 $x = array();

 foreach ($resources as $res) {
     $canParse = true;
     $hidden = $res->get('hidemenu');
     $published = $res->get('published');

     if($hidden == 1 || $published == 0){ $canParse = false; }

     //override TV
     $overrideParse = $res->getTVValue('jsonfeed_include');
     if($overrideParse == "yes"){ $canParse = true; }

     if ($canParse) {
         $id = $res->get('id');
         $x['id'] = $id;

         $x['url'] = $modx->makeUrl($id,'','','full');

         /* Get the date */
         $date = $res->get('editedon') ? $res->get('editedon') : $res->get('createdon');
         $x['date'] = $date;

         $x['image'] = $res->getTVValue('jsonfeed_image');

         /* Title Choice */
         $title_choice = $res->getTVValue('jsonfeed_title');
         if(!$title_choice){
           $x['title'] = $res->get('pagetitle');
         } else {
           $x['title'] = $res->get($title_choice);
         }

         /* Text Choice */
         $text_choice = $res->getTVValue('jsonfeed_text');
         if(!$text_choice){
           $x['text'] = $res->get('description');
         } else {
           $x['text'] = $res->get($text_choice);
         }

         /* HTML Choice */
         $html_choice = $res->getTVValue('jsonfeed_html');
         if(!$html_choice){
           $x['html'] = "";
         } else {
           $x['html'] = $res->get('content');
         }


         /* add item to output */
         $output .= $modx->parseChunk('JsonFeedOrg_item', $x);
     }
 }

 return $output;
