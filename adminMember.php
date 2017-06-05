<?php
$security =1;
include_once './dbfunc.php';
include_once './header.php';
include_once './member.php';
?>
<p><a href="addMember.php" class="smallButton">Add New</a></p>
<?php

$db = new db_function;

$member = $db-> getMemberData();

echo "<table border='1' bgcolor='#8cb82b'>
<tr>
<th>Action</th>
<th>ID</th>
<th>MemberID</th>
<th>Name</th>
<th>Picture</th>
<th>Notes</th>
<th>Certificate History</th>
<th>Certificate Issued</th>
</tr>";

foreach ($member as $key=>$value) {
  echo "<tr>";
  echo "<td>"; ?>
  	<a href="delMember.php?memberId=<?php echo $value->id; ?>">delete</a> &nbsp
  	<a href="editMember.php?memberId=<?php echo $value->id; ?>">edit</a>
  <?php
  echo "</td>";
  echo "<td>" . $value->id . "</td>";
  echo "<td>" . $value->member_no . "</td>";
  echo "<td>" . $value->name . "</td>";
  echo '<td><img src="data:image/jpeg;base64,'.base64_encode( $value->picture ).'"alt="$value->name" width="50" height="70"/></td>';
  echo "<td>" . $value->notes . "</td>";
  echo "<td><a href=\"listCert.php?memberId=".$value->id."\">List Certificate</a></td>";
  echo "<td><a href=\"issueCert.php?memberId=".$value->id."\">Issue Certificate</a></td>";
  echo "</tr>";
}
echo "</table>";
?>
	<div style="text-align:left;margin-left:20px; display: none;" id="hiddenScore">
						<div class="body1">Last Score</div>
						<span id="txtUser"></span>
						</div>


<?php include_once'./footer.php'; ?>