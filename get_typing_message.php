<?php
	$id= $_GET["id"];
	$split = explode("//",$id);
	$receiver_id = $split[0];
	$sender_id = $split[1];
	$con = mysqli_connect("localhost","root","","show_message");
	$result = mysqli_query($con,"select * from typing_message where sender_id = '$sender_id' AND receiver_id = '$receiver_id' ");
	$row=mysqli_fetch_assoc($result);
	$typing_message = $row["typing_message"];
	echo $typing_message;
?>
