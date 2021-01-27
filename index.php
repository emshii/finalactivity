<?php
    include_once("config.php");

    $result = mysqli_query($mysqli, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href = "add.html">Add new Data </a><br><br>
    <h1> <?php  echo "PHP CRUD APP"; ?></h1>
    <table>
        <tr bgcolor='#cccccc'>
            <td> Name </td>
            <td> Age </td>
            <td> Email </td>
            <td> Created </td>
            <td> Update </td> 
        </tr>
        

        <?php
            while( $res = mysqli_fetch_array($result)){
                echo "<tr>";

                echo "<td>".$res['name']."</td>";
                echo "<td>".$res['age']."</td>";
                echo "<td>".$res['email']."</td>";
                echo "<td>".$res['date_created']."</td>";
                echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a>";
                echo "</tr>";
            }
            
         ?>
    </table>
</body>
</html>