<?php
    require_once "config.php";

    $connection = mysqli_connect(
        $config['dataBase']['host'],
        $config['dataBase']['user'],
        $config['dataBase']['password'],
        $config['dataBase']['dbName']
    );
    $SFN = $_POST['_FName'];
    $PSW = $_POST['_Pas'];

    $querySelect = "SELECT 
                       `About`
                    FROM `Users`
                    WHERE FirstName LIKE '%$SFN%' and Password LIKE '%$PSW%'";

    $result = mysqli_query($connection, $querySelect)
            or die ('Error.' . mysqli_error($connection));



    while($row=$result->fetch_assoc()){
        echo $row["About"];
    }

if($connection == false)
    {
        echo 'Error during connection! <br/>';
        echo mysqli_connect_error();
        exit();
    }
?>