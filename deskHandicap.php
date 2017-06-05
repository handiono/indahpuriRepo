<?php
//session_start();
$security=2;
include_once './dbfunc.php';
include_once './header.php';
include_once './member.php';

?>

    

	<br><div class="body1">Member ID: <input type="text" name="memberId" onkeyup="showHdcap(this.value)"> (IPLXXX)</div>

	<br><span id="txtHdcap"></span>
	<p>
	<!-- <a href="#" onclick="return showHideForm('hiddenScore');" class="body1">Last Score</a> -->
	<a href="#" onclick="return showHideForm('hiddenForm');" class="body1">20 Last Score</a>
	</p>
	<div style="text-align:left;margin-left:20px; display: none;" id="hiddenScore">
						<div class="body1">Last Score</div>
						<span id="txtScore"></span>
						</div>


<!--    <div id="rightcolumn"> -->
       
       	<div style="text-align:left;margin-left:20px;>
		<div class="body1">																																																												</div>
		<span id="txtData"></span>
		</div>
<!--   	</div> -->

       </div></div>
        

    	
    	
<?php include_once'./leftMenu.php'; ?>


</div>

</body>
</html>
