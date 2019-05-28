<?php
    require_once "config.php";

    $connection = mysqli_connect(
        $config['dataBase']['host'],
        $config['dataBase']['user'],
        $config['dataBase']['password'],
        $config['dataBase']['dbName']
    );


    $querySelect = "SELECT
                        FirstName AS 'First Name',
                        LastName AS 'Last Name',
                        Password
                    FROM Users";

   // $number_filter_row = mysqli_nuw_rows(mysqli_query($connection, $querySelect));

    $result = mysqli_query($connection, $querySelect)
        or die("Error " . mysqli_error($connection));


    $barr = array();
    $rows = mysqli_num_rows($result);
    for($i = 0; $i < $rows; ++$i)
    {

        $row = mysqli_fetch_row($result);
        array_push($barr, $row);


    }
    $res = array(
        "sEcho" => 1,
        "iTotalRecords" => count($barr),
        "iTotalDisplayRecords" => count($barr),
        "aaData"=>$barr);
    echo json_encode($res);
    //mysqli_free_result($result);

    mysqli_close($connection);
?>