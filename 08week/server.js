var http = require('http');
var app = require('./app');
var port = 8888;

http.createServer(app.handleRequest).listen(port, function(){
    console.log('Server working at http://localhost:' + port); 
});