import requests

url = "http://localhost:8888?admin=1"
res = requests.get(url)
print(res.text)
