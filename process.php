<?php
$TeamName = $_POST["teamname"];
$email =  $_POST["email"];
$phoneNumber =  $_POST["phonenumber"];
$logo =  $_POST["logourl"];
$player1name =  $_POST["player1name"];
$player2name =  $_POST["player2name"];
$player3name =  $_POST["player3name"];
$player4name =  $_POST["player4name"];
$player5name =  $_POST["player5name"];
$player6name =  $_POST["player6name"];
$player1ign =  $_POST["player1ign"];
$player2ign =  $_POST["player2ign"];
$player3ign =  $_POST["player3ign"];
$player4ign =  $_POST["player4ign"];
$player5ign =  $_POST["player5ign"];
$player6ign =  $_POST["player6ign"];
$player6id = $_POST["player6id"];
$player5id = $_POST["player5id"];
$player4id = $_POST["player4id"];
$player3id = $_POST["player3id"];
$player2id = $_POST["player2id"];
$player1id = $_POST["player1id"];
$bkashnumber = $_POST["bkashnumber"];
$transiction = $_POST["transiction"];
include "db.php";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO teams (TeamName, Email, PhoneNumber , TeamLogo , Player1Name , Player1Ign , Player1Id ,  Player2Name , Player2Ign , Player2Id ,  Player3Name , Player3Ign , Player3Id ,  Player4Name , Player4Ign , Player4Id ,  Player5Name , Player5Ign , Player5Id ,  Player6Name , Player6Ign , Player6Id , BkashNumber , Transiction)
VALUES ('$TeamName', '$email', '$phoneNumber' , '$logo' , '$player1name' , '$player1ign' , '$player1id', '$player2name' , '$player2ign', '$player2id' , '$player3name' , '$player3ign' , '$player3id' , '$player4name' , '$player4ign' , '$player4id' , '$player5name' , '$player5ign' , '$player5id' , '$player6name' , '$player6ign' , '$player6id' , '$bkashnumber' , '$transiction')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 
 
 ?>