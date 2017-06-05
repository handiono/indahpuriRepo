<?php
session_start();
include_once './dbfunc.php';
include_once './header.php';
?>

<?php
//session_start();

$uid = isset($_POST['uid']) ? $_POST['uid'] : $_SESSION['uid'];
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : $_SESSION['pwd'];

if(!isset($uid)) {
  ?>
  <!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title> Please Log In for Access </title>
    <meta http-equiv="Content-Type"
      content="text/html; charset=iso-8859-1" />
  </head>
  <body>
  <h1> Login Required </h1>
  <p>You must log in to access this area of the site.</p>
  <p><form method="post" action="<?php $_SERVER['PHP_SELF']?>">
  <table border="0" cellpadding="0" cellspacing="5">
    <tr>
        <td align="right">
    	User ID: 
    	</td>
    	<td>
    	<input type="text" name="uid" size="8" />
    	</td>
  <tr>
        <td align="right">
    	Password: 
    	</td>
    	<td>
    	<input type="password" name="pwd" SIZE="8" /><br />
		</td>
 </tr>  
     <tr>
        <td align="right" colspan="2">
            <hr noshade="noshade" />
            <input type="reset" value="Reset Form" />
            <input type="submit" value="Log in" />
        </td>  
    
  </form>
  </table></p>
  </body>
  </html>
  <?php
  exit;
}

$_SESSION['uid'] = $uid;
$_SESSION['pwd'] = $pwd;

$db = new db_function;
$hasil = $db->checkUser($uid,$pwd);

if (!$hasil){
  unset($_SESSION['uid']);
  unset($_SESSION['pwd']);
  ?>
  <!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title> Access Denied </title>
    <meta http-equiv="Content-Type"
      content="text/html; charset=iso-8859-1" />
  </head>
  <body>
  <h1> Access Denied </h1>
  <p>Your user ID or password is incorrect,<br> or you are not a
     registered user on this site. To try logging in again, click
     <a href="index.php">here</a>.</p>
  </body>
  </html>
  <?php
  exit;
	}
$_SESSION['access']=$hasil->access;
$username = $hasil->fullname;
echo "Now Served By :".$username;
//echo "name :".$_SESSION['uid'];
//echo "passwd :".$_SESSION['pwd'];
//echo "access :".$_SESSION['access'];

//echo "<br>Access Level :".$hasil->access;

?>

<?php include_once'./footer.php'; ?>
		