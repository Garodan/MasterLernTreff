<!doctype html>
<meta charset="utf-8">
<html ng-app="lernTreff">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LernTreff Login</title>
<link href="css/login.css" rel="stylesheet"
<script src="js/prefixfree.min.js">
</head>

<body>

<div class="wrapper">
  <form class="login" action="" method="POST">
    <p class="title">Einloggen</p>
     <input type="text" placeholder="Benutzername" name="usr" id="username"/>
      <i class="fa fa-user"></i>
    <input type="password" placeholder="Passwort" name="pwd" id="passwd"/>
      <i class="fa fa-key"></i>
    <a href="http://www.it.hwr-berlin.de/de/helpdesk/haeufige-fragen/">Passwort vergessen?</a>
    <button>
      <i class="spinner"></i>
      <span class="state">Einloggen</span>
    </button>
  </form>
</div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!--<script src="js/login.js"></script>-->

            <!-- Footer-->
<footer class="bs-footer" role="contentinfo">
    <div style="position: relative; height: 300px;">
<p style="position: absolute; bottom: 0;"></p>
</div>
  <div class="container" style="width:500px;">
    <center> hwr-lerntreff.de <a href="impressum.html" target="_blank">Impressum</a> | <a href="agbs.html" target="_blank">AGBs</a> | <a href="faq.html" target="_blank">FAQ</a></center>
  </div>
</footer>
</body>
</html>

<?php
$first;
if(isset($_POST['usr']))
{
$username = $_POST['usr'];
}
if(isset($_POST['pwd']))
{
$password = $_POST['pwd'];
}
/*json_decode($back)*/
$back = logon($username,$password);
list($session, $user, $user_id, $context_id, $locale) = explode(",", $back);
if(substr($user, 8, 1) == "s")
{	
echo $user;
header ( 'Location: startseite.html' ); 
}
else
{
echo $session;
<<<<<<< HEAD
if(isset($session))
=======
if(substr($session, 10, 1) == "T")
>>>>>>> origin/master
{
echo "<script type='text/javascript' src='js/login.js' language='javascript'>"; 
echo "</script>"; 
}
else
{
$first = true;	
}
}

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
return $result;
}
 ?>