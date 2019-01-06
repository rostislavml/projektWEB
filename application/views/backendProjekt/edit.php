<h3>Insert id of the user u want to edit and then his credentials</h3>
<form method="post" action="edit">
    <p>
        <label>ID:</label>
        <input type="number" name="id" id="id">
    </p>
    <p>
        <label>New username:</label>
        <input type="text" name="username" id="username">
    </p>
    <p>
        <label>New email:</label>
        <input type="email" name="email" id="email">
    </p>
    <input type="submit" name="submit" value="Edit">
</form>
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

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['submit']))
{
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];

$sql = "UPDATE ion_users SET username = '$username',email = '$email' WHERE id = $id";

$return = mysqli_query($conn, $sql);
if(! $return )
{
  echo "Didnt work out";
}
echo "Updated data successfully";

}