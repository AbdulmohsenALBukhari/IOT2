<?php
    /*ارسال قيم المحركات*/
    if(isset($_POST['Save'])){
        /* start connect */
        $con = mysqli_connect('127.0.0.1','root','');

        if(!$con){
            echo 'not connect';
        }

        if(!mysqli_select_db($con,'iot')){
            echo 'Database not selected';
        }
        /* end connect */
        
        /* start insert value */
        $sliderA = $_POST['sliderA'];
        $sliderB = $_POST['sliderB'];
        $sliderC = $_POST['sliderC'];
        $sliderD = $_POST['sliderD'];
        $sliderE = $_POST['sliderE'];
        $sliderF = $_POST['sliderF'];

        $sqlA = "UPDATE engine SET engineValue = '$sliderA' WHERE id = 1";
        $sqlB = "UPDATE engine SET engineValue = '$sliderB' WHERE id = 2";
        $sqlC = "UPDATE engine SET engineValue = '$sliderC' WHERE id = 3";
        $sqlD = "UPDATE engine SET engineValue = '$sliderD' WHERE id = 4";
        $sqlE = "UPDATE engine SET engineValue = '$sliderE' WHERE id = 5";
        $sqlF = "UPDATE engine SET engineValue = '$sliderF' WHERE id = 6";

        if (!mysqli_query($con, $sqlA) || !mysqli_query($con, $sqlB) || !mysqli_query($con, $sqlC) ||
            !mysqli_query($con, $sqlD ) || !mysqli_query($con, $sqlE) || !mysqli_query($con, $sqlF)) {
            }
        /* end insert value */
} 
/* ******************************************************************* */
        /*ارسال قيم التشغيل*/
    if (isset($_POST['start'])) {

        /* start connect */
        $con = mysqli_connect('127.0.0.1', 'root', '');

        if (!$con) {
            echo 'not connect';
        }

        if (!mysqli_select_db($con, 'iot')) {
            echo 'Database not selected';
        }
        /* end connect */

        /* start insert value */
        $sqlStatus = "SELECT statusEngine FROM enginecondition";
        $result = mysqli_query($con, $sqlStatus);
        if (!$result) {
            die("Error in query");
        }

        $r = mysqli_fetch_assoc($result);
        if ($r['statusEngine'] == 0) {
            $sqlS = "UPDATE enginecondition SET statusEngine = 1";
        } else if ($r['statusEngine'] == 1) {
            $sqlS = "UPDATE enginecondition SET statusEngine = 0";
        }

        if (!mysqli_query($con, $sqlS)) {
        }
        /* end insert value */
    }
    /* *********************************************************************** */

    /*ارسال قيم الإتجاه*/
    if (isset($_POST['butForward']) ||
         isset($_POST['butLeft'])   ||
         isset($_POST['butStop'])   ||
         isset($_POST['butRight'])  ||
         isset($_POST['butBack']))
    {
         /* start connect */
            $con = mysqli_connect('127.0.0.1','root','');

            if(!$con){
                echo 'not connect';
            }
    
            if(!mysqli_select_db($con,'iot')){
                echo 'Database not selected';
            }
         /* end connect */
    
        /* start insert value */
            if (isset($_POST['butForward'])){
                $sqlS = "UPDATE directiontables SET direction = 'Forward'";
            }
            else if (isset($_POST['butLeft'])){
                $sqlS = "UPDATE directiontables SET direction = 'Left'";
            }
            else if (isset($_POST['butStop'])){
                $sqlS = "UPDATE directiontables SET direction = 'Stop'";
            }
            else if (isset($_POST['butRight'])){
                $sqlS = "UPDATE directiontables SET direction = 'Right'";
            }
            else if (isset($_POST['butBack'])){
                $sqlS = "UPDATE directiontables SET direction = 'Back Step'";
            }
            if (!mysqli_query($con, $sqlS)) {
            }
        /* end insert value */
}
    
?>