<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div align="center">
        <?php
        // put your code here
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `dato` FROM `monitor` WHERE `id`='2'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	  echo "<h1>El valor del sensor es:&nbsp";
        echo $row["dato"];
        echo "</h1></br>";
}
            } else {
                echo "0 results";
            }
            $conn->close();
?>
        <a href="scadaAct.php"><img src="imagenes/activar.png"></a></br>
        <a href="scadaDeact.php"><img src="imagenes/desactivar.png"></a></br>
        </div>
    </body>
</html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
