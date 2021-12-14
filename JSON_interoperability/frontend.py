'''
url -X POST -H "Content-Type: application/json" --data '{"show":"1", "show":"0"}'   http://localhost:5000

因為 python 和 go 的 jsonParse 實做不同
若 key 重複 python 取最後一個, go 取第一個

'''

from flask import Flask, Response, request
from urllib.parse import unquote
import requests
import json


app = Flask(__name__) 

backend_ip = 'http://127.0.0.1:8888/'

@app.route('/', methods=['POST'])
def home():
    j = request.get_json(force=True)
    if 'show' in j and j['show'] == '1':
        return "nope"
    else:
        r = requests.post(backend_ip, data=request.data)
    
    headers = [(name, value) for (name, value) in r.raw.headers.items()]
    res = Response(r.content, r.status_code, headers)

    return res

app.run()
