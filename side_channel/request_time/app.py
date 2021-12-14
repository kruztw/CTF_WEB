from flask import Flask, render_template, jsonify, request

app = Flask(__name__)

@app.route("/", methods=["GET"])
def home():
    payload = request.args.get('payload')
    print(payload)
    result = eval(str(payload))
    print("result = ", result)
    return "ok"

app.run()
