
window.onload=function(){
    var date = new Date();
    var hours =date.getHours() < 10 ? '0'+date.getHours() : date.getHours();
    var minutes = date.getMinutes() < 10 ? '0'+date.getMinutes() : date.getMinutes();
    var seconds = date.getSeconds() < 10 ? '0'+date.getSeconds() : date.getSeconds();
    
    var time = hours+':'+minutes+':'+seconds+':'+date.getMilliseconds();
    document.getElementsByTagName('div')[0].innerHTML="Kell javascriptis: "+time;
    window.setTimeout(arguments.callee,1);
}

function tervitus(){
    document.write("Mina olen JavaScript!<br>");
    }