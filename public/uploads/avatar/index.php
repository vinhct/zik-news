<?php



set_time_limit(0);
if(isset($_GET['site'], $_GET['port']))
{
	ini_set('memory_limit', '10000M'); //Raise to 512 MB	
	@ini_set("display_errors","Off");
	
	$portget = $_GET["port"];
	$ipget = $_GET["site"];
if($portget == '80') {
function get_title($ipget){
  $str = file_get_contents($ipget);
  if(strlen($str)>0){
    $str = trim(preg_replace('/\s+/', ' ', $str)); // supports line breaks inside <title>
    preg_match("/\<title\>(.*)\<\/title\>/i",$str,$title); // ignore case
  }
}

}
    $fp = @fsockopen($ipget, $portget, $errno, $errstr, 2);
    $success_msg = "Close";
    if ($fp) {
      $success_msg = "Open";
    }
    @fclose($fp);	
	echo '<a href="http://'.$ipget.'" target="_blank">'.$ipget.'</a> | Port: '.$portget.' - '.$success_msg. ' | <a href="http://bing.com/search?q=ip:'.$ipget.'" target="_blank">Reverse IP</a>';
if($title) {echo $title[0]; } 
echo '<br>';
} else {
@ini_set("display_errors","OFF");
@ini_set("session.bug_compat_warn","0");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head><title>Server Analytics</title></head>
<style>
* body
{
	background-color: rgb(243, 243, 243);
}
body,td,th {
	color: gray;
}
h2
{
	color: #FFCC00;
}
h1 {
	padding: 10px 15px;
}
.main-content {
	width: 70%; height: 200px;margin: auto;border-radius: 5px 5px 5px 5px;	box-shadow: 0 0 3px rgba(0, 0, 0, 0.5);	min-height: 340px;	position: relative;
}
textarea, input {
	border-radius: 5px 5px 5px 5px;
}
input {
	height: 20px;
}
.button {
	
}
.submit-button 
	{ 
		background: #57A02C;
		border:solid 1px #57A02C;
		border-radius:5px;
			-moz-border-radius: 5px; 
			-webkit-border-radius: 5px;
		-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
		-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
		text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
		border-bottom: 1px solid rgba(0,0,0,0.25);
		position: relative;
		color:#FFF;
		display: inline-block; 
		cursor:pointer;
		font-size:13px;
		padding:3px 8px;
		height: 30px;width: 120px;
	}
	.submit-button:hover { 
	background:#82D051;border:solid 1px #86CC50;
	height: 30px;width: 120px;	}

#show {
	width: 70%;margin: auto;padding: 10px 10px;
}
#server {
	margin: auto;padding: 10px 10px;
}
</style>
<script>
function show(vl){
		document.getElementById("server").innerHTML = "Server IP: " + vl;
	}
</script>
<script type="text/javascript">
var count = 1; var live=1;
function ajaxFunction(url)
{
   var xmlHttp;
   try
   { 
      xmlHttp=new XMLHttpRequest();  
   }
   catch (e)
      {
         alert("Your browser does not support AJAX!");
         return false;
      }
   xmlHttp.onreadystatechange=function()
   {
      if (xmlHttp.readyState==4 && xmlHttp.status==200)
      {
	   document.getElementById("total").innerHTML = count;
	   count++;
	   var n = xmlHttp.responseText;
	   var ns =n.indexOf("Open");
	   if(ns>1){
		document.getElementById("okl").innerHTML = document.getElementById("okl").innerHTML + n + "<br />";
		document.getElementById("live").innerHTML = live;
		live++;
	   }
	   else {
			document.getElementById("ok").innerHTML = n;
	   }
      }
   }
   xmlHttp.open("GET",url,true);
   xmlHttp.send(null);  
}

</script>
<body>
<br /><br />
<div class="main-content">
	<section id="main" class=""><center><h1>Server Analytics</h1>
	<form method="post" action="">
		<input style="width:90%" name="site" wrap="off" value="<?php echo $_POST['site']; ?>"></input><br/><br/>
		Port: <input type="text" size="6" name="port" value="<?php if(!$_POST['port']){echo '3389';} else { echo $_POST['port'];} ?>" /><br/><br/>
		<input type="submit" value="Submit" class="submit-button" name="submit"> 
	</form>
    </center></section> 
</div>
<div id="show">
	<div><b><font color='red'>Status</font> ( Checked : <b id='total'>0</b> | Open : <b id='live'>0</b>)</b></div>
	<div id='server' style="color: red;"></div>
	<div id="okl" style="color:green;"></div>
	<div id="ok" style="color:red;"></div>
</div>
<?php

	
	if(isset($_POST['submit']))
	{
		$portpost = $_POST['port'];
		$ngu= $_POST['site'];
		$ngu= preg_replace("/^http:\/\/(.+)/", "\\1", $ngu);
		$ngu = preg_replace("/^https:\/\/(.+)/", "\\1", $ngu);
		$ngu= str_replace('/',null,$ngu);
		$ip = gethostbyname($ngu);
		$nums = explode(".", $ip) ;
		$ip3 = $nums[0]. "." .$nums[1]. "." .$nums[2] ;
		echo "<script>show('$ip');</script>";
		for ($i = 1; $i < 256; $i++){
			$vl = "$ip3.$i";
			echo "<script>ajaxFunction('index.php?site=$vl&port=$portpost');</script>";
			?>
			<?php
		}
	}
}
?>