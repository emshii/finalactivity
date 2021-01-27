 <?php 
    //connect to mysql server
    $dbhost = 'localhost';
    $dbname = 'test';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    $result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php  echo "PHP CRUD APP"; ?></h1>
    <table>
        <tr bgcolor='#cccccc'>
            <td> Name </td>
            <td> Age </td>
            <td> Email </td>
            <td> Created </td>  
        </tr>
        

        <?php
            while( $res = mysqli_fetch_array($result)){
                echo "<tr>";

                echo "<td>".$res['name']."</td>";
                echo "<td>".$res['age']."</td>";
                echo "<td>".$res['email']."</td>";
                echo "<td>".$res['date_created']."</td>";

                echo "</tr>";
            }
            
         ?>
    </table>
</body>
</html>