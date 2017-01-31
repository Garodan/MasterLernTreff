<?php
if(isset($_POST['username']))
{
$username = $_POST['username'];
}
if(isset($_POST['passwd']))
{
$password = $_POST['passwd'];
}
$username = "s_schenker";
$password = "Cyb3rwaruser";

echo $username;
$back = logon($username,$password);


function logon(&$username,&$password)
{
$url = "https://webmail.stud.hwr-berlin.de/ajax/login?action=login"; 

$ch = curl_init();
$data = array(
		'name' => $username,
        'password' => $password,
		'action' => 'login',
         );
$curlConfig = array(
    CURLOPT_URL            => $url,
    CURLOPT_POST           => true,
    CURLOPT_RETURNTRANSFER => true,
	CURLOPT_CERTINFO       => true,
	CURLOPT_COOKIESESSION  => true,
	CURLINFO_HEADER_OUT    => true,
	CURLOPT_AUTOREFERER    => true,
	CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_POSTFIELDS     => http_build_query($data)
);
curl_setopt_array($ch, $curlConfig);
$result = curl_exec($ch);
curl_close($ch); 
echo $result;
json_decode($result);
return $result;
}
 ?>