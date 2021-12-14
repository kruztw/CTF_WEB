var  request  =  require ( 'request' ) ;

var  headers  =  {
    'Connection' : 'keep-alive' ,
    'Content-Length' : '0' ,
    'Pragma' : 'no-cache' ,
    'Cache-Control' : 'no-cache' ,
    'Upgrade-Insecure-Requests' : '1' ,
    'Content-Type' : 'application/x-www-form-urlencoded' ,
    'User-Agent' : 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36' ,
    'Accept' : 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q =0.9' ,
    'Referer' : 'http://faster.w-va.cf:1002/' ,
    'Accept-Language' : 'en-US,en;q=0.9,pt-BR;q=0.8,pt;q=0.7,es;q=0.6,fr;q=0.5' ,
} ;

function callback(error , response , body) {
    console.log('callback', response)
    if  (!error && response.statusCode == 200 )
        console.log(body) ;
}


for (i = 1; i <= 20; i++) {
    var options = {
        url : 'http://localhost:8888/buy' ,
        method : 'GET' ,
        headers : headers
    };

    request(options, callback);
}
