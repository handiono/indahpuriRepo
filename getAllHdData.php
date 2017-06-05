<?php
// Fill up array with names
include_once './dbfunc.php';
$db = new db_function;

// get the q parameter from URL
$memberId=$_REQUEST["memberId"]; $hint="";

$allhd = $db->getAllHd($memberId);

echo "<table border='1' bgcolor='#8cb82b'>
<tr>
<th>Action</th>
<th>Id</th>
<th>Date</th>
<th>H1</th>
<th>H2</th>
<th>H3</th>
<th>H4</th>
<th>H5</th>
<th>H6</th>
<th>H7</th>
<th>H8</th>
<th>H9</th>
<th>Out</th>
<th>H10</th>
<th>H11</th>
<th>H12</th>
<th>H13</th>
<th>H14</th>
<th>H15</th>
<th>H16</th>
<th>H17</th>
<th>H18</th>
<th>In</th>
<th>Gross</th>
<th>Course</th>
<th>Slope</th>
<th>Hand_Diff</th>
</tr>";

foreach ($allhd as $key=>$value) {
  echo "<tr>";
  echo "<td><a href=\"editData.php?id=".$value->id."\">edit/del</a></td>";
  echo "<td>" . $value->id . "</td>";
  echo "<td>" . date( 'Y-m-d', strtotime($value->date_play)) . "</td>";
  echo "<td>" . $value->h1 . "</td>";
  echo "<td>" . $value->h2 . "</td>";
  echo "<td>" . $value->h3 . "</td>";
  echo "<td>" . $value->h4 . "</td>";
  echo "<td>" . $value->h5 . "</td>";
  echo "<td>" . $value->h6 . "</td>";
  echo "<td>" . $value->h7 . "</td>";
  echo "<td>" . $value->h8 . "</td>";
  echo "<td>" . $value->h9 . "</td>";
  echo "<td>" . $value->total_out . "</td>";
  echo "<td>" . $value->h10 . "</td>";
  echo "<td>" . $value->h11 . "</td>";
  echo "<td>" . $value->h12 . "</td>";
  echo "<td>" . $value->h13 . "</td>";
  echo "<td>" . $value->h14 . "</td>";
  echo "<td>" . $value->h15 . "</td>";
  echo "<td>" . $value->h16 . "</td>";
  echo "<td>" . $value->h17 . "</td>";
  echo "<td>" . $value->h18 . "</td>";
  echo "<td>" . $value->total_in . "</td>";
  echo "<td>" . $value->total_gross . "</td>";
  echo "<td>" . $value->course_rating . "</td>";
  echo "<td>" . $value->slope_rating . "</td>";
  echo "<td>" . $value->hand_diff . "</td>";
//  echo "<td>" . $value->curr_hdcap . "</td>";
//  echo "<td>" . $value->curr_score . "</td>";
  echo "</tr>";
}
echo "</table>";

?>