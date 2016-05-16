<?php
// define variables and set to empty values
$name = $email = $preferred = $comment = $website = $daysLodging = $room = $NumberOfNights = $YouthCount = $AdultCount = $ChildCount;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $email = test_input($_POST["email"]);
  $address = test_input($_POST["address"]);
  $comment = test_input($_POST["comment"]);
  $preferred = test_input($_POST["preferred"]);
  $room = test_input($_POST["room"]);
  $NumberOfNights = test_input ($_POST["NumberOfNights"]);
  $AdultCount = test_input ($_POST["AdultCount"]);
  $YouthCount = test_input ($_POST["YouthCount"]);
  $ChildCount = test_input ($_POST["ChildCount"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
