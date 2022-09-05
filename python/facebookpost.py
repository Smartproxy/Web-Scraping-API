import requests

url = "https://scrape.smartproxy.com/v1/tasks"

payload = {
    "target": "universal",
    "parse": False,
    "headless": "html",
    "url": "https://www.facebook.com/zuck/posts/pfbid0HeY54v4LMcv2EMxDz5RvnWaR6swsGFWikzUbrsEFtvxu9n4GCx7zA2YTM69XdiYnl"
}
headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
    "Authorization": "Basic U1B1c2VybmFtZTpTUHBhc3N3b3Jk"
}

response = requests.post(url, json=payload, headers=headers)

print(response.text)