
<h1>A list of users</h1>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projektWEB";

//Připojím DB
$conn = new mysqli($servername, $username, $password, $dbname);
//Zkontroluje připojení
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, username, email FROM ion_users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-bordered'><tr><th>Id</th><th>Jméno</th><th>Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<tr><td>". $row["id"] . "</td><td>" .$row["username"]. "</td><td>". " " .$row["email"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();