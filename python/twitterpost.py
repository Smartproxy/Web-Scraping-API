import requests

url = "https://scrape.smartproxy.com/v1/tasks"

payload = {
    "target": "universal",
    "parse": False,
    "headless": "html",
    "url": "https://twitter.com/elonmusk/status/1552317587694010368?cxt=HHwWgIC-keOn-IorAAAA",
    "device_type": "desktop"
}
headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
    "Authorization": "Basic U1B1c2VybmFtZTpTUHBhc3N3b3Jk"
}

response = requests.post(url, json=payload, headers=headers)

print(response.text)