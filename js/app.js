const http = require('http');

const hostname = '127.0.0.1';

const port = 3000;

const server = http.createServer((req,res) => {

    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/plain');
    res.end('Hello World\n');

});

server.listen(port,hostname,() => {
    console.log('Server running at http://${hostname}:${port}/');
});


function sayHello(name) {
    console.log('Hello' + name);
}

//sayHello("Vinay");

//console.log(); //global

//setTimeout();
//clearTimeout();

//setInterval();
//clearInterval();

//var message = '';
//console.log(global.message);
//console.log(module);

var logger = require('./logger');

console.log(logger);



