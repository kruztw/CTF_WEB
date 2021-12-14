var exec = require('child_process').exec;

// 簡易版
exec('ls', function (error, stdout, stderr) {
               console.log('stdout: ' + stdout);
               console.log('stderr: ' + stderr);
               if (error !== null)
                   console.log('exec error: ' + error);
           }
     );


// 完整版 
process.mainModule.constructor._load("child_process").exec("ls", (err, stdout, stderr) => {
    console.log('stdout: '+stdout)
});
