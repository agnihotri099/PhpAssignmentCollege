<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$name 		= $_POST['name'];
	$scholar 		= $_POST['scholar'];
	$email 			= $_POST['email'];
	$addr	= $_POST['addr'];
	$password 		= sha1($_POST['password']);

		$sql = "INSERT INTO users (name, scholar, email, addr, password ) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$name, $scholar, $email, $addr, $password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
