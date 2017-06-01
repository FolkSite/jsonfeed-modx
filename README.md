# jsonfeed-modx
MODX plugin to add a JSON Feed to your site. https://jsonfeed.org/

After Install:
1. Update the "templates" comma string to include which templates you want to list in the **JsonFeed template**. The default is "1".
   Example:
   ```
   [[!JsonFeed? &templates=`1,2,3,4`]]
   ```
2. Update the Template => TV Access for the custom options

**Friendly URLs must be turned ON**

---

yoursite.com/feed.json will look like this:

```
{
    "version": "https://jsonfeed.org/version/1",
    "title": "Blog Skeleton",
    "home_page_url": "http://blog-skeleton.clients.modxcloud.com/",
    "feed_url": "http://blog-skeleton.clients.modxcloud.com/feed.json",
    "items": [
        {
          "id": "7",
          "title": "Single Blog Post",
          "image": "",
          "content_text": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
          "content_html": "",
          "url": "http://blog-skeleton.clients.modxcloud.com/single-blog-post.html",
          "date_published": "2015-02-20 09:52:07"
      },
      {
          "id": "8",
          "title": "Another Blog Post",
          "image": "",
          "content_text": "Sed ut perspiciatis unde omnis iste natus error sit",
          "content_html": "",
          "url": "http://blog-skeleton.clients.modxcloud.com/another-blog-post.html",
          "date_published": "2015-02-20 09:52:34"
      },
    ]  
}
```
