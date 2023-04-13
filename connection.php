<?php

    $server ="localhost";
    $username = "root";
    $password = "i6zDdh2sa5zLqJ";
    $database = "moneyplant";

    //creating connecion between the database (closed in index.php)
    $connection = mysqli_connect($server ,$username, $password, $database);

    //check connection
    if(!$connection){
        die("Connection Failed: ".mysqli_connect_error());
    }
    
?>