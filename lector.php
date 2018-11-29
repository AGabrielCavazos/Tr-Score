<?php

    if(isset($_POST)){
        $jsonString = file_get_contents('pruebas.json');
        echo $jsonString;
        $data = json_decode($jsonString, true);
        //$data["player1"]["name"] = "nose";
        echo"Si Entro0";
        echo json_encode($_POST);
        if(isset($_POST["Jugador"])){
            echo"Si Entro1.1";
            if($_POST["Jugador"] == 1){
                $data["player1"]["name"] = $_POST["nombre"];
                $data["player1"]["score"] = $_POST["puntos"];
                $data["player1"]["logo"] = $_POST["Crew"];

                echo"Si Entro2";
            }else if($_POST["Jugador"] == 2){
                $data["player2"]["name"] = $_POST["nombre"];
                $data["player2"]["score"] = $_POST["puntos"];
                $data["player2"]["logo"] = $_POST["Crew"];
            }   
            echo"Si Entro1";
        
        
        }
        
        
        
        
        $newJsonString = json_encode($data);
        file_put_contents('pruebas.json', $newJsonString);
        header('Location: editor.html');
    }



   ?> 