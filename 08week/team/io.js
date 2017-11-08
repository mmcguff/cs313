var fs = require('fs');

//passing a file in

var contents = fs.readFileSync(process.argv[2]).toString();

//console.log(contents);


console.log(contents.split('\n').length - 1);


