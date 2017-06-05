<?php
// Fill up array with names
include_once './dbfunc.php';
$dba = new db_function;

// get the q parameter from URL
$memberId=$_REQUEST["memberId"]; $hint="";

$lscore = $dba->lastScore($memberId);

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

  echo "<tr>";
  echo "<td>" . date( 'Y-m-d', strtotime($lscore->date_play)) . "</td>";
  echo "<td width='20'>" . $lscore->h1 . "</td>";
  echo "<td width='20'>" . $lscore->h2 . "</td>";
  echo "<td width='20'>" . $lscore->h3 . "</td>";
  echo "<td width='20'>" . $lscore->h4 . "</td>";
  echo "<td width='20'>" . $lscore->h5 . "</td>";
  echo "<td width='20'>" . $lscore->h6 . "</td>";
  echo "<td width='20'>" . $lscore->h7 . "</td>";
  echo "<td width='20'>" . $lscore->h8 . "</td>";
  echo "<td width='20'>" . $lscore->h9 . "</td>";
  echo "<td width='30'>" . $lscore->total_out . "</td>";
  echo "<td width='20'>" . $lscore->h10 . "</td>";
  echo "<td width='20'>" . $lscore->h11 . "</td>";
  echo "<td width='20'>" . $lscore->h12 . "</td>";
  echo "<td width='20'>" . $lscore->h13 . "</td>";
  echo "<td width='20'>" . $lscore->h14 . "</td>";
  echo "<td width='20'>" . $lscore->h15 . "</td>";
  echo "<td width='20'>" . $lscore->h16 . "</td>";
  echo "<td width='20'>" . $lscore->h17 . "</td>";
  echo "<td width='20'>" . $lscore->h18 . "</td>";
  echo "<td width='30'>" . $lscore->total_in . "</td>";
  echo "<td>" . $lscore->total_gross . "</td>";
  echo "<td>" . $lscore->curr_score . "</td>";
  echo "<td>" . $lscore->hand_diff . "</td>";
  echo "<td>" . $lscore->curr_hdcap . "</td>";
  echo "</tr>";

echo "</table>";

?>