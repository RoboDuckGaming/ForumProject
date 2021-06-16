<?php
require_once('config.php');
?>
<?php


if(isset($_POST)){

	$username 		= $_POST['username'];
	$email 			= $_POST['email'];
	$wachtwoord 		= sha1($_POST['wachtwoord']);

		$sql = "INSERT INTO users (username, email, wachtwoord ) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$username, $email, $wachtwoord]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}