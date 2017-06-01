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
1. Update the "templates" comma string to include which templates you want to list in the **JsonFeed template**. The default is "1".
   Example:
   ```
   [[!JsonFeed? &templates=`1,2,3,4`]]
   ```
2. Update the Template => TV Access for the custom options

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
      'guid' => '868df0061e6745b6a596a4ff470866f3',
      'native_key' => 'jsonfeed',
      'filename' => 'modNamespace/75047754d7b16e0cdf56ab80b976d7ea.vehicle',
      'namespace' => 'jsonfeed',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '25e4b006bb2e95e818c205e90fbf9910',
      'native_key' => NULL,
      'filename' => 'modCategory/b9a33f4ecd602da15de6bc2f8296dcb3.vehicle',
      'namespace' => 'jsonfeed',
    ),
  ),
);