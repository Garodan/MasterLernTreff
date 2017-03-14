<!doctype html>
<html ng-app="lernTreff">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LernTreff Login</title>

<!-- Style -->
<link href="css/login.css" rel="stylesheet">
<link href="css/login2.css" rel="stylesheet">


</head>

<body>
<p></p>
<div class="wrapper">
  <div id="login-box">
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
</div>
<div id="particles-js"></div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/login2.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>

            <!-- Footer -->
            <ng-include src="'templates/footer.php'"></ng-include>
</body>
</html>

<?php
$connect = mysqli_connect("localhost", "root", "", "lerntreff_db");
session_start(true);
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
$result = json_decode($back);
if(isset($result->{"session"}))
{
$name = $result->{"user"};
$_SESSION['name'] = $name;
$test='"';
$query1 = "SELECT * FROM userliste WHERE username=$test$name$test ORDER BY username DESC";
$result1 = mysqli_query($connect, $query1);
$row1 = mysqli_fetch_array($result1);
$_SESSION['row1'] = $row1;
if(isset($row1['username']))
{

}
else
{
  $name2 = "Name";
  $geschlecht = 1;
  $studiengang = "Studiengang";
  $email = "Email Adresse";
  $matrikelnummer = "Matrikelnummer";
  $text = "Schreib hier etwas über dich :D";
 $eintrag = "INSERT INTO userliste (username,name,geschlecht,studiengang,email,matrikelnummer,text) VALUES ('$name','$name2','$geschlecht','$studiengang','$email','$matrikelnummer','$text')";
 $eintragen = mysqli_query($connect, $eintrag);
}
header ( 'Location: startseite.php' );
}
else
{
if(isset($result->{"error"})&&$_POST['usr']!="")
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

return $result;
}
 ?>
