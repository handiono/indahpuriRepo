<?php
$security = 2 ;
include_once './dbfunc.php';
include_once './member.php'; 
$db = new db_function;
$member = $db->editMember($_SESSION['memid']);
$member_no= $member->member_no;
$date=$_POST['tanggal'];
$hd_issued=$_POST['hdIndex'];
$hd_data=$_POST['latestDiff'];
$notes="";


?>



<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<style type="text/css">
body {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 9px;
    color:#333
}
nama
{
color:red;
font-size:23px;
position:absolute;
left:80px;
top:150px;
}

logo
{
position:absolute;
left:80px;
top:15px;
}

certhead
{
position:absolute;
left:80px;
top:65px;
font-family:copperplate;
font-size:11px;
}

picture
{
position:absolute;
left:210px;
top:80px;
}
date
{
position:absolute;
left:15px;
top:90px;
}
name
{
position:absolute;
left:15px;
top:110px;
}
memberid
{
position:absolute;
left:15px;
top:130px;
}
handindex
{
position:absolute;
left:15px;
top:150px;
}
latdiff
{
position:absolute;
left:15px;
top:170px;
}
printbutton
{
position:absolute;
left:15px;
top:200px;
}

backprintbutton
{
position:absolute;
left:15px;
top:230px;
}
.box {
    width: 250px;
    height:160px;
    padding: 10px;
    border: 2px solid gray;
    margin: 0px;
}
.backbox {
	float:right;
	left:10px;
	top:230px;
    width: 250px;
    height:160px;
    padding: 10px;
    border: 2px solid gray;
    margin: 0px;
	font-size: 8px;
}

.graph-7{background: url(certhandicap.png) no-repeat;}
.graph-img img{display: none;}

@media print{
  .graph-img img{display:inline;}
}

</style>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

<div id="printableArea"><div class="box">
<div class"graph-image graph-7">
<!--  <img src="certhandicap.png" alt="Graph Description" /> -->

<logo><img src="logo.png" alt="indahpuri" width="135" height="45"/></logo> 
<certhead>HANDICAP CERTIFICATE</certhead> 
<date>Date of Issued &nbsp&nbsp: <?php echo $_POST['tanggal']; ?></date>

<name>Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo $member->name; ?></name>

<memberid>Membership No : <?php echo $member->member_no; ?></memberid>

<picture><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $member->picture ).'"alt="$b->name" width="60" height="80"/>'; ?> </picture>

<handindex>Handicap Index : <?php echo $_POST['hdIndex']; ?></handindex>

<latdiff>Latest Diff : <?php echo $_POST['latestDiff']; ?></latdiff>
</div>
</div></div>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<printbutton><input type="button" onclick="printDiv('printableArea')" value="Print Handicap Certificate" /></printbutton>
<backprintbutton><input type="button" onclick="printDiv('backside')" value="Print Backside" /></backprintbutton>


<div id="backside"><div align="center" class="backbox">
<div class"graph-image graph-7">
<!--  <img src="certhandicap.png" alt="Graph Description" /> -->

This is not a membership card.
<br>This Handicap Certificate is non-transferrable.
<br>Valid for 3 months from Date of Issued.

<br><br>PT Guthrie Jaya Indah Island Resort
<br>Batam Club House
<br> Jln. Ir. Sutami, Patam Lestari, 29422 Sekupang
<br>Batam, Indonesia
<br> Tel: (62) 778 323702/3 Fax: (62) 778 323720
<br> Website: www.indahpuri.com
<br><br><br><br>__________________
<br> Authorized By

</div></div>
