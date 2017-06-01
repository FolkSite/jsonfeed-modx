<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License (MIT)

Copyright (c) 2015 MODX Systems, LLC (hello@modx.com) 

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.',
    'readme' => '# JsonFeed

MODX plugin to add a JSON Feed to your site with Template Variables to customize the feed per resource. https://jsonfeed.org/

After Install:
1. update the "templates" you want to list in the installed template. The default is "1".
2. update the Template => TV Access for the custom options

**Friendly URLs must be turned ON**
',
    'changelog' => '# JsonFeed 1.0.0
- Basic Options
',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'f4e1ad4b99c418e8f5fbcc2e867c80d5',
      'native_key' => 'jsonfeed',
      'filename' => 'modNamespace/47a39afd56abb3c2957effe5ace879d7.vehicle',
      'namespace' => 'jsonfeed',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '77fefedbfac9d005d8ec80779420f6a9',
      'native_key' => NULL,
      'filename' => 'modCategory/3042b79518d4ba339113a23852c019eb.vehicle',
      'namespace' => 'jsonfeed',
    ),
  ),
);