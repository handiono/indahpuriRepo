<?php // signup.php

include("common.php");
include("db.php");

if (!isset($_POST['submitok'])):
    // Display the user signup form
    ?>
<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title> New User Registration </title>
  <meta http-equiv="Content-Type"
    content="text/html; charset=iso-8859-1
</head>
<body>

<h3>New User Registration Form</h3>
<p><font color="orangered" size="+1"><tt><b>*</b></tt></font>
   indicates a required field</p>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
<table border="0" cellpadding="0" cellspacing="5">
    <tr>
        <td align="right">
            <p>Username</p>
        </td>
        <td>
            <input name="newid" type="text" maxlength="100" size="25" />
            <font color="orangered" size="+1"><tt><b>*</b></tt></font>
        </td>
    </tr>
    <tr>
        <td align="right">
            <p>Password</p>
        </td>
        <td>
            <input type="password" name="pwd" SIZE="8" />
            <font color="orangered" size="+1"><tt><b>*</b></tt></font>
        </td>
    </tr>
    <tr>
        <td align="right">
            <p>Full Name</p>
        </td>
        <td>
            <input name="newname" type="text" maxlength="100" size="25" />
            <font color="orangered" size="+1"><tt><b>*</b></tt></font>
        </td>
    </tr>
    <tr>
        <td align="right">
            <p>Access Level</p>
        </td>
        <td>
            <input name="access" type="text" maxlength="100" size="25" />
            <font color="orangered" size="+1"><tt><b>*</b></tt></font>
        </td>
    </tr>
    <tr valign="top">
        <td align="right">
            <p>Other Notes</p>
        </td>
        <td>
            <textarea wrap="soft" name="newnotes" rows="5" cols="30"></textarea>
        </td>
    </tr>
    <tr>
        <td align="right" colspan="2">
            <hr noshade="noshade" />
            <input type="reset" value="Reset Form" />
            <input type="submit" name="submitok" value="   OK   " />
        </td>
    </tr>
</table>
</form>

</body>
</html>

    <?php
else:
    // Process signup submission
    dbConnect('handicap');

    if ($_POST['newid']=='' or $_POST['newname']==''
      or $_POST['access']=='') {
        error('One or more required fields were left blank.\\n'.
              'Please fill them in and try again.');
    }
    
    // Check for existing user with the new id
    $sql = "SELECT COUNT(*) FROM user WHERE username = '$_POST[newid]'";
    $result = mysql_query($sql);
    if (!$result) {	
        error('A database error occurred in processing your '.
              'submission.\\nIf this error persists, please '.
              'contact you@example.com.');
    }
    if (mysql_result($result,0,0)>0) {
        error('A user already exists with your chosen username.\\n'.
              'Please try another.');
    }
    
    $newpass =$_POST['pwd'	];
    
    $sql = "INSERT INTO user SET
              username = '$_POST[newid]',
              password = PASSWORD('$newpass'),
              fullname = '$_POST[newname]',
              access = '$_POST[access]',
              notes = '$_POST[newnotes]'";
    if (!mysql_query($sql))
        error('A database error occurred in processing your '.
              'submission.\\nIf this error persists, please '.
              'contact you@example.com.\\n' . mysql_error());
              
    // Email the new password to the person.
    $message = "G'Day!

Your personal account for the Project Web Site
has been created! To log in, proceed to the
following address:

    http://www.example.com/

Your personal login ID and password are as
follows:

    userid: $_POST[newid]
    password: $newpass

You aren't stuck with this password! Your can
change it at any time after you have logged in.

If you have any problems, feel free to contact me at
<you@example.com>.

-Your Name
 Your Site Webmaster
";

         echo $message;
         
    ?>
    <!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <title> Registration Complete </title>
      <meta http-equiv="Content-Type"
        content="text/html; charset=iso-8859-1" />
    </head>
    <body>
    <p><strong>User registration successful!</strong></p>
    <p>Your userid and password have been emailed to
       <strong><?=$_POST['newemail']?></strong>, the email address
       you just provided in your registration form. To log in,
       click <a href="index.php">here</a> to return to the login
       page, and enter your new personal userid and password.</p>
    </body>
    </html>
    <?php
endif;
?>
