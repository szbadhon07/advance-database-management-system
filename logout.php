<?php

// logout.php

session_start();
unset($_SESSION['username']);
 header("location:login.php");
echo <<<EOD
<body style="font-family: Arial, sans-serif;">
<h2>Goodbye</h2>

<p>You are logged out.<p>


</body>
EOD;

?>