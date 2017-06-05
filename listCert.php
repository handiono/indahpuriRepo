<?php
//session_start();
$security = 1 ;
include_once './dbfunc.php';
include_once './header.php';
include_once './member.php'; 
$_SESSION['memid'] = $_GET['memberId'];
$db = new db_function;
$member = $db->editMember($_SESSION['memid']);
    $today = time();
    $start_yr = date("Y",$today);
    $start_day = date("d",$today);
    $start_month = date("m",$today);
?>



<div class="body1">
CERTIFICATE HISTORY
<br><br>Name : <?php echo $member->name; ?>
<br>Member ID: <?php echo $member->member_no; ?>
<br>Notes: <?php echo $member->notes; ?>
</div>
<br>Picture : <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $member->picture ).'"alt="$b->name" width="150" height="200"/>'; ?>

<?php

$hdhist= $db->historyCert($member->member_no);
if ( empty ($hdhist))
{ echo "<br>No Certificate History Data";}
else 
{
echo "<br><br><table border='1' bgcolor='#8cb82b'>
<tr>
<th>Action</th>
<th>Date</th>
<th>Handicap Issued</th>
<th>Handicap Data</th>
<th>Re-Print</th>
</tr>";


foreach ($hdhist as $key=>$value) {
  echo "<tr>";
  echo "<td><a href=\"editlistCert.php?id=".$value->id."\">edit/del</a></td>";
  echo "<td>" . date( 'Y-m-d', strtotime($value->date)) . "</td>";
  echo "<td align='center'>" . $value->hd_issued . "</td>";
  echo "<td>" . $value->hd_data . "</td>";
  echo "<td><a href=\"reissueCert.php?id=".$value->id."\">Re-Print Certificate</a></td>";
  echo "</tr>";
}
echo "</table>";
}
?>

<?php include_once'./footer.php'; ?>
  