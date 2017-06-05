<?php
//session_start();
//$security=2;
include_once './dbfunc.php';
//include_once './header.php';
//include_once './member.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>IndahPuri Handicap Information</title>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="stylesheet" type="text/css" href="./css/10059.css" />
<script type="text/javascript" src="handicap.js">
</script>
</head>
<body>
    <div id="wrapper">
        <div id="contentliquid"><div id="content">
		<div class="logo"><img src="logo.png" alt="indahpuri" width="150" height="55"/></div>         
		<div class="header">Member Handicap Information</div> 
	<br><br><br>
	<div class="body1">

	Member ID: <input type="text" name="memberId" autofocus="autofocus" onkeyup="showHdcap(this.value)">(IPLXXX)
	<INPUT TYPE="button" class="smallButton" onClick="history.go(0)" VALUE="RESET">
	<br><br><span id="txtHdcap"></span>
	<!--
	<br>
						<div class="body1">Last Score</div>
						<span id="txtScore"></span>
						


       
        
     -->   
       	<br>
       
		<div class="body1">20 Last Score</div>
		<span id="txtData"></span>
		
    	</div></div>
    	
    	<div id="leftcolumn">
        <img src="logo.png" alt="indahpuri" width="150" height="55"/>
        </div>
    	
    	



</div>
</body>
</html>
