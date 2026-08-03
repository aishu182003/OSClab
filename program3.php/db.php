<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="feedbackdb";
$conn = mysqli_connect($servername,$username,$password,$database);
if($conn)
    {
        echo("database connected ");
    }
    else
        {
            echo("Not connected");
        }
    ?>