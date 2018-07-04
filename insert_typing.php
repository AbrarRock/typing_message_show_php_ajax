<?php
if(isset($_POST["input"])){
	$typing_message = $_POST["input"];
	$receiver_id = $_POST["receiver_id"];
	$sender_id = $_POST["sender_id"];
	$con = mysqli_connect("localhost","root","","show_message");
	$result = mysqli_query($con,"select * from typing_message where sender_id = '$sender_id' and receiver_id = '$receiver_id'");
	$rows_count = mysqli_num_rows($result);
	if($rows_count == 0){
		mysqli_query($con,"insert into typing_message (sender_id, receiver_id, typing_message) value('$sender_id','$receiver_id','$typing_message')");
	}
	else{
		mysqli_query($con,"update typing_message set typing_message = '$typing_message' where sender_id='$sender_id' AND receiver_id='$receiver_id' ");
	}
}
?>