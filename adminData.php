<?php
//session_start();
$security=1;
include_once './dbfunc.php';
include_once './header.php';
include_once './member.php';

?>

    

	<br><div class="body1">Member ID: <input type="text" name="memberId" onkeyup="editHdcap(this.value)"></div>

	<br><span id="txtHdcap"></span>
	<p>
			<div class="body1">All Data</div>
		<br><span id="txteditData"></span>
	</p>
	


       </div></div>

    	
    	
<?php include_once'./leftMenu.php'; ?>


</div>

</body>
</html>
