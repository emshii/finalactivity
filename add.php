<?php
    include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Add Script</title>
</head>
<body style = "background-image: url('Back.png')">



<?php 
   if( isset($_POST['Submit']))
   {
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);
        $age = mysqli_real_escape_string($mysqli, $_POST['age']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);

        if( empty($name) || empty($age) || empty($email)) 
        {
            if(empty($name))
            {
                echo "<font color='red'> Name field is empty. </font> <br>";
            }

            if(empty($age))
            {   
                echo "<font color='red'> Age field is empty. </font> <br>";
            } 

            if(empty($email))
            {
                echo "<font color='red'> Email field is empty. </font> <br>";
            }
            echo "<br><a href ='javascript:self.history.back();'>Go Back </a>";
        }
        else
        {
            $result = mysqli_query($mysqli, "INSERT INTO users(name, age, email) VALUES ('$name', '$age', '$email')");
            echo "<font color='green'> Data Added Successfully.";
            echo "<br> <a href='index.php'> View Result </a>"; 
        
        }
   }
?> 
</body>
</html>