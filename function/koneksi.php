<?php

	$server = "aa9ws3jo1fgegy.ceyffbcurh55.us-east-1.rds.amazonaws.com";
	$username = "admin";
	$password = "admin123";
	$database = "ebdb";
	
	$koneksi = mysqli_connect($server, $username, $password, $database) or die("Koneksi ke database gagal");
	
