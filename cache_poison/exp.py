import requests

res = requests.get('http://localhost:8000/flag', cookies={'token': 'admin token'})
print(res.text)

# 會直接回傳 cache, 可以試著註解掉 cache/cache_middleware.py 用 cache 回傳的部份, 會發現沒有印出 flag
res = requests.get('http://localhost:8000/flag')
print(res.text)
