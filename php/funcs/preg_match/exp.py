#! /usr/bin/python3

import requests

data = {
	'x': 'flag'+'S'*1000000,
}

res = requests.post('http://127.0.0.1:3000', data=data);
print(res.text)
