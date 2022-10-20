# Web-Scraping-API

## List of contents
- [Introduction](#introduction)
- [Authentication](#authentication)
- [Scraping](#scraping)
- [Instagram](#instagram)
- [Facebook](#facebook)
- [TikTok](#tiktok)
- [Twitter](#twitter)
- [Reddit](#reddit)
- [Parameters](#parameters)
- [Response Codes](#response-codes)
- [License](#license)

## Introduction

With our Web Scraping API, you can scrape various websites en masse.

## Authentication

Once you have an active Web Scraping API subscription, you can try sending a request right from the dashboard Web Scraping API > Authentication method tab simply by entering your username, password, and clicking on Generate. You will also see an example of curl request generated right below your entered ``` user:pass. ``` 

Note that this is only an example with preset values to get you on the right track for forming your own request, meaning you will not be able to change the request values in the dashboard itself – that will have to be done in your code.


## Scraping

### You can use universal parameter as your target and supply any URL you want, which will return the HTML of the targeted URL.

API Link: https://scrape.smartproxy.com/v1/tasks

```http
  POST /tasks
```

### Target: ```universal``` (not parseable)
Required parameters: ```url``` (ip.smartproxy.com in this example)

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `url` | `url` |  Target URL |
| `target` | `string` | Scraping target - ```universal``` |

### Examples

| Programming Language | Example location         | Download |
| -------------------- | ------------------------ | -------- |
| Python                  | [python/ipsmartproxy.py](https://github.com/Smartproxy/Web-Scraping-API/blob/main/python/ipsmartproxy.py) |``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/python/ipsmartproxy.py > ipsmartproxy.py ``` |
| PHP                 | [php/ipsmartproxy.php](https://github.com/Smartproxy/Web-Scraping-API/blob/main/php/ipsmartproxy.php)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/php/ipsmartproxy.php > ipsmartproxy.php ``` |
| Node.js                 | [nodejs/ipsmartproxy.js](https://github.com/Smartproxy/Web-Scraping-API/blob/main/nodejs/ipsmartproxy.js)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/nodejs/ipsmartproxy.js > ipsmartproxy.js ``` |


### Response

```http
{
  "results": [
    {
      "content": "Your Ip is: 213.87.163.6",
      "status_code": 200,
      "url": "https://ip.smartproxy.com/",
      "task_id": "6971034977135771649",
      "created_at": "2022-09-01 09:24:14",
      "updated_at": "2022-09-01 09:24:17"
    }
  ]
}
```
## Instagram

### Instagram Profile

### Target: ```universal``` (not parseable)
Required parameters: ```url``` 

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `url` | `url` |  Target URL |
| `target` | `string` | Scraping target - ```universal``` |
| `headless` | `string` | Javascript rendering - ```html``` |

### Response

```http
{
  "results": [
    {
      "content": "<html> Instagram page content</html>"
      "status_code": 200,
      "url": "https://www.instagram.com/eminem/",
      "task_id": "6971440655478339585",
      "created_at": "2022-09-02 12:16:15",
      "updated_at": "2022-09-02 12:16:37"
    }
  ]
}
```

### Examples

| Programming Language | Example location         | Download |
| -------------------- | ------------------------ | -------- |
| Python                  | [python/instagramprofile.py](https://github.com/Smartproxy/Web-Scraping-API/blob/main/python/instagramprofile.py) |``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/python/instagramprofile.py > instagramprofile.py ``` |
| PHP                 | [php/instagramprofile.php](https://github.com/Smartproxy/Web-Scraping-API/blob/main/php/instagramprofile.php)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/php/instagramprofile.php > instagramprofile.php ``` |
| Node.js                 | [nodejs/instagramprofile.js](https://github.com/Smartproxy/Web-Scraping-API/blob/main/nodejs/instagramprofile.js)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/nodejs/instagramprofile.js > instagramprofile.js ``` |


### Instagram Post

### Target: ```universal``` (not parseable)
Required parameters: ```url``` 

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `url` | `url` |  Target URL |
| `target` | `string` | Scraping target - ```universal``` |
| `headless` | `string` | Javascript rendering - ```html``` |


### Response

```http

{
  "results": [
    {
      "content": "<html> Instagram page content</html>"
      "status_code": 200,
      "url": "https://www.instagram.com/p/Ch2hW9-JHTT/",
      "task_id": "6971442143109891073",
      "created_at": "2022-09-02 12:22:10",
      "updated_at": "2022-09-02 12:22:30"
    }
  ]
}
```

### Examples

| Programming Language | Example location         | Download |
| -------------------- | ------------------------ | -------- |
| Python                  | [python/instagrampost.py](https://github.com/Smartproxy/Web-Scraping-API/blob/main/python/instagrampost.py) |``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/python/instagrampost.py > instagrampost.py ``` |
| PHP                 | [php/instagrampost.php](https://github.com/Smartproxy/Web-Scraping-API/blob/main/php/instagrampost.php)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/php/instagrampost.php > instagrampost.php ``` |
| Node.js                 | [nodejs/instagrampost.js](https://github.com/Smartproxy/Web-Scraping-API/blob/main/nodejs/instagrampost.js)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/nodejs/instagrampost.js > instagrampost.js ``` |


## Facebook

### Facebook Page 

### Target: ```universal``` (not parseable)
Required parameters: ```url``` 

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `url` | `url` |  Target URL |
| `target` | `string` | Scraping target - ```universal``` |

### Response

```http

{
  "results": [
    {
      "content": "<html> Facebook page content</html>"
      "status_code": 200,
      "url": "https://www.facebook.com/ladygaga",
      "task_id": "6972452679540839425",
      "created_at": "2022-09-05 07:17:40",
      "updated_at": "2022-09-05 07:17:45"
    }
  ]
}
```
### Examples

| Programming Language | Example location         | Download |
| -------------------- | ------------------------ | -------- |
| Python                  | [python/facebookpage.py](https://github.com/Smartproxy/Web-Scraping-API/blob/main/python/facebookpage.py) |``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/python/facebookpage.py > facebookpage.py ``` |
| PHP                 | [php/facebookpage.php](https://github.com/Smartproxy/Web-Scraping-API/blob/main/php/facebookpage.php)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/php/facebookpage.php > facebookpage.php ``` |
| Node.js                 | [nodejs/facebookpage.js](https://github.com/Smartproxy/Web-Scraping-API/blob/main/nodejs/facebookpage.js)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/nodejs/facebookpage.js > facebookpage.js ``` |


### Facebook Post

### Target: ```universal``` (not parseable)
Required parameters: ```url``` 

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `url` | `url` |  Target URL |
| `target` | `string` | Scraping target - ```universal``` |
| `headless` | `string` | Javascript rendering - ```html``` |

### Response


```http
{
  "results": [
    {
      "content": "<html> Facebook page content</html>"
      "status_code": 200,
      "url": "https://www.facebook.com/zuck/posts/pfbid0HeY54v4LMcv2EMxDz5RvnWaR6swsGFWikzUbrsEFtvxu9n4GCx7zA2YTM69XdiYnl",
      "task_id": "6972484278999372801",
      "created_at": "2022-09-05 09:23:14",
      "updated_at": "2022-09-05 09:23:32"
    }
  ]
}
```

### Examples

| Programming Language | Example location         | Download |
| -------------------- | ------------------------ | -------- |
| Python                  | [python/facebookpost.py](https://github.com/Smartproxy/Web-Scraping-API/blob/main/python/facebookpost.py) |``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/python/facebookpost.py > facebookpost.py ``` |
| PHP                 | [php/facebookpost.php](https://github.com/Smartproxy/Web-Scraping-API/blob/main/php/facebookpost.php)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/php/facebookpost.php > facebookpost.php ``` |
| Node.js                 | [nodejs/facebookpost.js](https://github.com/Smartproxy/Web-Scraping-API/blob/main/nodejs/facebookpost.js)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/nodejs/facebookpost.js > facebookpost.js ``` |


### Facebook Group

### Target: ```universal``` (not parseable)
Required parameters: ```url``` 

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `url` | `url` |  Target URL |
| `target` | `string` | Scraping target - ```universal``` |

### Response

```http
{
  "results": [
    {
      "content": "<html> Facebook page content</html>"
      "status_code": 200,
      "url": "https://www.facebook.com/groups/1394454774138066",
      "task_id": "6972486765374350337",
      "created_at": "2022-09-05 09:33:07",
      "updated_at": "2022-09-05 09:33:33"
    }
  ]
}
```
### Examples

| Programming Language | Example location         | Download |
| -------------------- | ------------------------ | -------- |
| Python                  | [python/facebookgroup.py](https://github.com/Smartproxy/Web-Scraping-API/blob/main/python/facebookgroup.py) |``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/python/facebookgroup.py > facebookgroup.py ``` |
| PHP                 | [php/facebookgroup.php](https://github.com/Smartproxy/Web-Scraping-API/blob/main/php/facebookgroup.php)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/php/facebookgroup.php > facebookgroup.php ``` |
| Node.js                 | [nodejs/facebookgroup.js](https://github.com/Smartproxy/Web-Scraping-API/blob/main/nodejs/facebookgroup.js)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/nodejs/facebookgroup.js > facebookgroup.js ``` |

## TikTok

### TikTok Profile

### Target: ```universal``` (not parseable)
Required parameters: ```url``` 

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `url` | `url` |  Target URL |
| `target` | `string` | Scraping target - ```universal``` |

### Response

```http
{
  "results": [
    {
      "content": "<html> TikTok page content</html>"
      "status_code": 200,
      "url": "https://www.tiktok.com/@soukainasing1",
      "task_id": "6972490335716924417",
      "created_at": "2022-09-05 09:47:18",
      "updated_at": "2022-09-05 09:47:22"
    }
  ]
}
```

### Examples

| Programming Language | Example location         | Download |
| -------------------- | ------------------------ | -------- |
| Python                  | [python/tiktokprofile.py](https://github.com/Smartproxy/Web-Scraping-API/blob/main/python/tiktokprofile.py) |``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/python/tiktokprofile.py > tiktokprofile.py ``` |
| PHP                 | [php/tiktokprofile.php](https://github.com/Smartproxy/Web-Scraping-API/blob/main/php/tiktokprofile.php)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/php/tiktokprofile.php > tiktokprofile.php ``` |
| Node.js                 | [nodejs/tiktokprofile.js](https://github.com/Smartproxy/Web-Scraping-API/blob/main/nodejs/tiktokprofile.js)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/nodejs/tiktokprofile.js > tiktokprofile.js ``` |

### TikTok Post

### Target: ```universal``` (not parseable)
Required parameters: ```url``` 

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `url` | `url` |  Target URL |
| `target` | `string` | Scraping target - ```universal``` |

```http
{
  "results": [
    {
      "content": "<html> TikTok page content</html>"
      "status_code": 200,
      "url": "https://www.tiktok.com/@soukainasing1/video/7139227399035571462",
      "task_id": "6972492376870795265",
      "created_at": "2022-09-05 09:55:25",
      "updated_at": "2022-09-05 09:55:29"
    }
  ]
}
```
### Examples

| Programming Language | Example location         | Download |
| -------------------- | ------------------------ | -------- |
| Python                  | [python/tiktokpost.py](https://github.com/Smartproxy/Web-Scraping-API/blob/main/python/tiktokpost.py) |``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/python/tiktokpost.py > tiktokpost.py ``` |
| PHP                 | [php/tiktokpost.php](https://github.com/Smartproxy/Web-Scraping-API/blob/main/php/tiktokpost.php)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/php/tiktokpost.php > tiktokpost.php ``` |
| Node.js                 | [nodejs/tiktokpost.js](https://github.com/Smartproxy/Web-Scraping-API/blob/main/nodejs/tiktokpost.js)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/nodejs/tiktokpost.js > tiktokpost.js ``` |

## Twitter

### Twitter Profile

### Target: ```universal``` (not parseable)
Required parameters: ```url``` 

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `url` | `url` |  Target URL |
| `target` | `string` | Scraping target - ```universal``` |
| `headless` | `string` | Javascript rendering - ```html``` |
| `device_type` | `string` | Device type - ```desktop``` |

```http
{
  "results": [
    {
      "content": "<html> Twitter page content</html>"
      "status_code": 200,
      "url": "https://twitter.com/elonmusk",
      "task_id": "6973191788077014017",
      "created_at": "2022-09-07 08:14:37",
      "updated_at": "2022-09-07 08:15:02"
    }
  ]
}
```

### Examples

| Programming Language | Example location         | Download |
| -------------------- | ------------------------ | -------- |
| Python                  | [python/twitterprofile.py](https://github.com/Smartproxy/Web-Scraping-API/blob/main/python/twitterprofile.py) |``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/python/twitterprofile.py > twitterprofile.py ``` |
| PHP                 | [php/twitterprofile.php](https://github.com/Smartproxy/Web-Scraping-API/blob/main/php/twitterprofile.php)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/php/twitterprofile.php > twitterprofile.php ``` |
| Node.js                 | [nodejs/twitterprofile.js](https://github.com/Smartproxy/Web-Scraping-API/blob/main/nodejs/twitterprofile.js)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/nodejs/twitterprofile.js > twitterprofile.js ``` |

### Twitter Post


### Target: ```universal``` (not parseable)
Required parameters: ```url``` 

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `url` | `url` |  Target URL |
| `target` | `string` | Scraping target - ```universal``` |
| `headless` | `string` | Javascript rendering - ```html``` |
| `device_type` | `string` | Device type - ```desktop``` |

```http
{
  "results": [
    {
      "content": "<html> Twitter page content</html>"
      "status_code": 200,
      "url": "https://twitter.com/elonmusk/status/1552317587694010368?cxt=HHwWgIC-keOn-IorAAAA",
      "task_id": "6973211115165632513",
      "created_at": "2022-09-07 09:31:25",
      "updated_at": "2022-09-07 09:31:55"
    }
  ]
}
```
### Examples

| Programming Language | Example location         | Download |
| -------------------- | ------------------------ | -------- |
| Python                  | [python/twitterpost.py](https://github.com/Smartproxy/Web-Scraping-API/blob/main/python/twitterpost.py) |``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/python/twitterpost.py > twitterpost.py ``` |
| PHP                 | [php/twitterpost.php](https://github.com/Smartproxy/Web-Scraping-API/blob/main/php/twitterpost.php)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/php/twitterpost.php > twitterpost.php ``` |
| Node.js                 | [nodejs/twitterpost.js](https://github.com/Smartproxy/Web-Scraping-API/blob/main/nodejs/twitterpost.js)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/nodejs/twitterpost.js > twitterpost.js ``` |

## Reddit

### Reddit Subreddit

### Target: ```universal``` (not parseable)
Required parameters: ```url``` 

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `url` | `url` |  Target URL |
| `target` | `string` | Scraping target - ```universal``` |
| `headless` | `string` | Javascript rendering - ```html``` |
| `device_type` | `string` | Device type - ```desktop``` |

```http
{
  "results": [
    {
      "content": "<html> Reddit page content</html>"
      "status_code": 200,
      "url": "https://www.reddit.com/r/aww/",
      "task_id": "6980476706670814209",
      "created_at": "2022-09-27 10:42:17",
      "updated_at": "2022-09-27 10:42:44"
    }
  ]
}
```

### Examples

| Programming Language | Example location         | Download |
| -------------------- | ------------------------ | -------- |
| Python                  | [python/redditsubreddit.py](https://github.com/Smartproxy/Web-Scraping-API/blob/main/python/redditsubreddit.py) |``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/python/redditsubreddit.py > redditsubreddit.py ``` |
| PHP                 | [php/redditsubreddit.php](https://github.com/Smartproxy/Web-Scraping-API/blob/main/php/redditsubreddit.php)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/php/redditsubreddit.php > redditsubreddit.php ``` |
| Node.js                 | [nodejs/redditsubreddit.js](https://github.com/Smartproxy/Web-Scraping-API/blob/main/nodejs/redditsubreddit.js)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/nodejs/redditsubreddit.js > redditsubreddit.js ``` |


### Reddit Post

### Target: ```universal``` (not parseable)
Required parameters: ```url``` 

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `url` | `url` |  Target URL |
| `target` | `string` | Scraping target - ```universal``` |
| `headless` | `string` | Javascript rendering - ```html``` |
| `device_type` | `string` | Device type - ```desktop``` |


```http
{
  "results": [
    {
      "content": "<html> Reddit page content</html>"
      "status_code": 200,
      "url": "https://www.reddit.com/r/aww/comments/xp1vg6/started_a_video_of_my_wobbly_foster_kitten/",
      "task_id": "6980480650432246785",
      "created_at": "2022-09-27 10:57:58",
      "updated_at": "2022-09-27 10:58:26"
    }
  ]
}
```

### Examples

| Programming Language | Example location         | Download |
| -------------------- | ------------------------ | -------- |
| Python                  | [python/redditpost.py](https://github.com/Smartproxy/Web-Scraping-API/blob/main/python/redditpost.py) |``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/python/redditpost.py > redditpost.py ``` |
| PHP                 | [php/redditpost.php](https://github.com/Smartproxy/Web-Scraping-API/blob/main/php/redditpost.php)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/php/redditpost.php > redditpost.php ``` |
| Node.js                 | [nodejs/redditpost.js](https://github.com/Smartproxy/Web-Scraping-API/blob/main/nodejs/redditpost.js)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/nodejs/redditpost.js > redditpost.js ``` |

### Reddit User

### Target: ```universal``` (not parseable)
Required parameters: ```url``` 

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `url` | `url` |  Target URL |
| `target` | `string` | Scraping target - ```universal``` |
| `headless` | `string` | Javascript rendering - ```html``` |
| `device_type` | `string` | Device type - ```desktop``` |

```http
{
  "results": [
    {
      "content": "Reddit page content"
      "status_code": 200,
      "url": "https://www.reddit.com/user/thegoldinthemountain/",
      "task_id": "6980481799252129793",
      "created_at": "2022-09-27 11:02:32",
      "updated_at": "2022-09-27 11:03:00"
    }
  ]
}
```

### Examples

| Programming Language | Example location         | Download |
| -------------------- | ------------------------ | -------- |
| Python                  | [python/reddituser.py](https://github.com/Smartproxy/Web-Scraping-API/blob/main/python/reddituser.py) |``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/python/reddituser.py > reddituser.py ``` |
| PHP                 | [php/reddituser.php](https://github.com/Smartproxy/Web-Scraping-API/blob/main/php/reddituser.php)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/php/reddituser.php > reddituser.php ``` |
| Node.js                 | [nodejs/reddituser.js](https://github.com/Smartproxy/Web-Scraping-API/blob/main/nodejs/reddituser.js)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/nodejs/reddituser.js > reddituser.js ``` |



## Parameters

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `target` | `string` |  Data source. Available targets are listed [here](#targets). |
| `url` | `url` | Direct URL (link) |
| `locale` | `string` | This will change the web interface language. Example: – en-US – en-GB |
| `geo` | `string` | The geographical location that the result depends on. City location names, state names, country names, coordinates and radius, Google’s Canonical |
| `device_type` | `string` | Device type and browser. Supported: ```desktop```, ```desktop_chrome```, ```desktop_firefox```, ```mobile```, ```mobile_android```, ```mobile_ios```. |
| `headless` | `string` | Enable JavaScript rendering. Supported: ```html```, ```png``` |

## Response Codes

### HTTP Response Codes

| Response | Description     | Solution                |
| :-------- | :------- | :------------------------- |
| **200** - Success | Server has replied and given requested response.	 | Celebrate! |
| **204** - No content | Job not completed yet. | Wait a few seconds before trying again. |
| **400** - Multiple error messages | Bad structure of the request. | Re-check your request to make sure it is in the correct format. |
| **401** - Invalid / not provided authorization header (client not found) | Incorrect login credentials or missing authorization. | Re-check your provided credentials for authorization. |
| **403** - Forbidden | Your account does not have access to this resource. | Make sure the target is supported by us |
| **404** - Not found | Your target was not found. | Re-check your targeted URL. |
| **429** - Too many requests | Exceeded rate limit for your subscription. | Make sure you still have at least one request left. Wait a couple minutes and try again. If you are encountering the error often – chat with us to see if your rate limit can be increased. |
| **500** - Internal error | Service unavailable, possibly due to some issues we are encountering. | Wait a couple minutes and send another request. Contact us for more information. |
| **524** - Timeout | Service unavailable, possibly due to some issues we are encountering. | Wait a couple minutes and send another request. Contact us for more information. |

## License


All code is released under [MIT License](https://github.com/Smartproxy/Smartproxy/blob/master/LICENSE)
