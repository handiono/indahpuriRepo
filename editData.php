<?php
$security =1;
include_once './dbfunc.php';
include_once './member.php';
include_once './header.php';

$db = new db_function;

$mid = $_GET['id'];

$dhd = $db->editHd($mid);
foreach ($dhd as $key=>$value)

//echo '<pre>'; print_r($dhd); echo '</pre>';

?>
<form name="input" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<script>
    function deleteconfig(){

    var del=confirm("Are you sure you want to delete this record?");
    if (del==true){
       
    }else{
        alert("Record Not Deleted")
    }
    return del;
    }
</script>
<?php 
if (isset($_POST['proses'])) {

//echo "id=".$mid."---";
$member=$dhd->member_id;
$date_play = $_POST['date_play'];
for ($i=1;$i<=18;$i++){
//$i=1;
${'h'.$i}=$_POST['h'.$i];
//echo ${'h'.$i};
}
$total_in = $h1+$h2+$h3+$h4+$h5+$h6+$h7+$h8+$h9;
$total_out = $h10+$h11+$h12+$h13+$h14+$h15+$h16+$h17+$h18;
$total_gross = ($total_in+$total_out);
$d = new db_function;

$course_rating = $_POST['course_rating'];
$slope_rating = $_POST['slope_rating'];

$hd = $d->get10best($member);

$hand_diff = ($total_gross - $course_rating)*113/$slope_rating;
$curr_hdcap = $hd*0.96;
$curr_score = $total_gross-$curr_hdcap;
//echo $curr_score;
$updateaata= $d->updateStroke($mid,$date_play,$h1,$h2,$h3,$h4,$h5,$h6,$h7,$h8,$h9,$total_out,$h10,$h11,$h12,$h13,$h14,$h15,$h16,$h17,$h18,$total_in,$total_gross,$course_rating,$slope_rating,$hand_diff);

if (!$updateaata){echo "Problem Data not Updated";} else {echo "Success";}

echo "<br><br>";
echo "<a href='adminData.php' class='submitButton'>FINISH</a>";
$url='adminData.php'; 
echo '<META HTTP-EQUIV=Refresh CONTENT="5; URL='.$url.'">';

}
else if (isset($_POST['delete'])) {

$del = $d->delHd($mid);

}
else {

echo "<table border='1' bgcolor='#8cb82b'>
<tr>
<th>Id</th>
<th>Date</th>
</tr>";
  echo "<tr>";
  echo "<td>" . $value->id . "</td>";
  echo "<td><input type='date' name='date_play' value='". date( 'Y-m-d', strtotime($value->date_play)) . "'></td>";
//  echo "<td>" . date( 'Y-m-d', strtotime($value->date_play)) . "</td>";
  echo "</tr>";
echo "</table>";

echo "<br>";

echo "<table border='1' bgcolor='#8cb82b'>
<tr>
<th>H1</th>
<th>H2</th>
<th>H3</th>
<th>H4</th>
<th>H5</th>
<th>H6</th>
<th>H7</th>
<th>H8</th>
<th>H9</th>
<th>Out</th>
</tr>";  
  echo "<tr>";
  echo "<td><input type='text' size='3' name='h1' value='".$value->h1."'></td>";
  echo "<td><input type='text' size='3' name='h2' value='".$value->h2."'></td>";
  echo "<td><input type='text' size='3' name='h3' value='".$value->h3."'></td>";
  echo "<td><input type='text' size='3' name='h4' value='".$value->h4."'></td>";
  echo "<td><input type='text' size='3' name='h5' value='".$value->h5."'></td>";
  echo "<td><input type='text' size='3' name='h6' value='".$value->h6."'></td>";
  echo "<td><input type='text' size='3' name='h7' value='".$value->h7."'></td>";
  echo "<td><input type='text' size='3' name='h8' value='".$value->h8."'></td>";
  echo "<td><input type='text' size='3' name='h9' value='".$value->h9."'></td>";
  echo "<td>" . $value->total_out . "</td>";
echo "</table>";

echo "<br>";

echo "<table border='1' bgcolor='#8cb82b'>

<th>H10</th>
<th>H11</th>
<th>H12</th>
<th>H13</th>
<th>H14</th>
<th>H15</th>
<th>H16</th>
<th>H17</th>
<th>H18</th>
<th>In</th>
</tr>";
  
  echo "<td><input type='text' size='3' name='h10' value='".$value->h10."'></td>";
  echo "<td><input type='text' size='3' name='h11' value='".$value->h11."'></td>";
  echo "<td><input type='text' size='3' name='h12' value='".$value->h12."'></td>";
  echo "<td><input type='text' size='3' name='h13' value='".$value->h13."'></td>";
  echo "<td><input type='text' size='3' name='h14' value='".$value->h14."'></td>";
  echo "<td><input type='text' size='3' name='h15' value='".$value->h15."'></td>";
  echo "<td><input type='text' size='3' name='h16' value='".$value->h16."'></td>";
  echo "<td><input type='text' size='3' name='h17' value='".$value->h17."'></td>";
  echo "<td><input type='text' size='3' name='h18' value='".$value->h18."'></td>";
  echo "<td>" . $value->total_in . "</td>";
  echo "</table>";

echo "<br>";
 
 echo "<table border='1' bgcolor='#8cb82b'> 
  	<th>Gross</th>
	<th>Course Rating</th>
	<th>Slope Rating</th>
	<th>Hand_Diff</th>
	</tr>";
  
  echo "<td>".$value->total_gross."</td>";
  echo "<td><input type='text' size='5' name='course_rating' value='".$value->course_rating."'></td>";
  echo "<td><input type='text' size='5' name='slope_rating' value='".$value->slope_rating."'></td>";
  echo "<td>" . $value->hand_diff . "</td>";
//  echo "<td>" . $value->curr_hdcap . "</td>";
//  echo "<td>" . $value->curr_score . "</td>";

  echo "</tr>";

echo "</table>";

echo "<br><br><input class='submitButton' type='submit' name='proses' value='PROCESS'>";
echo "<input class='submitButton' type='submit' name='delete' value='DELETE' onclick='return deleteconfig()'>";
echo "<INPUT TYPE='button' class='submitButton' onClick='history.go(-1)' VALUE='CANCEL'>";
echo "</form>";
}

?>