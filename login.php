<?php

require_once('index.php');

session_start();

function login_form($message)
{
  echo <<<EOD
  <body style="font-family: Arial, sans-serif;">

  <h2>Login Page</h2>
 
  <form action="login.php" method="POST">
    <p>Username: <input type="text" name="name"></p>

    <p>Password: <input type="text" name="pass"</p>
    <input type="submit" value="Login">
	<h2>Don't have an account! register a new account....!!!!</h2>
	<h2><p><a href="registration.php">Registration</a><p></h2>
  </form>

	  <p>$message</p>
	   
  </body>
EOD;
}

if (!isset($_POST['name']) || !isset($_POST['pass'])) {
  login_form('');
} 
else {
  $c = oci_connect("sz","sz","localhost");
  oci_set_client_identifier($c, 'admin');

  $s = oci_parse($c, 'select name from   project where  name = :un_bv and    pass = :pw_bv');
  oci_bind_by_name($s, ":un_bv", $_POST['name']);
  oci_bind_by_name($s, ":pw_bv", $_POST['pass']);
  oci_execute($s);
  $r = oci_fetch_array($s, OCI_ASSOC);

if ($r) {
  
    $_SESSION['name'] = $_POST['name'];
   header("location:userhome.php");
    echo <<<EOD
    <body style="font-family: Arial, sans-serif;">

    <h2>Login was successful</h2>
    
	<p><a href="logout.php">Logout</a><p>
    </body>
EOD;
    exit;
  }
   else {
  
    login_form('invalid user and password');
  }
}

?>
<html>
<body background="login.jpeg">


</body>
</html>
