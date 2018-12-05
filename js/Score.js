let x = 0;
function explode(){
    readTextFile("http://localhost/PruebasXsplit/pruebas.json", function(text){
    var data = JSON.parse(text);
    $("#cont").val(data.player1.name);
    //alert(data.player1.name);
    });
    setTimeout(explode, 5000);
  }
setTimeout(explode, 5000);



  function readTextFile(file, callback) {
var rawFile = new XMLHttpRequest();
rawFile.overrideMimeType("application/json");
rawFile.open("GET", file, true);
rawFile.onreadystatechange = function() {
    if (rawFile.readyState === 4 && rawFile.status == "200") {
        callback(rawFile.responseText);
    }else{
        $("#cont").val(file);
    }
}
rawFile.send(null);
}

//usage:
readTextFile("http://localhost/PruebasXsplit/pruebas.json", function(text){
    var data = JSON.parse(text);
   $("#cont").val(data.player1.name);
});
