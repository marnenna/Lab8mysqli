<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $db_user = 'root';
    $db_password = '';
    $db_host = 'localhost';
    $db_name = 'registration';

    //Create connection
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    //Check connection 
    if (mysqli_connect_error()){

        die("Failed to connect to MySQL: " . mysqli_connect_error()); 
    }

    echo "Succed to connect to MySQL"; 

    ?>
</body>
</html>