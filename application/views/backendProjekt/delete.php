<h3>Insert id of the user you want to delete</h3>
<form method="post" action="<?php $_PHP_SELF ?>">
    <p>
        <label>ID:</label>
        <input type="text" name="id" id="id">
    </p>
    <input type="submit" name="submit" id="submit" value="Delete">
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
$id = $_POST['id'];

$sql = "DELETE FROM ion_users WHERE id = '$id'";

$return = mysqli_query($conn, $sql);
if(! $return )
{
  echo "Didnt work out";
}
echo "Updated data successfully";

}