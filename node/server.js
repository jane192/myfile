var http = require('http');
http.createServer(function (req, res) {
    //res.writeHead();
    res.write('Hello');
    res.end(' World!');
    console.log('client running');

}).listen(8128);
console.log('server running');