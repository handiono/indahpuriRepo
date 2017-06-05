<?php
session_start();
//include_once './dbfunc.php';

$access=$_SESSION['access'];
$name= $_SESSION['uid'];
$pwd=$_SESSION['pwd'];
//echo $access.$name.$pwd;
  	$d = new db_function;
	$hasil = $d->checkUser($name,$pwd);
	$newaccess=$hasil->access;
	$nama=$hasil->fullname;
//echo "newaccess=".$newaccess;
//echo "security=".$security;   	
  if (count($hasil)==0)
  {
  //check bener ngak
  	
	//if($newaccess != $access)
	//{
  
      echo "<h3>Registered Members Only</h3><br>";
      echo "<h2>Please <a href='index.php'>login</a>
     To Access This Page!</h2>";
      echo "</html>";
      exit();
      //}
  }
  else
  {
	  //check access Level
	//echo "reg user";
	if($newaccess == "1")
	{
	$us = "admin";
	}
	else if ($newaccess == $security)
	{ 
	$us = "user";
	}
	else 
	{ 
	echo "You are not authorize to access this page"; 
	session_unset();
	session_destroy();
	header("location:index.php");
	exit();
	}
	
	
	
  
	
	  
  }
?>  