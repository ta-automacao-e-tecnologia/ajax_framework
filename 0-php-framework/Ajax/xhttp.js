
var xhttp = new XMLHttpRequest;

function xmlHttpGet(url, callback, parameters='')
{
    xhttp.onreadystatechange = callback;
    xhttp.open('GET', url + '.php' + parameters, true);
    xhttp.send();
}

function xmlHttpPost(url, callback, parameters='')
{
    xhttp.onreadystatechange = callback;
    xhttp.open('POST', url + '.php', true);

    //Caso os parametros não sejam obj (FormData)
    if(typeof(parameters) != 'object')
    {
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    }
    
    xhttp.send(parameters);
}

function beforeSend(callback)
{
    //Chama icone de loading
    if(xhttp.readyState < 4){
        callback();
    }
}

function success(callback)
{
    if(xhttp.readyState == 4 && xhttp.status == 200)
    {
        callback();
    }
}

function error(callback)
{
    xhttp.onerror = callback();
}