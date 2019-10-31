
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_master";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];

if(!empty($id))
{

  // Check record exists
  // $checkRecord = mysqli_query($con,"SELECT * FROM users WHERE id=".$id);
  // $totalrows = mysqli_num_rows($checkRecord);

  // if($totalrows > 0){
    // Delete record
    $query = "DELETE FROM users WHERE id=".$id;
    mysqli_query($conn,$query);
    echo 1;
  // }
}
else
{
  echo 0;
}

exit;
