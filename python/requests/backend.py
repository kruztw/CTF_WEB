from flask import Flask, request

app = Flask(__name__) 

@app.route('/', defaults={'path': ''}, methods=['GET'])
@app.route('/<path:path>', methods=['GET'])
def catch_all(path):
    show = request.args.get('show')
    if show == "1":
        return "flag{}"
    else:
        return "Ok"

app.run(port=8888)
