function myAjax(url ,f){
    const req = new XMLHttpRequest();
    req.onload=function (){f(this);};
    req.open("GET", url);
    req.send();
}
function fillTable(response){
    const txt = response.responseText;
    document.getElementById("demo").innerHTML=txt;
}
function updated(response){
    const txt = response.responseText;
    if (txt=="1"){
        readDB();
    }
}
function readDB(){
    myAjax("readDB.php",fillTable)
}
function updateDB(value){
    myAjax("updateDB.php?dbTableValues="+value,updated)
}