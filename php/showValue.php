<?php
    /* start connect */
    $con = mysqli_connect('127.0.0.1', 'root', '');

        if (!$con) {
            echo 'not connect';
        }

        if (!mysqli_select_db($con, 'iot')) {
            echo 'Database not selected';
        }
    /* end connect */

    /* start read from database */
    $sqlView = "SELECT engineName,engineValue FROM engine";
    $result = mysqli_query($con, $sqlView);
        if (!$result) {
            die("Error in query");
        }
    /*  end read  */

    /* display data */
    while($row = mysqli_fetch_assoc($result)){
        echo '<li>' .$row['engineName'].' = '.$row['engineValue'] .'</li>';
    }

        if (!mysqli_query($con, $sqlView)) {
        }
    /* end display */
?>