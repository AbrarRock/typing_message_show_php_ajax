<?php
if(isset($_POST["input"])){
	$message = $_POST["input"];
	$receiver_id = $_POST["receiver_id"];
	$sender_id = $_POST["sender_id"];
	$con = mysqli_connect("localhost","root","","show_message");
	if($message != ''){
	mysqli_query($con,"insert into messages(sender_id,receiver_id,message) value('$sender_id','$receiver_id','$message')");
	}
}
?>