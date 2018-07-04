<?php
if(isset($_GET["id"])){
	$id = $_GET["id"];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.main{
	border:solid 1px black;
	padding:5px 10px 5px 5px;
	width:30%;
	height:500px;
}
#show_message , #show_typing_message, #insert_message{
	width:98%;
	margin: 5px 5px 5px 0px;
}
#show_message {
	border:solid 1px black;
	border-radius: 5px;
	color:white;
	padding:5px 10px 5px 0px;
	text-align:right;
	height:400px;
	overflow-y:scroll;
}
#show_typing_message {
	border:solid 1px black;
	border-radius: 5px;
	background:#CCC;
	color:white;
	padding:5px 5px 5px 5px;
	height:20px;
}
#insert_message{
	border:solid 1px black;
	border-radius: 5px;
	background:#CCC;
	color:white;
	padding:5px 5px 5px 5px;
}
#id{
	display:none;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
<div id="id"><?php echo $id ?></div>
<label> Select user </label>
<select id="select_user">
<?php
	$con = mysqli_connect("localhost","root","","show_message");
	$result = mysqli_query($con,"select * from user");
	while($row=mysqli_fetch_assoc($result)){
	$user_name = $row["name"];
	$ids = $row["id"];
	if($ids == $id){}
	else{
?>
<option value="<?php echo $ids ?>"><?php echo $user_name ?></option>
<?php
	}
	}
?>
</select>
<div class="main">
    <div id="show_message">
    </div>
    <div id="show_typing_message">
    Typing...
    </div>
    <input type="text" id="insert_message" placeholder="Insert message" />
</div>

<script>
$(document).ready(function(){
setInterval(function(){
var id = $("#id").html();
var sender_id = $("#select_user").val();
$("#show_message").load("get_message.php?id="+id+'//'+sender_id );
}, 1000);
});
</script>
<script>
$("#insert_message").on('keyup', function (e) {
	if (e.keyCode == 13) {
	var input = $("#insert_message").val();
	var receiver_id = $("#select_user").val();
	var sender_id = $("#id").html();
   $.ajax({
	  url:'insert.php',
	  method:'POST',
	  data:{
		  input:input,
		  sender_id:sender_id,
		  receiver_id:receiver_id
	  },
	 success:function(data){
		 $("#insert_message").val(" ");
	 }
  });
	}
});
</script>

<script>
$('#insert_message').on('input',function(){
	var input = $("#insert_message").val();
	var receiver_id = $("#select_user").val();
	var sender_id = $("#id").html();
	 $.ajax({
		url:'insert_typing.php',
		method:'POST',
		data:{
			input:input,
			sender_id:sender_id,
			receiver_id:receiver_id
		},
	   success:function(data){
	   }
	});
	
});
</script>

<script>
$(document).ready(function(){
setInterval(function(){
var id = $("#id").html();
var send_id = $("#select_user").val();
$("#show_typing_message").load("get_typing_message.php?id="+id+'//'+send_id);
}, 1000);
});
</script>
<script>
window.setInterval(function() {
  var elem = document.getElementById('show_message');
  elem.scrollTop = elem.scrollHeight;
}, 200);
</script>
</body>
</html>
