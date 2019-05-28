<?php
    require_once "config.php";

    $connection = mysqli_connect(
        $config['dataBase']['host'],
        $config['dataBase']['user'],
        $config['dataBase']['password'],
        $config['dataBase']['dbName']
    );
   $FN = $_POST['FirstName'];
   $LN = $_POST['LastName'];
   $PW = $_POST['_Password'];
   $About = $_POST['About'];


    $querySELECT = "SELECT * FROM Users";

    $queryInput = "INSERT INTO Users
                    (`FirstName`, `LastName`, `Password`, `About`)
                    VALUES
                    ('$FN', '$LN', '$PW', '$About')";

    mysqli_query($connection, $queryInput)
        or die("Error " . mysqli_error($connection));
    $result = mysqli_query($connection, $querySELECT)
        or die("Error " . mysqli_error($connection));



    if($connection == false)
    {
        echo 'Error during connection! <br/>';
        echo mysqli_connect_error();
        exit();
    }
    else
    {
        echo $result;
        echo 'Complete.';
    }

?>