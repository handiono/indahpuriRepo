<?php
$security =1;
include_once './dbfunc.php';
include_once './member.php';
include_once './header.php';
$db = new db_function;

$_SESSION['memId'] = $_GET['memberId'];

$memberEdit = $db->editMember($_SESSION['memId']);
?>


<form enctype="multipart/form-data" name="input" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">


<?php if (isset($_POST['proses'])) : ?>


<?php
//echo $_SESSION['memberId'];
//echo $_SESSION['name'];
//echo $_SESSION['name'];

if($_SESSION["file"]["name"]=='')
{
echo "Picture File No Change";
//$image=$memberEdit->picture;
$image = addslashes($memberEdit->picture);
}
else
{
//$_FILES["file"]=$_SESSION["file"];
echo $_SESSION["file"]["name"];
$tmpname="uploads/".$_SESSION["file"]["name"];
$image = addslashes(file_get_contents($tmpname)); //SQL Injection defence!
}
//$fp = fopen($tmpName, 'r');
//$data = fread($fp, filesize($tmpName));
//$data = addslashes($data);
//fclose($fp);

$db = new db_function;
$member = $db->editMemberData($_SESSION['memId'],$_SESSION['memberId'],$_SESSION['name'],$image,$_SESSION['notes']);
    
$b = $db->getMember($_SESSION['memberId']);

echo "<br>Name: ".$b->name;
echo "<br>Member ID: ".$b->member_no;
echo "<br>Picture: ".'<img src="data:image/jpeg;base64,'.base64_encode( $b->picture ).'"alt="$b->name" width="100" height="150"/>';
echo "<br>Notes: ".$b->notes;

?>

 <p><a href="adminMember.php"  class="submitButton">FINISH</a></p>   


<?php elseif (isset($_POST['check'])) : ?>



<?php

$_SESSION['memberId']=$_POST['memberId'];
$_SESSION['name']=$_POST['name'];
$_SESSION['notes']=$_POST['notes'];
$_SESSION["file"]=$_POST["file"];
$_SESSION["file"]["name"]=$_FILES["file"]["name"];

if ($_SESSION["file"]["name"]=='')
{
echo "Picture File No Change";
$_SESSION["picture"]=$memberEdit->picture;
echo "<br>Member ID: ".$_POST['memberId'];
echo "<br>Name: ".$_POST['name'];
echo "<br>Notes: ".$_POST['notes'];
echo "<br><img src='data:image/jpeg;base64,".base64_encode( $_SESSION["picture"])."' alt='".$memberEdit->name."' width='100' height='150'/>";
}
else
{
$_SESSION["file"]=$_POST["file"];
$_SESSION["file"]["name"]=$_FILES["file"]["name"];

echo $_POST['memberId'];
echo $_POST['name'];
echo $_POST['notes'];
echo $_POST['file'];
echo $_FILES["file"]["name"];

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 1000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    if (file_exists("upload/" . $_FILES["file"]["name"])) {
      echo $_FILES["file"]["name"] . " already exists. ";
    } else {
//    	$name = $_FILES["file"]["name"];
//    	$uploads_dir = "."."/hanuploads"."/".$name;
//    	$tmp_name = $_FILES["file"]["tmp_name"];
//       move_uploaded_file($tmp_name, $uploads_dir);

	$target_path = "uploads/";
	$target_path = $target_path . basename( $_FILES['file']['name']);
	if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['file']['name']). 
    " has been uploaded";
	} else{
    	echo "There was an error uploading the file, please try again!";
	}

      echo "Stored in: ".$target_path;
    }
  }
  
} else {
  echo "Invalid file";
}
echo "<img src='".$target_path."'  width='100' height='150'/>";
}

?>
<br><br><input class="submitButton" type="submit" name="proses" value="PROSES">


<?php  else : ?>


Member ID: <input type="text" name="memberId" value="<?php echo $memberEdit->member_no; ?> " />
<br>Name : <input type="text" name="name" value="<?php echo $memberEdit->name; ?> ">
<br>Picture : <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $memberEdit->picture ).'"alt="$memberEdit->name" width="150" height="200"/>'; ?>
<br>Notes :<textarea wrap="soft" name="notes" rows="5" cols="30" ><?php echo $memberEdit->notes; ?></textarea>
<br>New Picture File : <input type="file" name="file" id="file"> File type: jpeg jpg png gif
<br>




<br><br><input class="submitButton" type="submit" name="check" value="CHECK">
   </form>

   <?php endif; ?>
 

<?php include_once './footer.php'; ?>