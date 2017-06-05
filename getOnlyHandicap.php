<?php
// Fill up array with names
include_once './dbfunc.php';
$db = new db_function;


// get the q parameter from URL
$member=$_REQUEST["member"]; $hint="";

$b = $db->getMember($member);
$hd = $db->get10best($member);


if ($b){
echo "<div class='hdcap2'>Your Handicap</div><div class='hdcap1'>". number_format($hd*0.96,1)."</div>"
	;
}
else{
echo "This Number is not Registered, Please check again";
}

?>