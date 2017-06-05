<?php
//session_start();
include_once './dbfunc.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>IndahPuri Handicap System</title>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="stylesheet" type="text/css" href="./css/10057.css" />
<script type="text/javascript" src="handicap.js">
</script>
</head>
<body>
    <div id="wrapper">
        <div id="contentliquid"><div id="content">
        <div class="header">Indah Puri Handicap System</div>
   
<form name="input" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">


<?php if (isset($_POST['proses'])) : ?>
 <div style=" display: yes;" id="hiddenForm">

proses input section

<INPUT TYPE="button" class="submitButton" onClick="history.go(0)" VALUE="FINISH">
</div>
<?php elseif (isset($_POST['check'])) : ?>
 <div style="text-align:left;margin-left:20px; display: yes;" id="hiddenForm">
check proses

<?php
$member=$_POST['memberId'];
//echo $member;
$rating=$_POST['rating'];
//echo $rating;

for ($i=1;$i<=18;$i++){
//$i=1;
${'h'.$i}=$_POST['h'.$i];
//echo ${'h'.$i};
}

$d = new db_function;
$b = $d->getMember($member);
//echo $b->name;
//echo $b->member_no;
//echo '<img src="data:image/jpeg;base64,'.base64_encode( $b->picture ).'"alt="$b->name" width="100" height="100"/>';
?>

<br>Member ID: <?php echo $member; ?>
<br>Name : <?php echo $b->name; ?>
<br>Picture : <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $b->picture ).'"alt="$b->name" width="100" height="100"/>'; ?>

<br><br>Tee Position : <?php echo $rating; ?>
<br><br>
<table style="width:300px">
<tr>
<?php for($i=1; $i<=9; $i++) : ?>
  <td><?php echo "Hole:".$i ?></td>
<?php  endfor; ?>
</tr>
<tr>
<?php for($i=1; $i<=9; $i++) : ?>
  <td><?php echo ${'h'.$i}; ?></td>
<?php  endfor; ?>
</tr>


<tr>
<?php for($i=10; $i<=18; $i++) : ?>
  <td><?php echo "Hole:".$i ?></td>
<?php  endfor; ?>
</tr>
<tr>
<?php for($i=10; $i<=18; $i++) : ?>
  <td><?php echo ${'h'.$i}; ?></td>
<?php  endfor; ?>
</tr>
</table>

<br><br><input type="submit" class="submitButton"  name="proses" value="PROCESS">
</div>

<?php  else : ?>

 <div style="text-align:left;margin-left:20px; display: none;" id="hiddenForm">

Member ID: <input type="text" name="memberId" onkeyup="showHint(this.value)">

<p><span id="txtHint"></span></p>

<h1 style="margin:0; margin-top:10px; padding:0; padding-left:25px; padding-bottom:10px; font-family:sans-serif;">Tee Position!</h1>
<table>
<tr>
<td>
<input type="radio" name="rating" id="radio1" value="blue" class="css-checkbox" checked="checked"/>
<label for="radio1" class="css-label radGroup1">Blue</label>
</td>
<td>
<input type="radio" name="rating" id="radio2" value="white" class="css-checkbox" />
<label for="radio2" class="css-label radGroup1">White</label>
</td>
<td>
<input type="radio" name="rating" id="radio3" value="red" class="css-checkbox" />
<label for="radio3" class="css-label radGroup1">Red</label>
</td>
</tr>
</table>

<br><br>
<table style="width:300px">
<tr>
<?php for($i=1; $i<=9; $i++) : ?>
  <td><?php echo "Hole ".$i.":" ?></td>
<?php  endfor; ?>
</tr>
<tr>
<?php for($i=1; $i<=9; $i++) : ?>
  <td><input type="number" name="<?php echo "h".$i ?>" min="1" max="130"></td>
<?php  endfor; ?>
</tr>
</table>
<table style="width:300px">
<tr>
<?php for($i=10; $i<=18; $i++) : ?>
  <td><?php echo "Hole ".$i.":" ?></td>
<?php  endfor; ?>
</tr>
<tr>
<?php for($i=10; $i<=18; $i++) : ?>
  <td><input type="number" name="<?php echo "h".$i ?>" min="1" max="130"></td>
<?php  endfor; ?>
</tr>
</table>


<br><br><input class="submitButton" type="submit" name="check" value="CHECK">
   </form>
   </div>
   <?php endif; ?>
 <div style="text-align:left;margin-left:20px; display: none;" id="handicapForm">
Where Handicap is!
</div>


       </div></div>
       
        <div id="leftcolumn">
        <img src="logo.png" alt="indahpuri" width="150" height="55"/>
        <p><a href="#" onclick="return showHideForm('hiddenForm');" class="button">GROSS</a></p>
    	<p><a href="input.php"  class="button">INPUT</a></p>
        <p><a href="input.php" class="button">GROSS 1</a></p>
        <p><a href="deskHandicap.php" class="button">HANDICAP</a></p>
        </div>
    </div>
</body>
</html>
