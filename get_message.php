<?php
	$id= $_GET["id"];
	$split = explode('//',$id);
	$receiver_id = $split[0];
	$sender_id = $split[1];
	$con = mysqli_connect("localhost","root","","show_message");
	$result = mysqli_query($con,"select * from messages where receiver_id='$id' and sender_id = '$sender_id' || receiver_id='$sender_id' and sender_id = '$id' order by message_id asc");
	while($row=mysqli_fetch_assoc($result)){
		$message = $row["message"];
		$sender_id_1 = $row["sender_id"];
		$receiver_id_1 = $row["receiver_id"];
		if($sender_id_1 == $sender_id){
			echo '<div style="text-align:left; width:100%; border-radius:5px; padding:5px; background:red; margin-top:5px;" >'.$message.'</div>';
		}
		else{
			echo '<div style="text-align:right; width:100%; background:blue; padding:5px; margin-top:5px;" >'.$message.'</div>';			
		}
	}
?>
