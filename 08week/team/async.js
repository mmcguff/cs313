var fs = require('fs');


function callback(err, data)
{
    if(err)
    {
        console.log(err);
    }
    console.log(data.toString().split('\n').length - 1);
}


//passing a file in
var contents = fs.readFile(process.argv[2], callback);


//console.log(contents);


//console.log(contents.split('\n').length - 1);