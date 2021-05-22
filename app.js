const http = require ('http');
const fs = require ('fs');
const filecontent= fs.readFileSync('website gym.html');

const server = http.createServer((req,res)=> {
    res.writeHead(200,{'content-type' : 'text/html'});
    res.end(filecontent);


})

server.listen(80, '127.0.0.2',()=>{
    console.log("listening on port 80");
})
