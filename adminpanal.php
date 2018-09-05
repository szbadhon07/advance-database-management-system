<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>

<title>Booking information</title></head>

<body>
 
	  <h1>welcome admin</h1>
	  <h2>Choose option from Below to take action!!!!
	  Create new Booking click <a href="booking.php"> Here</a></h2>
	  <h2><a href="adminhome.php">Home</a></h2>
	  <?php
	require_once('index.php');
	 $c = oci_connect("sz","sz","localhost");
	  $sql=oci_parse($c,"select * from book ");
	  oci_execute($sql) ;
	  ?><table border="1">
	  <?php
	  
	 
	  while($data=oci_fetch_array($sql))
	  {
	 ?>
	  <tr>
	  <td><?php echo $data['ID']; ?></td>
	  <td><?php echo $data['NAME']; ?></td>
	  <td><?php echo $data['PHONE']; ?></td>
	  <td><?php echo $data['CHECKIN_DATE']; ?></td>
	  <td><?php echo $data['CHECKOUT_DATE']; ?></td>
	  <td><?php echo $data['ROOM_TYPE']; ?></td>
	  <td><?php echo $data['NO_OF_ROOM']; ?></td>
	  <td><?php echo $data['AMOUNT']; ?></td>
	 
	  <td><a href="delete.php?id=<?php echo $data['ID']; ?>">delete</a></td>
	  
	  </tr>
	 <?php
	  }
	  ?>
	 
	  
	  </table>
<body background="3.jpg">
</body>
</html>
