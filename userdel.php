<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title></head>

<body>
<?php
require_once('index.php');

if(isset($_GET['id']))
{
$id=$_GET['id'];
$c = oci_connect("sz","sz","localhost");
$sql=oci_parse($c,"delete from project where id= '".$id."'");
oci_execute($sql) ;

header("location:Users.php");
}
?>
</body>
</html>
