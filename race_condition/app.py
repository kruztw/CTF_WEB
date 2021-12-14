from flask import Flask, request, render_template, make_response, redirect
from time import sleep

money = 100
price = 10
items = []

app = Flask(__name__)

@app.route('/buy')
def buy() -> str:
    global money
    global price
    global items
    if money < price:
        return "not enough money"
 
    items.append('item')
    new_money = money - price
    sleep(0.1)
    money = new_money
    return f'items: {len(items)}\nmoney: {money}'



app.run(port=8888)


