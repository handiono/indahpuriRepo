<?php
if ($hasil->access == "1") :
?>
        <div id="leftcolumn">
        <img src="logo.png" alt="indahpuri" width="150" height="55"/>
        <p><a href="index.php"  class="button">Home</a></p>    	
    	<p><a href="input.php"  class="button">Input</a></p>
        <p><a href="deskHandicap.php" class="button">Handicap</a></p>
        <p><a href="adminMember.php" class="button">Member</a></p>
        <p><a href="adminUser.php" class="button">User</a></p>
        <p><a href="adminData.php" class="button">HD Data</a></p>
        <p><a href="adminRating.php" class="button">Rating</a></p> 
        <p><a href="adminAllMemberHdcap.php" class="button">Report</a></p>          
        <p><a href="logout.php" class="button">Logout</a></p>
        </div>
        
<?php		 else : ?>
		
<div id="leftcolumn">
        <img src="logo.png" alt="indahpuri" width="150" height="55"/>
        <p><a href="index.php"  class="button">Home</a></p>    	
    	<p><a href="input.php"  class="button">Input</a></p>
        <p><a href="deskHandicap.php" class="button">Handicap</a></p>
        <p><a href="logout.php" class="button">Logout</a></p>
        </div>

<?php	 endif; ?> 		
