import requests


url = "http://localhost:8888?args=GLOBALS"
res = requests.get(url)
print(res.text)
