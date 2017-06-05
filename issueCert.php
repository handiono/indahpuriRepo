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


<form name="input" action="certPrint.php" method="post" target="_blank" >

<div class="body1">
CERTIFICATE PRINTING
<br><br>Name : <?php echo $member->name; ?>
<br>Member ID: <?php echo $member->member_no; ?>
<br>Notes: <?php echo $member->notes; ?>
</div>
<br>Picture : <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $member->picture ).'"alt="$b->name" width="150" height="200"/>'; ?>

<?php

$hdissue = $db->getHdataForCert($member->member_no);
foreach ($hdissue as $k=>$v){
$hd[] =$v->hand_diff;

}
?>
<br>Issue Date : <input type='Text' name="tanggal" value="<?php echo date("Y-m-d");?>" id="tanggal" maxlength="12" size="12">
<br>Handicap Index : <input  name="hdIndex" type="text" size="8" value="<?php echo $hd[0]; ?>"/>
<br>Latest Diff : <input  name="latestDiff" type="text" size="50" value="<?php echo $hd[0].",".$hd[1].",".$hd[2].",".$hd[3].",".$hd[4]; ?>"/>


<br><br><input class="submitButton" type="submit" name="check" value="PROCESS" >
</form>

       
<?php include_once'./footer.php'; ?>
  