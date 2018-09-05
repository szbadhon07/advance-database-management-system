<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<style type="text/css">
	#contenar{
		height: 100%;
		width: 100%;
		
	}
	#r{
		margin-top: 5%;
		margin-bottom: 5%;
		margin-right: 5%;
		margin-left: 5%;
		float: center;
		background-color: #b7bcbd;
		
	}

	</style>
	

     
</head>

<body>
<?php

require_once('index.php');
session_start();
//$name=$_SESSION['name'];
if(isset($_POST['sub']))
{
$id='';
$name=$_POST['name'];
$phone=$_POST['phone'];
$room_type=$_POST['room_type'];
$roomtype=$_POST['field_1'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$room_nos=$_POST['room_nos'];
$amount=$_POST['roomprice'];
$c = oci_connect("sz","sz","localhost");
$checkroom= oci_parse($c,"select count(*) from book where room_type='$room_type' ");
oci_execute($checkroom) ;
$roomcount=oci_fetch_array($checkroom);
 $checkcount=$roomcount[0];
if($checkcount>=100)
{
?> <script>alert("Sorry Rooms Are not Available :( please try another Option !!");</script>
<?php }
else{
	
$s1=oci_parse($c,"insert into book (id,name,phone,checkin_date,checkout_date,room_type,room_price,no_of_room,amount)
     VALUES(book_seq.NEXTVAL,'$name','$phone','$startdate','$enddate','$room_type','$roomtype','$room_nos','$amount')");
$result = oci_execute($s1);
if($result){
	
header("location:adminpanal.php");

}
else 
{echo "<p>oooooopppppssssss!</p>";}
}
}
?>

<div id="contenar">

	<div id="r">
	<form action="adminbook.php" method="POST">
	<h2 align="center" id="h"><u><i>Book Room</i></u></h2>
	<h3> Welcome <?php  if(isset($_SESSION['name'])){ echo $_SESSION['name']; } ?> !!!</h3>
        <table >
		
          <tr>
            <td width="113">Check in Date</td>
            <td width="215">
              <input name="startdate1" type="date"  value="<?php if(isset($_POST['startdate1'])){ echo $_POST['startdate1']; }?>" /></td>
          </tr>
          <tr>
            <td>Check out Date</td>
            <td>
              <input name="enddate1" type="date" value="<?php if(isset($_POST['enddate1'])){ echo $_POST['enddate1']; }?>" onchange='this.form.submit()' /></td>
          </tr>
			
       </table>
		</form>
		<form action="adminbook.php" method="POST">
        <table >
		
          <tr>
            <td width="113"></td>
            <td width="215">
              <input name="startdate" type="hidden" value=" <?php if(isset($_POST['startdate1'])){ echo $_POST['startdate1']; }?> " /></td>
          </tr>
		  
          <tr>
            
          <td> Reservation Name</td>
            <td><input name="name" type="text" size="10" /></td>
			<td> phone no</td>
            <td><input name="phone" type="text" size="20" /></td>
              <input name="enddate" type="hidden" value=" <?php if(isset($_POST['enddate1'])){ echo $_POST['enddate1']; }?> "  /></td>
          </tr>
		  <tr>
            <td>Hotel room Type</td>
            <td>
              <select class="text_select" id="field_1" name="field_1" >  
<option value="00">- Select -</option>   
<?php 
require_once('index.php');
              $c = oci_connect("sz","sz","localhost");
              $stid = oci_parse($c, "select * from roomtype");
			  oci_execute($stid);
              /*while ($row = oci_fetch_array($stid,OCI_ASSOC+OCI_RETURN_NULLS))
			  {
				  echo "<option=\"unit1\">" .$row['ROOM_TYPE']."</option>";
				 
              }

                     /*$row = oci_fetch_array($stid,OCI_ASSOC+OCI_RETURN_NULLS);*/
			     
      ?>

<?php while($catdata=oci_fetch_array($stid)) { ?>  <option value="<?php echo $catdata['ROOM_PRICE']; ?>"><?php echo $catdata['ROOM_TYPE']; ?></option>
           <?php } ?>
		   <?php  ?>
           </select></td>
          </tr>
		  <tr>
           <td> Room type</td>
		   <td><input name="room_type" type="text " value=" <?php if(isset($_POST['room_type'])){ echo $_POST['room_type']; }?> " /></td>
            <td> <span style="color:red;">*<?php echo "this must be fill Hotel Room Type "?></span>	</td>	  
		  </tr>
		  <tr>
            <td>Price per Room</td>
            <td>
             <span id="a1"  ></span>$
           </td>
          </tr>
		   <tr>
            <td>No. of Guest per Room</td>
            <td>
              <input name="guest" type="text " size="10"/></td>
          </tr>
		  <tr>
            <td>No. of Rooms </td>
            <td>
              <input name="room_nos" id="room_nos" type="text " size="10" onChange="gettotal1()" /></td>
          </tr>
		  <tr>
            <td>Total Amount To Pay</td>
            <td>
             <input type="text" name="roomprice" id="total1"  size="10px" readonly="" />
           </td>
          </tr>
		  
          <tr>
            <td colspan="2" align="center">
			<input type="submit" name="sub" value="Pay & Book" /></td>
            </tr>
			
       </table>
		</form>
		
		<script language="javascript" type="text/javascript">
function notEmpty(){

var e = document.getElementById("field_1");
var strUser = e.options[e.selectedIndex].value;
 var strUser=document.getElementById('a1').innerHTML=strUser;




}
notEmpty()
    
    document.getElementById("field_1").onchange = notEmpty;


   function gettotal1(){
      var gender1=document.getElementById('a1').innerHTML;
      var gender2=document.getElementById('room_nos').value;
      var gender3=parseFloat(gender1)* parseFloat(gender2);
			
      document.getElementById('total1').value=gender3;
	
   }
			</script>
 
		
	</div>
</div>
<body background="4.jpg">
</body>
</html>