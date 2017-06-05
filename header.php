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
?>

<!DOCTYPE html>
<html>
<head>
<title>IndahPuri Handicap Information</title>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="stylesheet" type="text/css" href="./css/10057.css" />
<script type="text/javascript" src="handicap.js">
</script>
</head>
<body>
    <div id="wrapper">
        <div id="contentliquid"><div id="content">
        <div class="header">Indah Puri Handicap Information</div>
   
<h4>
Served By:  <?php echo $nama; ?> &nbsp&nbsp&nbsp
Today :
<script type="text/javascript">
    var d=new Date()
    var weekday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday",
                "Friday","Saturday")
    document.write("" + weekday[d.getDay()])
</script> 
<script type="text/javascript">
<!--
var currentTime = new Date()
var month = currentTime.getMonth() + 1
var day = currentTime.getDate()
var year = currentTime.getFullYear()
document.write(day + "/" + month + "/" + year)
//-->
</script>

&nbsp&nbsp&nbspTime: &nbsp<span id="txt">
</h3>

<body onload="startTime()">

