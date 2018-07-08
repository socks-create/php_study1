<?php
setcookie("user", "runoob", time()+3600);
?>

<?php
// 输出 cookie 值
//echo $_COOKIE["user"];

// 查看所有 cookie
//print_r($_COOKIE);
?>


<?php
$clientip = $_SERVER['REMOTE_ADDR'];
echo $clientip;
echo "<br>";
$ip_start = get_iplong('192.168.1.1');
$ip_end = get_iplong('192.168.1.255');
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
				echo "<a href=' www.xxx.com' ><p>downloads file</p></a>";
				echo "<br />";
				echo "<h1>downloads file</h1>";
				echo "<p>";
				echo "<h3>downloads file</h3>";
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



