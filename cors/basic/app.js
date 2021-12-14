const express = require('express');
const app = express();
const cors = require('cors');

app.use(cors({
    origin: 'http://localhost:8888',
    credentials: true,
}));

app.get('/', (req, res) =>{
    res.send("hello world");
});

app.listen(8787);
