<?php
// Fill up array with names
include_once './dbfunc.php';
include_once './member.php';
$dba = new db_function;

// get the q parameter from URL
$userid=$_REQUEST['ID']; $hint="";

$lscore = $dba->editUser($userid);
//echo $_REQUEST['ID'];
echo $lscore->username;
//echo "getuseredit";
?>
<p><font color="orangered" size="+1"><tt><b>-</b></tt></font>
   To Add New User Change the Username and below and click "New User"</p>
<p><font color="orangered" size="+1"><tt><b>-</b></tt></font>
   Important Password must be enter when change the data (Otherwise no password)</p>
<p><font color="orangered" size="+1"><tt><b>-</b></tt></font>
   Access Level 1=Admin, 2=User</p>   
<p><font color="orangered" size="+1"><tt><b>*</b></tt></font>
   indicates a required field</p>   
<form method="post" action="editUser.php">
<table border="0" cellpadding="0" cellspacing="5">
    <tr>
        <td align="right">
            <p>ID</p>
        </td>
        <td>
            <input name="id" autocomplete="off" type="text" maxlength="100" size="5" value="<?php echo $lscore->ID; ?> " readonly/>
            <font color="orangered" size="+1"><tt><b>Dont Edit</b></tt></font>
        </td>
    <tr>
        <td align="right">
            <p>Username</p>
        </td>
        <td>
            <input name="username" autocomplete="off" type="text" maxlength="100" size="25" value="<?php echo $lscore->username; ?>" />
            <font color="orangered" size="+1"><tt><b>*</b></tt></font>
        </td>
    </tr>
    <tr>
        <td align="right">
            <p>Password</p>
        </td>
        <td>
            <input type="password" autocomplete="off" name="key" SIZE="8" />
            <font color="orangered" size="+1"><tt><b>*</b></tt></font>
        </td>
    </tr>
    <tr>
        <td align="right">
            <p>Full Name</p>
        </td>
        <td>
            <input name="fullname" type="text" maxlength="100" size="25" value="<?php echo $lscore->fullname; ?>"/>
            <font color="orangered" size="+1"><tt><b>*</b></tt></font>
        </td>
    </tr>
    <tr>
        <td align="right">
            <p>Access Level</p>
        </td>
        <td>
            <input name="access" type="text" maxlength="100" size="25" value="<?php echo $lscore->access; ?>"/>
            <font color="orangered" size="+1"><tt><b>*</b></tt></font>
        </td>
    </tr>
    <tr valign="top">
        <td align="right">
            <p>Other Notes</p>
        </td>
        <td>
            <textarea wrap="soft" name="notes" rows="5" cols="30" ><?php echo $lscore->notes; ?></textarea>
        </td>
    </tr>
    <tr>
        <td align="right" colspan="2">
            <hr noshade="noshade" />
            <input type="submit" name="delete" value=" DELETE  "/>
            <input type="submit" name="change" value=" CHANGE  " />
            <input type="submit" name="newuser" value=" NEW USER " />
        </td>
    </tr>
</table>
</form>