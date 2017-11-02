var fs = require('fs');
var filter = process.argv[3];
var pattern = RegExp('\\.' + filter + '$');
var dir = fs.readdir(process.argv[2], callback);


function callback(err, data)
{
    
    if(err)
    {
        console.log(err);
    }
    
    for(i = 0; i < data.length; i++)
    {
        if(pattern.test(data[i]))
        {
            console.log(data[i]);
        }
    }
}






