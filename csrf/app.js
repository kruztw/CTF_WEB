var express = require("express");
var app = express();
var bodyParser = require('body-parser');
const util = require('util')

app.set("view engine", "ejs");
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

var new_name = "";
var comments = [];
var csrf_token = Math.floor( Math.random() * 100000000 );

app.get("/", function (req, res) {
	res.render("index", {comment: ""});
});

app.get("/rename", function (req, res) {
    console.log("csrf_token = "+csrf_token);
	res.render("rename", {name: new_name, token: csrf_token});
});

app.post("/", function (req, res) {
    comments.push(req.body.comment+"</br>");
	res.render("index", {comment: comments});
});

app.post("/rename", function (req, res) {
    console.log(req.body);
    if (csrf_token == req.body.token) {
        new_name = req.body.name;
        console.log("change name to "+new_name);
    }
	res.render("rename", {name: new_name, token: csrf_token});
});

app.listen(8888);
