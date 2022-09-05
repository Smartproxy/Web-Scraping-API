import requests

url = "https://scrape.smartproxy.com/v1/tasks"

payload = {
    "target": "universal",
    "parse": False,
    "url": "https://www.instagram.com/eminem/",
    "headless": "html"
}
headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
    "Authorization": "Basic U1B1c2VybmFtZTpTUHBhc3N3b3Jk"
}

response = requests.post(url, json=payload, headers=headers)

print(response.text)