import requests

url = "https://scrape.smartproxy.com/v1/tasks"

payload = {
    "target": "universal",
    "parse": False,
    "url": "https://www.reddit.com/user/thegoldinthemountain/",
    "headless": "html"
}
headers = {
    "accept": "application/json",
    "Content-Type": "application/json",
    "authorization": "Basic U1B1c2VybmFtZTpTUHBhc3N3b3Jk"
}

response = requests.post(url, json=payload, headers=headers)

print(response.text)