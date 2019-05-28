<?php
    require_once "config.php";

    $connection = mysqli_connect(
        $config['dataBase']['host'],
        $config['dataBase']['user'],
        $config['dataBase']['password'],
        $config['dataBase']['dbName']
    );

    $delFirstName = $_POST['dFirstName'];
    $delLastName = $_POST['dLastName'];
    $delPassword = $_POST['dPassword'];

    $queryDelete = "DELETE 
                        FROM `Users`
                        WHERE `FirstName` LIKE '%$delFirstName%' and `LastName` LIKE '%$delLastName%'
                        and `Password` LIKE '%$delPassword%'";

    $result = mysqli_query($connection, $queryDelete)
         or die ('Error.' . mysqli_error($connection));

    if($connection == false)
    {
        echo 'Error during connection! <br/>';
        echo mysqli_connect_error();
        exit();
    }
    else
    {
        echo "Complete.";
    }
?>