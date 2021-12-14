var express = require("express");
var app = express();
var bodyParser = require('body-parser');
const util = require('util')

app.set("view engine", "ejs");
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

app.get("/", function (req, res) {
	res.render("index", {name: req.query.name});
});

app.listen(8888);
