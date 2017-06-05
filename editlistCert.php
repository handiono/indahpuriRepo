<?php
$security =1;
include_once './dbfunc.php';
include_once './member.php';
include_once './header.php';

$db = new db_function;

$mid = $_GET['id'];

$dhd = $db->editCert($mid);
foreach ($dhd as $key=>$value)
$member= $db->getmember($value->member_no);
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

$memb=$member->id;
$date_play = $_POST['date_play'];

$d = new db_function;

$hd_issued = $_POST['hd_issued'];
$hd_data = $_POST['hd_data'];

$updatedata= $d->updateCert($mid,$date_play,$hd_issued,$hd_data);

if (!$updatedata){echo "Problem Data not Updated";} else {echo "Success";}

echo "<br><br>";
echo "<a href='adminMember.php' class='submitButton'>FINISH</a>";
$uri = "listCert.php?memberId=".$member->id;
echo '<META HTTP-EQUIV=Refresh CONTENT="1; URL='.$uri.'">';

}
else if (isset($_POST['delete'])) {

$del = $d->delCert($mid);
$uri = "listCert.php?memberId=".$member->id;
echo '<META HTTP-EQUIV=Refresh CONTENT="1; URL='.$uri.'">';
}
else {



echo "<div class='body1'>";
echo "CERTIFICATE HISTORY";
echo "<br><br>Name : ".$member->name;
echo "<br>Member ID: ".$value->member_no;
echo "<br>Notes: ".$member->notes;
echo "<br>Picture: ".'<img src="data:image/jpeg;base64,'.base64_encode( $member->picture ).'"alt="$member->name" width="150" height="200"/>';

echo "</div><br>";


echo "<table border='1' bgcolor='#8cb82b'>
<tr>
<th>Id</th>
<th>Date</th>
<th>Handicap Issue</th>
<th>Handicap Data</th>
</tr>";
  echo "<tr>";
  echo "<td>" . $value->id . "</td>";
  echo "<td><input type='date' name='date_play' value='". date( 'Y-m-d', strtotime($value->date)) . "'></td>";
  echo "<td><input type='text' size='5' name='hd_issued' value='".$value->hd_issued."'></td>";
  echo "<td><input type='text' size='32' name='hd_data' value='".$value->hd_data."'></td>";
  echo "</tr>";
echo "</table>";





echo "</table>";

echo "<br><br><input class='submitButton' type='submit' name='proses' value='PROCESS'>";
echo "<input class='submitButton' type='submit' name='delete' value='DELETE' onclick='return deleteconfig()'>";
echo "<INPUT TYPE='button' class='submitButton' onClick='history.go(-1)' VALUE='CANCEL'>";
echo "</form>";
}

?>

<?php include_once'./footer.php'; ?>
