<?php
    include_once("config.php");

    $result = mysqli_query($mysqli, "SELECT * FROM users");

    //initialize session
    session_start();

    if( !isset($_SESSION['email']) || empty($_SESSION['email']))
    {
        header('location: login.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>PHP CRUD</title>
    <style>
        a{
            color:white;
        }
        a:hover{
            color:black;
        }
    </style>
</head>
<body style = "background-image: url('Back.png')" >
    <h1 class="text-center display-2 text-light"> <?php  echo "PHP CRUD"; ?></h1>
    <div class= container-sm>
        <table class="text-center table table-dark table-striped text-light">
        
            <tr bgcolor='#cccccc'>
                <td> Name </td>
                <td> Age </td>
                <td> Email </td>
                <td> Created </td>
                <td> Update </td> 
             </tr>
        
            <?php
                while( $res = mysqli_fetch_array($result))
                {
                    echo "<tr>";

                    echo "<td>".$res['name']."</td>";
                    echo "<td>".$res['age']."</td>";
                    echo "<td>".$res['email']."</td>";
                    echo "<td>".$res['date_created']."</td>";
                    echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a></td>";
                    echo "</tr>";
                }
            
            ?>
        
        </table>
        <a class="text-light mr-1 float-right btn btn-dark" href = "add.html">Add new Data </a>

        <p><a href="logout.php" class="btn btn-dark">Logout</a></p>
    </div>


    <script
			src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
			crossorigin="anonymous"
		></script>
</body>
</html>