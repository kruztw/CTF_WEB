# localhost:5000/flag%3fshow=1
# 因為 %3f 會導致 path = "/flag?show=1" => show=None
# 但發送 requests.get 後, 後端會收到 /flag?show=1, => path="/flag", show="1"

from flask import Flask, Response, request
from urllib.parse import unquote
import requests


app = Flask(__name__) 

backend_ip = 'http://127.0.0.1:8888/'

@app.route('/', defaults={'path': ''}, methods=['GET'])
@app.route('/<path:path>', methods=['GET'])
def catch_all(path):
    print("path = ", path, unquote(path))
    
    if('flag' in unquote(path)):
        show = request.args.get('show')
        print("show = ", show)
        if show == "1":
            return "nope"

        r = requests.get(backend_ip+path, params={'show':show})
    else:
        r = requests.get(backend_ip+path)
    
    headers = [(name, value) for (name, value) in r.raw.headers.items()]
    res = Response(r.content, r.status_code, headers)
    return res

app.run()
