<?php
//session_start();
$security = 2 ;
include_once './dbfunc.php';
include_once './header.php';
include_once './member.php'; 
?>


<form name="input" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

<?php if (isset($_POST['proses'])) : ?>

<?php
$member=strtoupper($_POST['memberId']);
//echo $member;
$rating=$_POST['rating'];
//echo $rating;

for ($i=1;$i<=18;$i++){
//$i=1;
${'h'.$i}=$_POST['h'.$i];
//echo ${'h'.$i};
}
$total_out = $h1+$h2+$h3+$h4+$h5+$h6+$h7+$h8+$h9;
$total_in = $h10+$h11+$h12+$h13+$h14+$h15+$h16+$h17+$h18;
$total_gross = ($total_in+$total_out);
$d = new db_function;

$b = $d->getMember($member);

$rate = $d->getRating($rating);
$course_rating = $rate->course_rating;
$slope_rating = $rate->slope_rating;

$hd = $d->get10bestfrom20last($member);

$hand_diff = ($total_gross - $course_rating)*113/$slope_rating;
$curr_hdcap = $hd*0.96;
$curr_score = $total_gross-$curr_hdcap;


//echo $b->name;
//echo $b->member_no;
//echo '<img src="data:image/jpeg;base64,'.base64_encode( $b->picture ).'"alt="$b->name" width="100" height="100"/>';
$inputStroke = $d->inputStroke($member,$h1,$h2,$h3,$h4,$h5,$h6,$h7,$h8,$h9,$total_out,$h10,$h11,$h12,$h13,$h14,$h15,$h16,$h17,$h18,$total_in,$total_gross,$course_rating,$slope_rating,$hand_diff,$curr_hdcap,$curr_score);
//echo $inputStroke;
?>
<!--
proses input section

<br> Total In = <?php echo ($total_in); ?>	
<br> Total Out = <?php echo ($total_out); ?>
<br> Total Gross = <?php echo $total_gross; ?>
<br> Course Rating = <?php echo $course_rating; ?>
<br> Slope Rating = <?php echo $slope_rating; ?>
-->
<?php 

//$hand_diff = $hand_diff * 113 ;
//$hand_diff = $hand_diff / $slope_rating ; 
?>
<!--
<br> Hand_diff = <?php echo number_format($hand_diff, 2); ?>
<br> Average 10Best Handicap Diff = <?php echo number_format($hd, 2); ?>
<br> USGA Handicaps Index = <?php echo number_format($curr_hdcap, 1); ?>
<br> TODAY SCORE = <?php echo number_format($curr_score, 1); ?>
-->
<br><br><INPUT TYPE="button" class="submitButton" onClick="history.go(0)" VALUE="FINISH">
<?php $url='input.php'; echo '<META HTTP-EQUIV=Refresh CONTENT="3; URL='.$url.'">'; ?>


<?php elseif (isset($_POST['check'])) : ?>

<?php
$member=strtoupper($_POST['memberId']);
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
<div class="body1">
<br>Member ID: <input type="text" name="memberId" onkeyup="showHint(this.value)" value="<?php echo $member; ?>">
<br>Name : <?php echo $b->name; ?>
<br>Picture : <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $b->picture ).'"alt="$b->name" width="150" height="200"/>'; ?>


<br><br>Tee Position : 

<table>
<tr>
<td>
<input type="radio" name="rating" id="radio1" value="blue" class="css-checkbox" <?php if (isset($rating) && $rating=="blue") echo "checked";?>/>
<label for="radio1" class="css-label radGroup1"><span <?php if (isset($rating) && $rating=="blue") echo "style='background:blue;color:white;font-weight:normal'";?>>B l u e</span></label>
</td>
<td>
<input type="radio" name="rating" id="radio2" value="white" class="css-checkbox" <?php if (isset($rating) && $rating=="white") echo "checked";?>/>
<label for="radio2" class="css-label radGroup1"><span <?php if (isset($rating) && $rating=="white") echo "style='background:white;color:black;font-weight:normal'";?>>W h i t e</label>
</td>
<td>
<input type="radio" name="rating" id="radio3" value="red" class="css-checkbox" <?php if (isset($rating) && $rating=="red") echo "checked";?>/>
<label for="radio3" class="css-label radGroup1"><span <?php if (isset($rating) && $rating=="red") echo "style='background:red;color:white;font-weight:normal'";?>>R e d</span></label>
</td>
</tr>
</table>

<br>
<table style="width:300px">
<tr>
<?php for($i=1; $i<=9; $i++) : ?>
  <td><?php echo "Hole:".$i ?></td>
<?php  endfor; ?>
<td>OUT</td>
</tr>
<tr>
<?php for($i=1; $i<=9; $i++) : ?>
  <td><input type="text" name="<?php echo "h".$i ?>" min="1" size="5" value="<?php echo ${'h'.$i} ?>"></td>
<?php $total_out=$total_out + ${'h'.$i}; endfor; ?>
<td><span style="background:black;"><?php echo $total_out; ?></span</td>
</tr>


<tr>
<?php for($i=10; $i<=18; $i++) : ?>
  <td><?php echo "Hole:".$i ?></td>
<?php  endfor; ?>
<td>IN</td>
</tr>
<tr>
<?php for($i=10; $i<=18; $i++) : ?>
  <td><input type="text" name="<?php echo "h".$i ?>" min="1" size="5" value="<?php echo ${'h'.$i} ?>"></td>
<?php $total_in=$total_in + ${'h'.$i}; endfor; ?>
<td><span style="background:black;"><?php echo $total_in; ?></span></td>
</tr>
</table>

<br><?php echo "Total Gross = ".($total_out + $total_in); ?>

</div>
<br><input class="submitButton" type="submit" name="proses" value="PROCESS">
		<input class="submitButton" type="submit" name="check" value="CHECK">
 </form>

<?php  else : ?>
<p><a href="inputOtherCourse.php" class="smallButton">Other Course</a></p>

<br>
<div class="body1">
Member ID: <input type="text" name="memberId" onkeyup="showHint(this.value)">
<br>
<span id="txtHint"></span>
</div>
<br>
<!-- Member ID: <input type="text" name="memberId"><br> -->

<div class="body1">Tee Position!</div>
<br>
<table>
<tr>
<td>
<input type="radio" name="rating" id="radio1" value="blue" class="css-checkbox" />
<label for="radio1" class="css-label radGroup1"><span style="background:blue;color:white;font-weight:normal">B l u e</span></label>
</td>
<td>
<input type="radio" name="rating" id="radio2" value="white" class="css-checkbox" checked="checked"/>
<label for="radio2" class="css-label radGroup1"><span style="background:white;color:black;font-weight:normal">W h i t e</label>
</td>
<td>
<input type="radio" name="rating" id="radio3" value="red" class="css-checkbox" />
<label for="radio3" class="css-label radGroup1"><span style="background:red;color:white;font-weight:normal">R e d</span></label>
</td>
</tr>
</table>
<br>
<table style="width:300px">
<tr>
<?php for($i=1; $i<=9; $i++) : ?>
  <td><div class="body1"><?php echo "Hole ".$i.":" ?></div></td>
<?php  endfor; ?>
</tr>
<tr>
<?php for($i=1; $i<=9; $i++) : ?>
  <td><input type="number" name="<?php echo "h".$i ?>" min="1" max="1300"></td>
<?php  endfor; ?>
</tr>
</table>
<table style="width:300px">
<tr>
<?php for($i=10; $i<=18; $i++) : ?>
  <td><div size="6"class="body1"><?php echo "Hole ".$i.":" ?></span></td>
<?php  endfor; ?>
</tr>
<tr>
<?php for($i=10; $i<=18; $i++) : ?>
  <td><div class="body1"><input type="number" name="<?php echo "h".$i ?>" min="1" max="1300"></span></td>
<?php  endfor; ?>
</tr>
</table>




<br><br><input class="submitButton" type="submit" name="check" value="CHECK">
</form>
<p><b>Note:</b> </p>

<?php endif; ?>
       
<?php include_once'./footer.php'; ?>
  