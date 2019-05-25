<?php 

$conn = mysqli_connect('localhost', 'root', '', 'gaiman');


if (mysqli_connect_errno()){
	echo 'Failed to connect to mysqli '. mysqli_connect_errno();
	
}

?>