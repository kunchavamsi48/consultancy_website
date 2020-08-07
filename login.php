<?php

session_start();
$con = mysqli_connect('localhost','root');
if (!$con){
    echo "no connection";
}

mysqli_select_db($con, 'users');
$name = $_POST['uid'];
$pass = $_POST['pwd'];
$q = "SELECT * FROM userdata WHERE uname = '$name' && psw = '$pass' ";
$result = mysqli_query($con, $q);
if(mysqli_num_rows($result) == 1) {
	while($row = $result->fetch_assoc()) {
		$original_name = $row['name'];
	}
	$_SESSION['username'] = $original_name;
	header('location:home.php');
}else{
	header('location:index.html');
}

?>
<!-- username = 121810308036 password = "infintyfree@2020" -->