<h3>Insert credentials of the user you want to create</h3>
<form method="post" action="add">
    <p>
        <label>Username:</label>
        <input type="text" name="username" id="username">
    </p>
    <p>
        <label>Password:</label>
        <input type="password" name="password" id="password">
    </p>
    <p>
        <label>New email:</label>
        <input type="email" name="email" id="email">
    </p>
    <input type="submit" name="submit" value="Add">
</form>
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "walder";
//Připojení do db
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO ion_users (username, password, email) VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."')";

$return = mysqli_query($conn, $sql);
if(! $return )
{
  echo "Didnt work out";
}
echo "Updated data successfully";

}