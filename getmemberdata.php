<?php
// Fill up array with names
include_once './dbfunc.php';
$db = new db_function;


// get the q parameter from URL
$q=$_REQUEST["q"]; $hint="";

$b = $db->getMember($q);

if ($b){
echo "Name    : ".$b->name . '<br><br><img src="data:image/jpeg;base64,'.base64_encode( $b->picture ).'"alt="$b->name" width="115" height="150"/>';
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