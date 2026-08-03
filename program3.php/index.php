<?php
include("db.php");
?>

<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $sql="INSERT INTO feedbacktbl(name,email,message) VALUES('$name','$email','$message')";
    
    if(mysqli_query($conn,$sql)){
        echo ('<script>alert("Feedback Submitted");</script>');
        
    }
    else{
        echo ('<script>alert("Feedback Not Submitted");</script>');    
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedBack</title>
</head>
<body>
    
    <form method="post">
        Name:
        <input type="text" name="name" required>
        <br>
        Email:
        <input type="email" name="email" required>
        <br>
        <br>

        FeedBack
        <textarea name="message" rows="5" cols="5">
        </textarea>
        <br>
        <input type="submit" name="submit">
    </form>
    <a href="display.php">View Feedback</a>
</body>
</html>