<?php
	//$link=mysqli_connect('localhost:8889','usuario','','egogccom_plazatiempo') or die(mysqli_error($link));
    //$link=mysqli_connect('localhost','zicco','@abc.123','Zicco') or die(mysqli_error($link));	
	$link = new PDO('mysql:host=localhost;dbname=jobjob', 'jobjob_user', '@123.abc');
?>