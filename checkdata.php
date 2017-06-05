<?php
//session_start();
include_once './dbfunc.php';

echo "<form name='input' action='inputdata.php' method='post'>";


$member=$_POST['memberId'];
echo $member;

$rating=$_POST['rating'];
echo $rating;

for ($i=1;$i<=18;$i++){
//$i=1;
${'h'.$i}=$_POST['h'.$i];
echo ${'h'.$i};
}

$d = new db_function;
$b = $d->getMember($member);
echo $b->name;
echo $b->member_no;
echo '<img src="data:image/jpeg;base64,'.base64_encode( $b->picture ).'"alt="$b->name" width="100" height="100"/>';

echo "<br><br><input type='submit' value='Submit'>";
echo "</form>";
?>
