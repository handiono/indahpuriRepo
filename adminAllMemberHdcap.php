<?php
$security =1;
include_once './dbfunc.php';
include_once './header.php';
include_once './member.php';
?>

<?php

$db = new db_function;

$member = $db-> allMemberLastCert();

echo "<table border='1' bgcolor='#8cb82b'>
<tr>
<th>MemberID</th>
<th>Name</th>
<th>Date</th>
<th>Last Certificate</th>
<th>Handicap Data</th>
<th>Notes</th>
</tr>";

foreach ($member as $key=>$value) {
  echo "<tr>";
  echo "<td>" . $value->member_no . "</td>";
  echo "<td>" . $value->name . "</td>";
  echo "<td>" . $value->date . "</td>";
  echo "<td>" . $value->hd_issued . "</td>";
   echo "<td>" . $value->hd_data . "</td>";
    echo "<td>" . $value->note . "</td>";
  echo "</tr>";
}
echo "</table>";
?>
	<div style="text-align:left;margin-left:20px; display: none;" id="hiddenScore">
						<div class="body1">Last Score</div>
						<span id="txtUser"></span>
						</div>


<?php include_once'./footer.php'; ?>