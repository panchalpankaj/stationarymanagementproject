<?php

$con=mysqli_connect("Localhost","root","","datatable");



if($con){
	//die("cannect to database".mysqli_connect_errno());
	}
	

define("UPLOAD_SRC",$_SERVER['DOCUMENT_ROOT']."/Naresh/program1/upload_src");

define("FETCH_SRC","http://127.0.0.1/Naresh/program1/upload_src");

?>