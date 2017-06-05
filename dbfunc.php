<?php
//echo "test0";
include_once './DbConnect.php';
//echo "test1";
class db_function
{
 
    	
	function getRating($color)
	{
		$db = new DB_CONNECT();
		$query = "	SELECT
						* 
					FROM 
						rating
					WHERE
						category = '$color'";
	              		
		$result = mysql_query($query);	              		
		$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;		
		foreach ($data as $key=>$value)
				
		return $value;
	}
 
 function getAllRating()
	{
		$db = new DB_CONNECT();
		$query = "	SELECT
						* 
					FROM 
						rating
					";
	              		
		$result = mysql_query($query);	              		
		$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;		
		foreach ($data as $key=>$value)
				
		return $data;
	}
 
	function getMember($memberNo)
	{
		$db = new DB_CONNECT();
		$query = "	SELECT
						* 
					FROM 
						member
					WHERE
						member_no = '$memberNo'";
	              		
		$result = mysql_query($query);	              		
		$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;		
		foreach ($data as $key=>$value)
				
		return $value;
	} 
	
	function inputStrokeOld($member,$h1,$h2,$h3,$h4,$h5,$h6,$h7,$h8,$h9,$total_out,$h10,$h11,$h12,$h13,$h14,$h15,$h16,$h17,$h18,$total_in,$total_gross,$course_rating,$slope_rating,$hand_diff,$curr_hdcap,$curr_score)
	{
		$db = new DB_CONNECT();
		$query = "	INSERT INTO 
						hcap
						(member_id,h1 ,h2 ,h3 ,h4 ,h5 ,h6 ,h7 ,h8 ,h9 ,total_out ,h10 ,h11 ,h12 ,h13 ,h14 ,h15 ,h16 ,h17 ,h18 ,total_in ,total_gross ,course_rating ,slope_rating ,hand_diff,curr_hdcap ,curr_score )
					VALUES
						('".$member."','".$h1."','".$h2."','".$h3."','".$h4."','".$h5."','".$h6."','".$h7."','".$h8."','".$h9."','".$total_out."','".$h10."','".$h11."','".$h12."','".$h13."','".$h14."','".$h15."','".$h16."','".$h17."','".$h18."','".$total_in."','".$total_gross."','".$course_rating."','".$slope_rating."','".$hand_diff."','".$curr_hdcap."','".$curr_score."')";
	              		
		$result = mysql_query($query) or die(mysql_error());	              		
		
				
		return true;
	}
	
	function inputStroke($member,$h1,$h2,$h3,$h4,$h5,$h6,$h7,$h8,$h9,$total_out,$h10,$h11,$h12,$h13,$h14,$h15,$h16,$h17,$h18,$total_in,$total_gross,$course_rating,$slope_rating,$hand_diff)
	{
		$db = new DB_CONNECT();
		$query = "	INSERT INTO 
						hcap
						(member_id,h1 ,h2 ,h3 ,h4 ,h5 ,h6 ,h7 ,h8 ,h9 ,total_out ,h10 ,h11 ,h12 ,h13 ,h14 ,h15 ,h16 ,h17 ,h18 ,total_in ,total_gross ,course_rating ,slope_rating ,hand_diff)
					VALUES
						('".$member."','".$h1."','".$h2."','".$h3."','".$h4."','".$h5."','".$h6."','".$h7."','".$h8."','".$h9."','".$total_out."','".$h10."','".$h11."','".$h12."','".$h13."','".$h14."','".$h15."','".$h16."','".$h17."','".$h18."','".$total_in."','".$total_gross."','".$course_rating."','".$slope_rating."','".$hand_diff."')";
	              		
		$result = mysql_query($query) or die(mysql_error());	              		
		
				
		return true;
	}
	
		function updateStrokeOld($id,$h1,$h2,$h3,$h4,$h5,$h6,$h7,$h8,$h9,$total_out,$h10,$h11,$h12,$h13,$h14,$h15,$h16,$h17,$h18,$total_in,$total_gross,$course_rating,$slope_rating,$hand_diff,$curr_hdcap,$curr_score)
	{
		$db = new DB_CONNECT();
		$query = "	UPDATE hcap SET
					h1='$h1',
					h2='$h2',
					h3='$h3',
					h4='$h4',
					h5='$h5',
					h6='$h6',
					h7='$h7',
					h8='$h8',
					h9='$h9',
					h10='$h10',
					h11='$h11',
					h12='$h12',
					h13='$h13',
					h14='$h14',
					h15='$h15',
					h16='$h16',
					h17='$h17',
					h18='$h18',
					total_out='$total_out',
					total_in='$total_in',
					total_gross='$total_gross',
					course_rating='$course_rating',
					slope_rating='$slope_rating',
					hand_diff='$hand_diff',
					curr_hdcap='$curr_hdcap',
					curr_score='$curr_score'
					
					WHERE id='$id'";
	              		
		$result = mysql_query($query) or die(mysql_error());	              		
		
				
		return true;
	}
 
 function updateStroke($id,$date_play,$h1,$h2,$h3,$h4,$h5,$h6,$h7,$h8,$h9,$total_out,$h10,$h11,$h12,$h13,$h14,$h15,$h16,$h17,$h18,$total_in,$total_gross,$course_rating,$slope_rating,$hand_diff)
	{
		$db = new DB_CONNECT();
		$query = "	UPDATE hcap SET
					date_play='$date_play',
					h1='$h1',
					h2='$h2',
					h3='$h3',
					h4='$h4',
					h5='$h5',
					h6='$h6',
					h7='$h7',
					h8='$h8',
					h9='$h9',
					h10='$h10',
					h11='$h11',
					h12='$h12',
					h13='$h13',
					h14='$h14',
					h15='$h15',
					h16='$h16',
					h17='$h17',
					h18='$h18',
					total_out='$total_out',
					total_in='$total_in',
					total_gross='$total_gross',
					course_rating='$course_rating',
					slope_rating='$slope_rating',
					hand_diff='$hand_diff'
					
					WHERE id='$id'";
	              		
		$result = mysql_query($query) or die(mysql_error());	              		
		
				
		return true;
	}
 
 
 function updateRating($id,$crating,$srating)
	{
		$db = new DB_CONNECT();
		$query = "	UPDATE 
						rating
					SET course_rating = '$crating'
					   , slope_rating = '$srating'
	                WHERE id = '$id'";
	              		
		$result = mysql_query($query) or die(mysql_error());	              		
		
				
		return true;
	}
	
	function updateCert($id,$date,$hd_issued,$hd_data)
	{
		$db = new DB_CONNECT();
		$query = "	UPDATE 
						hdcert
					SET date = '$date'
					   , hd_issued = '$hd_issued'
					   , hd_data = '$hd_data'
	                WHERE id = '$id'";
	              		
		$result = mysql_query($query) or die(mysql_error());	              		
		
				
		return true;
	}
	
	function get10best($member_id)
	{
		$db = new DB_CONNECT();
		$query = " SELECT *
					FROM hcap 
					WHERE member_id= '$member_id' ORDER BY hand_diff LIMIT 10";
	              		
		$result = mysql_query($query) or die();	
				$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;	
				$x= count($data);
				if ($x ==0) 
				{
					$x=1 ;
				}		
		foreach ($data as $key=>$value)
		{
		$best10 = $best10 + $value->hand_diff;
		}		
		$avg = $best10 / $x;
		
		return $avg;
	}
	
	function get10bestfrom20last($member_id)
	{
		$db = new DB_CONNECT();
		$query = " SELECT * FROM (SELECT *
					FROM hcap 
					WHERE member_id= '$member_id' ORDER BY date_play desc LIMIT 20)	m				 
					ORDER BY hand_diff LIMIT 10";
	              		
		$result = mysql_query($query) or die();	
				$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;	
			$x= count($data);
				if ($x ==0) 
				{
					$x=1 ;
				}			
		foreach ($data as $key=>$value)
		{
		$best10 = $best10 + $value->hand_diff;
		}		
		$avg = $best10 / $x;
		
		return $avg;
	}
	
		function get10bestfrom20lastmiddle($member_id,$date)
	{
		$db = new DB_CONNECT();
		$query = " SELECT * FROM (SELECT *
					FROM hcap 
					WHERE member_id= '$member_id' AND date_play < '$date' ORDER BY date_play desc LIMIT 20)	m				 
					ORDER BY hand_diff LIMIT 10";
	              		
		$result = mysql_query($query) or die(mysql_error());	
				$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;		
			$x= count($data);
			if ($x ==0) 
			{
			$x=1 ;
			}
		foreach ($data as $key=>$value)
		{
		$best10 = $best10 + $value->hand_diff;
		}		
		$avg = $best10 / $x ;
		
		return $avg;
	}
 
	function get20best($member_id)
	{
		$db = new DB_CONNECT();
		$query = " SELECT *
					FROM hcap 
					WHERE member_id= '$member_id' ORDER BY date_play desc LIMIT 20";
	              		
		$result = mysql_query($query) or die();	
				$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;		
		return $data;
	} 
	
	function getHdataForCert($member_id)
	{
		
		$lastdate =$this->lastCert($member_id);
		$lastdate1 = $lastdate->date;
		$db = new DB_CONNECT();
		$query = " SELECT * 
					FROM  `hcap` 
					WHERE `member_id` =  '$member_id' 
					AND  `date_play` > '$lastdate1' ORDER BY hand_diff";
	              		
		$result = mysql_query($query) or die();	
				$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;		
		return $data;
	} 
	
	function getAllHd($member_id)
	{
		$db = new DB_CONNECT();
		$query = " SELECT *
					FROM hcap 
					WHERE member_id= '$member_id' ";
	              		
		$result = mysql_query($query) or die(mysql_error());	
				$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;		
		return $data;
	} 
	
	function editHd($id)
	{
		$db = new DB_CONNECT();
		$query = " SELECT *
					FROM hcap 
					WHERE id= '$id' ";
	              		
		$result = mysql_query($query) or die(mysql_error());	
				$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;		
		return $data;
	} 
	
	function editCert($id)
	{
		$db = new DB_CONNECT();
		$query = " SELECT *
					FROM hdcert 
					WHERE id= '$id' ";
	              		
		$result = mysql_query($query) or die(mysql_error());	
				$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;		
		return $data;
	} 
	
	function delHd($id)
	{
		$db = new DB_CONNECT();
		$query = "DELETE FROM hcap WHERE id ='$id'";

		
		$result = mysql_query($query) or die(mysql_error());	              		
		
				
		return true;
	}
	
	function delCert($id)
	{
		$db = new DB_CONNECT();
		$query = "DELETE FROM hdcert WHERE id ='$id'";

		
		$result = mysql_query($query) or die(mysql_error());	              		
		
				
		return true;
	}
	
	function inputMember($member_no,$name,$picture,$notes)
	{
		$db = new DB_CONNECT();
		$query = "	INSERT INTO 
						member
						(member_no,name,picture,notes)
					VALUES
						('".$member_no."','".$name."','{$picture}','".$notes."')";
	              		
		$result = mysql_query($query) or die(mysql_error());	              		
		
				
		return true;
	}
	
	function lastScore($member_id)
	{
		$db = new DB_CONNECT();
		$query = " SELECT *
					FROM hcap 
					WHERE member_id= '$member_id' ORDER BY date_play DESC LIMIT 1";
	              		
		$result = mysql_query($query);	              		
		$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;		
		foreach ($data as $key=>$value)
				
		return $value;
	}
	
	function checkUser($uid,$pwd)
	{
		$db = new DB_CONNECT();
		$sql = "SELECT * FROM user WHERE
        	username = '$uid' AND password = PASSWORD('$pwd')";
		$result = mysql_query($sql) or die("Your Username Wrong, Close and Start again the Program");
		$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;		
		foreach ($data as $key=>$value)
				
		return $value;
 	}
 	
 	function getUser()
	{
		$db = new DB_CONNECT();
		$sql = "SELECT * FROM user ";
		$result = mysql_query($sql) or die(mysql_error());
		$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;		
		foreach ($data as $key=>$value)
				
		return $data;
 	}
 	
 	function editUser($id)
	{
		$db = new DB_CONNECT();
		$sql = "SELECT * FROM user WHERE ID = '$id'";
		$result = mysql_query($sql) or die(mysql_error());
		$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;		
		foreach ($data as $key=>$value)
				
		return $value;
 	}
 	
 	function editUserData($id,$username,$fullname,$password,$access,$notes)
	{
		$db = new DB_CONNECT();
		$query = "UPDATE user SET username ='$username', fullname = '$fullname', password = PASSWORD('$password'), access = '$access', notes = '$notes' where ID ='$id'";

		
		$result = mysql_query($query) or die(mysql_error());	              		
		
				
		return true;
	}
	
	function newUserData($username,$fullname,$password,$access,$notes)
	{
		$db = new DB_CONNECT();
		$query = "INSERT INTO user SET username ='$username', fullname = '$fullname', password = PASSWORD('$password'), access = '$access', notes = '$notes' ";

		
		$result = mysql_query($query) or die(mysql_error());	              		
		
				
		return true;
	}
	
	function delUserData($id)
	{
		$db = new DB_CONNECT();
		$query = "DELETE FROM user WHERE ID ='$id'";

		
		$result = mysql_query($query) or die(mysql_error());	              		
		
				
		return true;
	}
	
	function getMemberData()
	{
		$db = new DB_CONNECT();
		$sql = "SELECT * FROM member ";
		$result = mysql_query($sql) or die(mysql_error());
		$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;		
		foreach ($data as $key=>$value)
				
		return $data;
 	}
 	
 	function editMember($id)
	{
		$db = new DB_CONNECT();
		$sql = "SELECT * FROM member WHERE ID = '$id'";
		$result = mysql_query($sql) or die(mysql_error());
		$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;		
		foreach ($data as $key=>$value)
				
		return $value;
 	}
 	
 	function editMemberData($id,$member_no,$name,$picture,$notes)
	{
		$db = new DB_CONNECT();
		$query = "UPDATE member SET member_no ='$member_no', name = '$name', picture = '{$picture}', notes = '$notes' where id ='$id'";

		
		$result = mysql_query($query) or die(mysql_error());	              		
		
				
		return true;
	}
	
	function delMemberData($id)
	{
		$db = new DB_CONNECT();
		$query = "DELETE FROM member WHERE ID ='$id'";

		
		$result = mysql_query($query) or die(mysql_error());	              		
		
				
		return true;
	}
	
	function inputCert($member_no,$date,$hd_issued,$hd_data,$notes)
	{
		$db = new DB_CONNECT();
		$query = "	INSERT INTO 
						hdcert
						( member_no, date, hd_issued, hd_data, notes )
					VALUES
						('".$member_no."','".$date."','".$hd_issued."','".$hd_data."','".$notes."')";
	              		
		$result = mysql_query($query) or die(mysql_error());	              		
		
				
		return true;
	}
	
		function lastCert($member_id)
	{
		$db = new DB_CONNECT();
		$query = " SELECT *
					FROM hdcert 
					WHERE member_no= '$member_id' ORDER BY date DESC LIMIT 1";
	              		
		$result = mysql_query($query);	              		
		$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;		
		foreach ($data as $key=>$value)
				
		return $value;
	}
	
		function historyCert($member_id)
	{
		$db = new DB_CONNECT();
		$query = " SELECT *
					FROM hdcert 
					WHERE member_no= '$member_id' ORDER BY date DESC";
	              		
		$result = mysql_query($query);	              		
		$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;		
		foreach ($data as $key=>$value)
				
		return $data;
	}
	
	function allMemberLastCert()
	{
		$db = new DB_CONNECT();
		$query = " SELECT c.id, c.member_no,c.date,c.hd_issued,c.hd_data,m.name,m.notes AS note
					FROM (SELECT * FROM  hdcert ORDER BY id desc) c, member m
					WHERE c.member_no=m.member_no
					GROUP BY member_no
					ORDER BY member_no
					";
	              		
		$result = mysql_query($query);	              		
		$data = array();
		while ($row = mysql_fetch_object($result))
   			$data[] = $row;		
		foreach ($data as $key=>$value)
				
		return $data;
	}

}
//echo "test";
?>