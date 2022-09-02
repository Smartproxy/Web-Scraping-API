# Web-Scraping-API

## List of contents
- [Introduction](#introduction)
- [Authentication](#authentication)
- [Scraping](#scraping)
- [Instagram](#instagram)
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
| Python                  | [python/instagrampost.py](https://github.com/Smartproxy/Web-Scraping-API/blob/main/python/instagrampost.py) |``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/python/instagrampost.py > instagrampost.py ``` |
| PHP                 | [php/instagrampost.php](https://github.com/Smartproxy/Web-Scraping-API/blob/main/php/instagrampost.php)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/php/instagrampost.php > instagrampost.php ``` |
| Node.js                 | [nodejs/instagrampost.js](https://github.com/Smartproxy/Web-Scraping-API/blob/main/nodejs/instagrampost.js)   | ``` curl https://raw.githubusercontent.com/Smartproxy/Web-Scraping-API/main/nodejs/instagrampost.js > instagrampost.js ``` |


### Instagram Post

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

## License

All code is released under [MIT License](https://github.com/Smartproxy/Smartproxy/blob/master/LICENSE)
