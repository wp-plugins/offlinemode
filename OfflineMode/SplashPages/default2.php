<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Under Construction</title>
<style type="text/css">
<!--
html {
	width						: 100%;
	height						: 100%;
}
body {
	width						: 100%;
	height						: 100%;
	margin						: 0px;
	padding						: 0px;
	color						: #333333;
	font-family					: Century Gothic, Verdana, Arial, sans-serif;
	background					: #FFFFFF;
}
table {
	font-size					: 12px;
}
a:link, a:visited, a:hover {
	color						: #333333;
	text-decoration				: underline;
}
#mainTbl {
	width						: 100%;
	height						: 100%;
}
-->
</style>
<script type="text/javascript">
//<![CDATA[
	var startTime = <?= $OfflineMode_startTime . '000'; ?>;
	function display() {
		var enddate = new Date();
		var endTime = enddate.getTime();
		var diff = endTime - startTime;
		var msec = Math.floor( (diff/10) % 100 );
		var sec = Math.floor( (diff/1000) % 60 );
		var mins = Math.floor( ( (diff/1000)/60) % 60 );
		var hours = Math.floor( (diff/1000)/3600 );
		if( msec.toString().length !=2 ) strmsec = '0' + msec.toString(); else strmsec = msec.toString(); 
		if( sec.toString().length != 2 ) strsec = '0' + sec.toString(); else strsec = sec.toString();
		if( mins.toString().length !=2 ) strmins = '0' + mins.toString(); else strmins = mins.toString();
		if( hours.toString().length !=2 ) strhours = '0' + hours.toString(); else strhours = hours.toString(); 
		ttimer = document.getElementById('timer');
		ttimer.innerHTML = strhours + ':' + strmins + ':' + strsec;
		setTimeout('display()', 100);
		
	}
	window.onload=display;
//]]>
</script>

</head>

<body>
	<table id="mainTbl" cellpadding="0" cellspacing="0" border="1">
    	<tr>
        	<td valign="center">
            	<table align="center" style="width:800px; height:400px;" cellpadding="0" cellspacing="0">
                	<tr>
                    	<td><img src="data:image/png;base64,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" alt="" />
                    	</td>
                    	<td valign="top" align="justify">
                    		<h2>UNDER CONSTRUCTION</h2>
                    		<div>
                            	This website is currently under construction. Please check back in a while.
                            </div>
                            <div align="center" style="margin-top:32px;">Offline Duration: </div>
                            <div id="timer" align="center" style="font-size:24px;">
                            	0:01
                            </div>
                    	</td>
                    </tr>
                    <tr>
                    	<td height="24" colspan="2" align="center">Copyright &copy; <?= date('Y'); ?> <a href="http://blog.zorex.info/?page_id=144">OfflineMode</a> Splash Page by <a href="http:/blog.zorex.info">zorex</a> - All rights reserved.</td>
                    </tr>
                </table>
        	</td>
        </tr>
    </table>
</body>
</html>