<?php
$servername = "jayers.domaincommysql.com";
$username = "easylodging";
$password = "Amoeba01";
$dbname = "easylodging";


  $firstname = "firstname";
  $lastname = "lastname";
  $email = "email";
  $address = "address";
  $comment = "comment";
  $preferred = "preferred";
  $room = "room";
  $NumberOfNights = "NumberOfNights";
  $AdultCount = "AdultCount";
  $YouthCount = "YouthCount";
  $ChildCount = "ChildCount";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);}

$sql = "INSERT INTO Guests (firstname, lastname, email, adddress, comment, preferred, room, NumberOfNights, AdultCount, YouthCount, ChildCount)
VALUES ($name, $email, $comment, $preferred, $room, $NumberOfNights, $AdultCount, $YouthCount, $ChildCount)";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();*/

define('DB_HOST', 'jayers.domaincommysql.com');
define('DB_NAME', 'easylodging');
define('DB_USER','easylodging');
define('DB_PASSWORD','Amoeba01');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
echo “Successfully connected to your database…”;
}
?>


