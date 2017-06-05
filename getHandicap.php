<?php
// Fill up array with names
include_once './dbfunc.php';
$db = new db_function;


// get the q parameter from URL
$member=$_REQUEST["member"]; $hint="";

$b = $db->getMember($member);
$hd = $db->get10bestfrom20last($member);
$issueHd=$db->lastCert($member);

if ($b){
echo "<div class='body1'>Name    : ".$b->name ."</div>". 
	'<br><img src="data:image/jpeg;base64,'.base64_encode( $b->picture ).'"alt="$b->name" 
	width="150" 
	height="200"
	/>'
	."<br><br><div class='hdcap2'>
	<table width='600'>
	<tr>
	<td>
	Daily Handicap
	</td>
	<td>
	Issued Handicap
	</td>
	</tr>
	</div>
	<tr>
	<td>
	<div class='hdcap1'>". number_format($hd*0.96,1)."
	</td>
	<td>
	<div class='hdcap1'>". $issueHd->hd_issued."
	</td>
	</tr>
	</div></table>"
	;
}
else{
echo "This Number is not Registered, Please check again";
}

// lookup all hints from array if $q is different from "" 
/*
if ($q !== "") {
  $q=strtolower($q); $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name,0,$len))) {
      if ($hint==="") {
        $hint=$name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint were found
// or output the correct values 
echo $hint==="" ? "no suggestion" : $hint;
*/
?>