// 參考: https://blog.bi0s.in/2021/08/15/Web/inCTFi21-JsonAnalyser/
// config-handler 存在 prototype pollution, 透過它結合 squirrelly-js 作到 RCE
// 為什麼要用 default: https://github.com/squirrellyjs/squirrelly/blob/master/src/compile-string.ts#L128
// 我還不太懂

const express = require('express');
const app = express();
port = 8888

app.get('/', function (req, res) {
    var config = require('config-handler')();
    res.render('index.squirrelly')
});

var server= app.listen(port, () => {
    console.log(`Example app listening at http://localhost:${port}`)
});
