<?php

    //Database credentials
    $user = "a685237_appUser";
    $pw = "Toiohomai1234";
    $db = "a685237_app";

    //Database connection object (address, user, pw, db)
    $connection = new mysqli('localhost', $user, $pw, $db) or die(mysqli_error($connection));

    //Create variable that stores all records from our database
    $result = $connection->query("select * from pages") or die($connection->error());

    //first check a form has been submitted with data
    if(isset($_POST['pg']))
    {
        //create variables from our posted form values
        $pg = $_POST['pg'];

        $h1 = $_POST['h1'];
        $h2 = $_POST['h2'];
        $h3 = $_POST['h3'];
        $h4 = $_POST['h4'];

        $p1 = $_POST['p1'];
        $p2 = $_POST['p2'];
        $p3 = $_POST['p3'];
        $p4 = $_POST['p4'];
        $p5 = $_POST['p5'];
        $p6 = $_POST['p6'];
        $p7 = $_POST['p7'];
        $p8 = $_POST['p8'];
        $p9 = $_POST['p9'];
        $p10 = $_POST['p10'];

        $appendix1 =$_POST['appendix1'];
        $appendix2 =$_POST['appendix2'];
        $appendix3 =$_POST['appendix3'];
        $appendix4 =$_POST['appendix4'];
        $appendix5 =$_POST['appendix5'];

        $img1 = $_POST['img1'];
        $img2 = $_POST['img2'];
        $img3 = $_POST['img3'];

        $additionalnotes = $_POST['additionalnotes'];

        //create insert command
        $sql ="insert into pages(pg, h1, h2, h3, h4, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, img1, img2, img3,appendix1, appendix2, appendix3, appendix4, appendix5, additionalnotes)
        
        values('$pg','$h1','$h2','$h3','$h4','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$img1','$img2','$img3','$appendix1','$appendix2','$appendix3','$appendix4','$appendix5', '$additionalnotes')";
        

        //Echo out a success message if data is submitted successfully else it will echo out an error message to screen
        if($connection->query($sql) === TRUE)
        {
            echo "
                <h1>Record added SCP database</h1>
                <p><a href='../index.php'>Back to index page</p>
            ";
        }
        else
        {
            echo "
                <h1>Error submitting data</h1>
                <p>{$connection->error()}</p>
                <p><a href='../index.php'>Back to index page</p>
            ";

        }    
    }

?>
