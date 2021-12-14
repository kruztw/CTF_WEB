import requests
import socket
from urllib.parse import unquote,urlparse

def url_validate(url):
    blacklist = ["::1", "::"]
    for i in blacklist:
        if(i in url):
            return "NO1"

    y = urlparse(url)
    try:
        hostname = y.hostname                         # (a)
        ip = socket.gethostbyname(hostname)           # (b)
    except:
        ip = ''

    if ip.split('.')[0] in ['127', '0']:
        return "NO2"
    else:
        url = unquote(url)
        #r = requests.get(url,allow_redirects = False) # (c)
        return "OK"

print(url_validate("http://123@localhost:5000"))      # 這個會被解析成 localhost:5000
print(url_validate("http://123%40localhost:5000"))    # 這個需要 unquote 所以 (a) 會解析成 123%40localhost 然後在 (b) 出錯
print(url_validate("http://123%fflocalhost:5000"))    # 雖然會印 OK, 但只有 @ (%40) 會被解析成 localhost, 所以在 (c) 並不會造成 SSRF
