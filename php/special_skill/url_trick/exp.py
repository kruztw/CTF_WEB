import requests

url = "http://localhost:8888/get_flag.php"

payload = '/'
payload = '/fuckyou'

res = requests.get(url+payload)
print(res.text)

