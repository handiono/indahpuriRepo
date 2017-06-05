	function showHideForm(formid) {
      var _form = document.getElementById(formid);
      _form.style.display = (_form.style.display != "block") ? "block" : "none";
      return false;
   	}
   	
   	function showHint(str) {
  		if (str.length==0) { 
    	document.getElementById("txtHint").innerHTML="";
    	return;
  		}
  	
  		var xmlhttp=new XMLHttpRequest();
  		xmlhttp.onreadystatechange=function() {
    	if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      		document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    		}
  		}
  		xmlhttp.open("GET","getmemberdata.php?q="+str,true);
  		xmlhttp.send();
	}
	
	function showMemAvail(str) {
  		if (str.length==0) { 
    	document.getElementById("txtMem").innerHTML="";
    	return;
  		}
  	
  		var xmlhttp=new XMLHttpRequest();
  		xmlhttp.onreadystatechange=function() {
    	if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      		document.getElementById("txtMem").innerHTML=xmlhttp.responseText;
    		}
  		}
  		xmlhttp.open("GET","checkmemberavail.php?q="+str,true);
  		xmlhttp.send();
	}
	
	
	function editUser(str) {
  		if (str.length==0) { 
    	document.getElementById("txtUser").innerHTML="";
    	return;
  		}
  	
  		var axmlhttp=new XMLHttpRequest();
  		axmlhttp.onreadystatechange=function() {
    	if (axmlhttp.readyState==4 && axmlhttp.status==200) {
      		document.getElementById("txtUser").innerHTML=axmlhttp.responseText;
    		}
  		}
  		axmlhttp.open("GET","getuserEdit.php?ID="+str,true);
  		axmlhttp.send();
  		
  		}
	
	function editHdcap(str) {
  		if (str.length==0) { 
    	document.getElementById("txteditHdcap").innerHTML="";
    	return;
  		}
  	
  		var haxmlhttp=new XMLHttpRequest();
  		haxmlhttp.onreadystatechange=function() {
    	if (haxmlhttp.readyState==4 && haxmlhttp.status==200) {
      		document.getElementById("txtHdcap").innerHTML=haxmlhttp.responseText;
    		}
  		}
  		haxmlhttp.open("GET","getHandicap.php?member="+str,true);
  		haxmlhttp.send();
  		
  		if (str.length==0) { 
    	document.getElementById("txteditData").innerHTML="";
    	return;
  		}
  	
  		var hxmlhttp=new XMLHttpRequest();
  		hxmlhttp.onreadystatechange=function() {
    	if (hxmlhttp.readyState==4 && hxmlhttp.status==200) {
      		document.getElementById("txteditData").innerHTML=hxmlhttp.responseText;
    		}
  		}
  		hxmlhttp.open("GET","getAllHdData.php?memberId="+str,true);
  		hxmlhttp.send();
  		
	}
	
	function showHdcap(str) {
  		if (str.length==0) { 
    	document.getElementById("txtHdcap").innerHTML="";
    	return;
  		}
  	
  		var axmlhttp=new XMLHttpRequest();
  		axmlhttp.onreadystatechange=function() {
    	if (axmlhttp.readyState==4 && axmlhttp.status==200) {
      		document.getElementById("txtHdcap").innerHTML=axmlhttp.responseText;
    		}
  		}
  		axmlhttp.open("GET","getHandicap.php?member="+str,true);
  		axmlhttp.send();
  		
  		if (str.length==0) { 
    	document.getElementById("txtData").innerHTML="";
    	return;
  		}
  	
  		var xmlhttp=new XMLHttpRequest();
  		xmlhttp.onreadystatechange=function() {
    	if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      		document.getElementById("txtData").innerHTML=xmlhttp.responseText;
    		}
  		}
  		xmlhttp.open("GET","get20best.php?memberId="+str,true);
  		xmlhttp.send();
  		
  		if (str.length==0) { 
    	document.getElementById("txtScore").innerHTML="";
    	return;
  		}
  	
  		var aaxmlhttp=new XMLHttpRequest();
  		aaxmlhttp.onreadystatechange=function() {
    	if (aaxmlhttp.readyState==4 && aaxmlhttp.status==200) {
      		document.getElementById("txtScore").innerHTML=aaxmlhttp.responseText;
    		}
  		}
  		aaxmlhttp.open("GET","getlastScore.php?memberId="+str,true);
  		aaxmlhttp.send();
	}
	
	function showHdcap1(str) {
  		if (str.length==0) { 
    	document.getElementById("txtHdcap1").innerHTML="";
    	return;
  		}
  	
  		var bxmlhttp=new XMLHttpRequest();
  		bxmlhttp.onreadystatechange=function() {
    	if (bxmlhttp.readyState==4 && bxmlhttp.status==200) {
      		document.getElementById("txtHdcap1").innerHTML=bxmlhttp.responseText;
    		}
  		}
  		bxmlhttp.open("GET","getOnlyHandicap.php?member="+str,true);
  		bxmlhttp.send();
  		
  		if (str.length==0) { 
    	document.getElementById("txtData1").innerHTML="";
    	return;
  		}
  	
  		var baxmlhttp=new XMLHttpRequest();
  		baxmlhttp.onreadystatechange=function() {
    	if (baxmlhttp.readyState==4 && baxmlhttp.status==200) {
      		document.getElementById("txtData1").innerHTML=baxmlhttp.responseText;
    		}
  		}
  		baxmlhttp.open("GET","get20best.php?memberId="+str,true);
  		baxmlhttp.send();
  		  		
  		if (str.length==0) { 
    	document.getElementById("txtScore1").innerHTML="";
    	return;
  		}
  	
  		var bbxmlhttp=new XMLHttpRequest();
  		bbxmlhttp.onreadystatechange=function() {
    	if (bbxmlhttp.readyState==4 && bbxmlhttp.status==200) {
      		document.getElementById("txtScore1").innerHTML=bbxmlhttp.responseText;
    		}
  		}
  		bbxmlhttp.open("GET","getlastScore.php?memberId="+str,true);
  		bbxmlhttp.send();

	}
	
	function showHdcap2(str) {
  		if (str.length==0) { 
    	document.getElementById("txtHdcap2").innerHTML="";
    	return;
  		}
  	
  		var cxmlhttp=new XMLHttpRequest();
  		cxmlhttp.onreadystatechange=function() {
    	if (cxmlhttp.readyState==4 && cxmlhttp.status==200) {
      		document.getElementById("txtHdcap2").innerHTML=cxmlhttp.responseText;
    		}
  		}
  		cxmlhttp.open("GET","getOnlyHandicap.php?member="+str,true);
  		cxmlhttp.send();
  		
  		if (str.length==0) { 
    	document.getElementById("txtData2").innerHTML="";
    	return;
  		}
  	
  		var caxmlhttp=new XMLHttpRequest();
  		caxmlhttp.onreadystatechange=function() {
    	if (caxmlhttp.readyState==4 && caxmlhttp.status==200) {
      		document.getElementById("txtData2").innerHTML=caxmlhttp.responseText;
    		}
  		}
  		caxmlhttp.open("GET","get20best.php?memberId="+str,true);
  		caxmlhttp.send();
  		  		
  		if (str.length==0) { 
    	document.getElementById("txtScore2").innerHTML="";
    	return;
  		}
  	
  		var cbxmlhttp=new XMLHttpRequest();
  		cbxmlhttp.onreadystatechange=function() {
    	if (cbxmlhttp.readyState==4 && cbxmlhttp.status==200) {
      		document.getElementById("txtScore2").innerHTML=cbxmlhttp.responseText;
    		}
  		}
  		cbxmlhttp.open("GET","getlastScore.php?memberId="+str,true);
  		cbxmlhttp.send();

	}
	
	function showHdcap3(str) {
  		if (str.length==0) { 
    	document.getElementById("txtHdcap3").innerHTML="";
    	return;
  		}
  	
  		var dxmlhttp=new XMLHttpRequest();
  		dxmlhttp.onreadystatechange=function() {
    	if (dxmlhttp.readyState==4 && dxmlhttp.status==200) {
      		document.getElementById("txtHdcap3").innerHTML=dxmlhttp.responseText;
    		}
  		}
  		dxmlhttp.open("GET","getOnlyHandicap.php?member="+str,true);
  		dxmlhttp.send();
  		
  		if (str.length==0) { 
    	document.getElementById("txtData3").innerHTML="";
    	return;
  		}
  	
  		var daxmlhttp=new XMLHttpRequest();
  		daxmlhttp.onreadystatechange=function() {
    	if (daxmlhttp.readyState==4 && daxmlhttp.status==200) {
      		document.getElementById("txtData3").innerHTML=daxmlhttp.responseText;
    		}
  		}
  		daxmlhttp.open("GET","get20best.php?memberId="+str,true);
  		daxmlhttp.send();
  		  		
  		if (str.length==0) { 
    	document.getElementById("txtScore3").innerHTML="";
    	return;
  		}
  	
  		var dbxmlhttp=new XMLHttpRequest();
  		dbxmlhttp.onreadystatechange=function() {
    	if (dbxmlhttp.readyState==4 && dbxmlhttp.status==200) {
      		document.getElementById("txtScore3").innerHTML=dbxmlhttp.responseText;
    		}
  		}
  		dbxmlhttp.open("GET","getlastScore.php?memberId="+str,true);
  		dbxmlhttp.send();

	}
	
	function showHdcap4(str) {
  		if (str.length==0) { 
    	document.getElementById("txtHdcap4").innerHTML="";
    	return;
  		}
  	
  		var exmlhttp=new XMLHttpRequest();
  		exmlhttp.onreadystatechange=function() {
    	if (exmlhttp.readyState==4 && exmlhttp.status==200) {
      		document.getElementById("txtHdcap4").innerHTML=exmlhttp.responseText;
    		}
  		}
  		exmlhttp.open("GET","getOnlyHandicap.php?member="+str,true);
  		exmlhttp.send();
  		
  		if (str.length==0) { 
    	document.getElementById("txtData4").innerHTML="";
    	return;
  		}
  	
  		var eaxmlhttp=new XMLHttpRequest();
  		eaxmlhttp.onreadystatechange=function() {
    	if (eaxmlhttp.readyState==4 && eaxmlhttp.status==200) {
      		document.getElementById("txtData4").innerHTML=eaxmlhttp.responseText;
    		}
  		}
  		eaxmlhttp.open("GET","get20best.php?memberId="+str,true);
  		eaxmlhttp.send();
  		  		
  		if (str.length==0) { 
    	document.getElementById("txtScore4").innerHTML="";
    	return;
  		}
  	
  		var ebxmlhttp=new XMLHttpRequest();
  		ebxmlhttp.onreadystatechange=function() {
    	if (ebxmlhttp.readyState==4 && ebxmlhttp.status==200) {
      		document.getElementById("txtScore4").innerHTML=ebxmlhttp.responseText;
    		}
  		}
  		ebxmlhttp.open("GET","getlastScore.php?memberId="+str,true);
  		ebxmlhttp.send();

	}
	
function startTime() {
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML = h+":"+m+":"+s;
    var t = setTimeout(function(){startTime()},500);
}

function checkTime(i) {
    if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}