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
$username = "root";
$password = "";
$dbname = "projektWEB";

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['submit']))
{
$id = $_POST['id'];

$sql = "DELETE FROM ion_users WHERE id = '$id'";

$return = mysqli_query($conn, $sql);
if(! $return )
{
  echo "Didnt work out";
}
echo "Updated data successfully\n";

}

/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "walder";

$conn = new mysqli($servername, $username, $password, $dbname);

mysqli_select_db($conn, $dbname) or die( "Unable to select database");
mysqli_query($conn, "DELETE FROM ion_users WHERE id = $idelete");
 */