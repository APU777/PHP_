<?php
    require_once "config.php";

    $connection = mysqli_connect(
        $config['dataBase']['host'],
        $config['dataBase']['user'],
        $config['dataBase']['password'],
        $config['dataBase']['dbName']
    );

    $newFirstName = $_POST['nFirstName'];
    $newLastName = $_POST['nLastName'];
    $newPassword = $_POST['nPassword'];
    $newAbout = $_POST['nAbout'];
    $SF = $_POST['_FirstName'];
    $PS = $_POST['_Password'];


    $queryUpdate = "UPDATE Users
                    SET `FirstName` = '$newFirstName',
                        `LastName` = '$newLastName',
                        `Password` = '$newPassword',
                        `About` = '$newAbout'
                    WHERE `FirstName` LIKE '%$SF%' and `Password` LIKE '%$PS%'";

    $result = mysqli_query($connection, $queryUpdate)
            or die ("Error " . mysqli_error($connection));

    if($connection == false)
    {
        echo 'Error during connection! <br/>';
        echo mysqli_connect_error();
        exit();
    }
    else
    {
        echo 'Complete.';
    }
?>