<?php
// Fill up array with names
include_once './dbfunc.php';
$db = new db_function;

// get the q parameter from URL
$memberId=$_REQUEST["memberId"]; $hint="";

$best20 = $db->get20best($memberId);

echo "<table border='1' bgcolor='#8cb82b'>
<tr>
<th>Hole</th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>Out</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th>18</th>
<th>In</th>
<th>Gross</th>
<th>Net Score</th>
<th>Hand_Diff</th>
<th>Daily Hd</th>
</tr>";

foreach ($best20 as $key=>$value) {
  echo "<tr>";
  echo "<td>" . date( 'Y-m-d', strtotime($value->date_play)) . "</td>";
//  echo "<td>" . $value->date_play. "</td>";  
  echo "<td width='20'>" . $value->h1 . "</td>";
  echo "<td width='20'>" . $value->h2 . "</td>";
  echo "<td width='20'>" . $value->h3 . "</td>";
  echo "<td width='20'>" . $value->h4 . "</td>";
  echo "<td width='20'>" . $value->h5 . "</td>";
  echo "<td width='20'>" . $value->h6 . "</td>";
  echo "<td width='20'>" . $value->h7 . "</td>";
  echo "<td width='20'>" . $value->h8 . "</td>";
  echo "<td width='20'>" . $value->h9 . "</td>";
  echo "<td width='30'>" . $value->total_out . "</td>";
  echo "<td width='20'>" . $value->h10 . "</td>";
  echo "<td width='20'>" . $value->h11 . "</td>";
  echo "<td width='20'>" . $value->h12 . "</td>";
  echo "<td width='20'>" . $value->h13 . "</td>";
  echo "<td width='20'>" . $value->h14 . "</td>";
  echo "<td width='20'>" . $value->h15 . "</td>";
  echo "<td width='20'>" . $value->h16 . "</td>";
  echo "<td width='20'>" . $value->h17 . "</td>";
  echo "<td width='20'>" . $value->h18 . "</td>";
  echo "<td width='30'>" . $value->total_in . "</td>";
  echo "<td>" . $value->total_gross . "</td>";
  $date1 = date( 'Y-m-d', strtotime($value->date_play));
  $hd = $db->get10bestfrom20lastmiddle($memberId,$date1);
  $curr_hdcap = $hd*0.96;
  $curr_score = $value->total_gross - $curr_hdcap;
  
//  echo "<td>" . $value->curr_score . "</td>";  
  echo "<td>" . number_format($curr_score,2) . "</td>";
  echo "<td>" . $value->hand_diff . "</td>";
//  echo "<td>" . $value->curr_hdcap . "</td>";
  echo "<td>" . number_format($curr_hdcap,2) . "</td>";
  echo "</tr>";
}
echo "</table>";

?>