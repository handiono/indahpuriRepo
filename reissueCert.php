<?php
//session_start();
$security = 1 ;
include_once './dbfunc.php';
include_once './header.php';
include_once './member.php'; 

$certId = $_GET['id'];

$db = new db_function;
$recert = $db->editCert($certId);
foreach ($recert as $key=>$value)

$member = $db->getMember($value->member_no);
$_SESSION['memid'] = $member->id;


    $today = time();
    $start_yr = date("Y",$today);
    $start_day = date("d",$today);
    $start_month = date("m",$today);
?>


<form name="input" action="recertPrint.php" method="post" target="_blank" >

<div class="body1">
CERTIFICATE PRINTING
<br><br>Name : <?php echo $member->name; ?>
<br>Member ID: <?php echo $member->member_no; ?>
<br>Notes: <?php echo $member->notes; ?>
</div>
<br>Picture : <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $member->picture ).'"alt="$b->name" width="150" height="200"/>'; ?>

<br>Issue Date : <input type='Text' name="tanggal" value="<?php echo "$value->date"; ?>" id="tanggal" maxlength="12" size="12" readonly/>
<br>Handicap Index : <input  name="hdIndex" type="text" size="8" value="<?php echo "$value->hd_issued"; ?>" readonly/>
<br>Latest Diff : <input  name="latestDiff" type="text" size="50" value="<?php echo "$value->hd_data"; ?>" readonly/>


<br><br><input class="submitButton" type="submit" name="check" value="PROCESS" >
</form>

       
<?php include_once'./footer.php'; ?>
  