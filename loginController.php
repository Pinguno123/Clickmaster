<?php

    if (!empty($_POST["sessionbtn"])) {
        if (empty($_POST["user_name"]) || empty($_POST["password"])) {
            echo "Los campos estan vacios";
        } else {
            $user = $_POST["user_name"];
            $pass = $_POST["password"];

            $sql = "SELECT * FROM users WHERE user_name = '$user' and password = '$pass'";
            $resultado = $connection->query($sql);

            if ($row = $resultado->fetch_object()) {
                header("Location: index.php");
            } else {
                echo "Datos erroneos";
            }
            
        }
        
    }



?>