# https://github.com/wonderkun/CTF_web/tree/master/php4fun
# mysql : 1.000000000000001 == 1
# php   : 1.000000000000001 != 1


#!/usr/bin python

import requests

url = "http://localhost:8888"
data = {'id': 1.000000000000001}

r = requests.post(url, data)

print(r.text)
