<?php
$security =1;
include_once './dbfunc.php';
include_once './header.php';
include_once './member.php';

$db = new db_function;



//echo '<pre>'; print_r($dhd); echo '</pre>';

?>
<form name="input" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

<?php if (isset($_POST['proses'])) {

for ($i=1;$i<=3;$i++){
//$i=1;
${'course_rating'.$i}=$_POST['course_rating'.$i];
${'slope_rating'.$i}=$_POST['slope_rating'.$i];
echo ${'course_rating'.$i};
echo ${'slope_rating'.$i};
$urate=$db->updateRating($i,${'course_rating'.$i},${'slope_rating'.$i});
}



if (!$updateaata){echo "false";} else {echo "true";}echo "prosesed";
}

$rat = $db->getAllRating();

echo "<table border='1' bgcolor='#8cb82b'>
<tr>
<th>Id</th>
<th>Tee Position</th>
<th>Course Rating</th>
<th>Slope Rating</th>
</tr>";

  foreach ($rat as $key=>$value) {
  echo "<tr>";
  echo "<td>" . $value->id . "</td>";
  echo "<td>" . $value->category . "</td>";
   echo "<td><input type='text' size='5' name='course_rating".$value->id."' value='".$value->course_rating."'></td>";
  echo "<td><input type='text' size='5' name='slope_rating".$value->id."' value='".$value->slope_rating."'></td>";
  echo "</tr>";
}

echo "</table>";


echo "<br><br><input class='submitButton' type='submit' name='proses' value='PROCESS'>";

echo "</form>";

?>
<?php include_once'./footer.php'; ?>