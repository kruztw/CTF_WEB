// curl -X POST -H "Content-Type: application/json" --data '{"user1":{"money":300}}'   http://localhost:8888

const express = require("express");
const bodyParser = require('body-parser');
const app = express();

app.use(bodyParser.json());

const foo = ({user1, user2}) => {
    if (user1.money > user2.money)
        return "You Win";
    else
        return "You Lose";
}

user1 = { money: 100 };
user2 = { money: 200 };


app.post("/", function(req, res) {
    console.log(req.body);
    res.send(foo({user1, user2, ...req.body}));   // 存在變數覆蓋漏洞
});

app.listen(8888);
