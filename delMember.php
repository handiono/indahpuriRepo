<?php
$security =1;
include_once './dbfunc.php';
include_once './member.php';
include_once './header.php';
$db = new db_function;

$_SESSION['memId'] = $_GET['memberId'];

$memberEdit = $db->editMember($_SESSION['memId']);
?>


<form name="input" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

<?php
if (isset($_POST['delete'])){  //delete clicked
//get variables here
//run query delete record from xyz where id=$id
echo "script dle";
$delmember = $db->delMemberData($_SESSION['memId']);
echo "<meta http-equiv=\"refresh\" content=\"0; url=adminMember.php\" />";
exit();
}
?>

<script>
    function deleteconfig(){

    var del=confirm("Are you sure you want to delete this record?");
    if (del==true){
       
    }else{
        alert("Record Not Deleted")
    }
    return del;
    }
</script>



Member ID: <?php echo $memberEdit->member_no; ?> 
<br>Name : <?php echo $memberEdit->name; ?> 
<br>Picture : <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $memberEdit->picture ).'"alt="$memberEdit->name" width="150" height="200"/>'; ?>
<br>Notes :<?php echo $memberEdit->notes; ?>
<br>




<br><br><input class="submitButton" type="submit" name="delete" value="Delete" onclick="return deleteconfig()" >
   </form>


 

<?php include_once './footer.php'; ?>