<?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'simplon');
    
    
    $bdd = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // verifier la connexion
    if($bdd === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }else{
        echo 'Je suis bien connectée a la base de données';
    }
?>