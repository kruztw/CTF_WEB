from flask import Flask, request, render_template_string

app = Flask(__name__)

@app.route('/')
def home():
    name = request.args['name']
    html = '''
           Hello %s!
           '''%(name)
    return render_template_string(html)


app.run()
