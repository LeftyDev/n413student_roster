<?php
include("php/n413connect.php");

$query = "SELECT id, first_name, last_name, photo from class_roster";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
	echo $row["first_name"].' '.$row["last_name"].'<br/>';
}




?>