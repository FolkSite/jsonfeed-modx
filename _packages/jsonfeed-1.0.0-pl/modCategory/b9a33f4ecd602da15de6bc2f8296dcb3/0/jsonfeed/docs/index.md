# JsonFeed

MODX plugin to add a JSON Feed to your site with Template Variables to customize the feed per resource. https://jsonfeed.org/

After Install:
1. Update the "templates" comma string to include which templates you want to list in the **JsonFeed template**. The default is "1".
   Example:
   ```
   [[!JsonFeed? &templates=`1,2,3,4`]]
   ```
2. Update the Template => TV Access for the custom options

**Friendly URLs must be turned ON**
