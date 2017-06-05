<?php
$security =1;
include_once './dbfunc.php';
include_once './header.php';
include_once './member.php';
echo $_POST['id'];
echo $_POST['fullname'];
echo $_POST['username'];
echo $_POST['access'];
echo $_POST['notes'];
echo $_POST['key'];

?>

<?php if (isset($_POST['change']))
	{
	echo "change";
	$db = new db_function;
	$newpasswd = $_POST['key'];
	$hasil = $db->editUserData($_POST['id'],$_POST['username'],$_POST['fullname'],$newpasswd,$_POST['access'],$_POST['notes']);

	if (!$hasil){echo "false";} else {echo "true";}
	}
	
	if (isset($_POST['delete']))
	{
	echo "delete";
	$db = new db_function;
	$hasil = $db->delUserData($_POST['id']);

	if (!$hasil){echo "false";} else {echo "true";}
	}
	
	if (isset($_POST['newuser']))
	{
	echo "newuser";
	$db = new db_function;
	$newpasswd = $_POST['key'];
	$hasil = $db->newUserData($_POST['username'],$_POST['fullname'],$newpasswd,$_POST['access'],$_POST['notes']);

	if (!$hasil){echo "false";} else {echo "true";}
	}

include_once './footer.php';
?>
<meta http-equiv="refresh" content="0; url=adminUser.php" />
