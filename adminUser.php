<?php
$security =1;
include_once './dbfunc.php';
include_once './header.php';
include_once './member.php';
?>
<?php

$db = new db_function;

$user = $db-> getUser();

echo "<table border='1' bgcolor='#8cb82b'>
<tr>
<th>Action</th>
<th>ID</th>
<th>Username</th>
<th>Fullname</th>
<th>Access Level</th>
<th>Notes</th>
</tr>";

foreach ($user as $key=>$value) {
  echo "<tr>";
  echo "<td>"; ?>
  
	<a href="#" onclick="editUser(<?php echo $value->ID; ?>); return showHideForm('hiddenScore');">add/edit</a>
  
  <?php
  echo "</td>";
  echo "<td>" . $value->ID . "</td>";
  echo "<td>" . $value->username . "</td>";
  echo "<td>" . $value->fullname . "</td>";
  echo "<td>" . $value->access . "</td>";
  echo "<td>" . $value->notes . "</td>";
  echo "</tr>";
}
echo "</table>";
?>
	<div style="text-align:left;margin-left:20px; display: none;" id="hiddenScore">
						<div class="body1">Edited User</div>
						<span id="txtUser"></span>
						</div>


<?php include_once'./footer.php'; ?>