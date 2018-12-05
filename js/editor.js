var data;

function readTextFile(file, callback) {
    var rawFile = new XMLHttpRequest();
    rawFile.overrideMimeType("application/json");
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function () {
        if (rawFile.readyState === 4 && rawFile.status == "200") {
            callback(rawFile.responseText);
        } else {
            $("#cont").val(file);
        }
    }
    rawFile.send(null);
}

//usage:
readTextFile("http://localhost/PruebasXsplit/pruebas.json", function (text) {
    data = JSON.parse(text);

    console.log(data);
    $("#Nombre1").val(data.player1.name);
    $("#Puntuacion1").val(data.player1.score);
    $("#Nombre2").val(data.player2.name);
    $("#Puntuacion2").val(data.player2.score);

    $("#Crew1").val(data.player1.logo);
    $("#Crew2").val(data.player2.logo);


});