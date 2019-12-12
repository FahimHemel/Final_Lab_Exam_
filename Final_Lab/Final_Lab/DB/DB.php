<?php

	function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 'WebTech');
		return $conn;
	}
?>