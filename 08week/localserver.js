var http = require('http');
var port = 8888;

var server = http.createServer(function(onRequest, response) {
    
  response.writeHead(200, {'Content-Type': 'text/html'});
  response.write('<h1>Hello World!</h1>');
  response.end();
});

server.listen(port, function() {
  console.log('Server working at http://localhost:' + port);
});

//need to do the follow:
//create some version of error handling here in case something goes wrong starting the service. 
//add a listener that can be hit anytime to stop the server. 