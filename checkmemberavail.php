<?php
// Fill up array with names
include_once './dbfunc.php';
$db = new db_function;


// get the q parameter from URL
$q=$_REQUEST["q"]; $hint="";

$b = $db->getMember($q);

if ($b){
echo "<font color='red'> This Number Reserved for: ".$b->name ;
}
else{
echo "This Number is Available for New Member";
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