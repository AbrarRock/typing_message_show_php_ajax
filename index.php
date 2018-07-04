<?php
if(isset($_POST["user"]) && !empty($_POST["user_name"]) && !empty($_POST["password"])){
	$con = mysqli_connect("localhost","root","","show_message");
	$user_name = $_POST["user_name"];
	$password = $_POST["password"];
	$result = mysqli_query($con, "select * from user where name = '$user_name' and password='$password' ");
	if(mysqli_num_rows($result) == 0){
		mysqli_query($con,"insert into user(name,password) value('$user_name','$password')");		
		$result = mysqli_query($con, "select * from user where name = '$user_name' and password='$password' ");
		$row = mysqli_fetch_assoc($result);
		$id = $row["id"];
		header('Location:message.php?id='.$id);
	}
	else{
		$row = mysqli_fetch_assoc($result);
		$id = $row["id"];
		header('Location:message.php?id='.$id);
		}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
    <input type="text" id="user_name" name="user_name" placeholder="User Name"  />
    <input type="password" id="password" name="password" placeholder="Password" />
    <input type="submit" name="user"  />
</form>
</body>
</html>
