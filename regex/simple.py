import requests
import re
from time import sleep
URL = "http://challs.xmas.htsp.ro:1341/"

p = re.compile('[^(NO)]*NO.*') # unnecessary compicated ( .*NO.* had been sufficient)

while True:
    sleep(0.1) # needed to prevent "503 Service Temporarily Unavailable"
    r = requests.get(url = URL) 
    if (p.match(r.text)): continue
    print (r.text)
    break