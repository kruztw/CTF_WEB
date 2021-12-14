var express = require("express");
var app = express();
var bodyParser = require('body-parser');
const util = require('util')

app.set("view engine", "ejs");
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

app.get("/", function (req, res) {
	res.render("index", {name: ""});
});

app.post("/", function (req, res) {
	res.render("dangling_markup", {name: req.body.name});
});

app.use(function(req, res) {
	console.log(req.headers);
	res.status(404);
	res.render("not_found", {request: util.inspect(req.headers, {showHidden: false, depth: null})});
});

app.listen(8888);
