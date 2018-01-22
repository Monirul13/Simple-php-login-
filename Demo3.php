<?php

function Connection_Open()
{
	$host="localhost";
	$user="root";
	$pass="";
	static $connection;
	
	$connection=mysqli_connect($host,$user,$pass);
	
	if(mysqli_connect_errno())
	{
		die("Connection failed : ".mysqli_connect_errno());
	}
	
	$select_db=mysqli_select_db($connection,"demodb");
	if($select_db==false)
	{
		echo"Database Selection failed";
	}
	else
	{
		echo"Database selected successfully............";
	}
	
     //mysqli_close($connection);
	
    return $connection;

}

    //Connection_Open();

?>