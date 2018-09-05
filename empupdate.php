<?php

	//error_reporting(0);
		
	$email= $erremail = $pass = $errpass = $cpass = $errcpass = $name = $errname = $usertype = $errusertype = "";
	$name=$email=$pass=$cpass=$user="";
    $flag=1;
   
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name=trim($_POST['name']);
		$email=trim($_POST['email']);
		$pass=trim($_POST['pass']);
		$cpass=trim($_POST['cpass']);
		$usertype="1";
		$id='';

	
	if(isset($_POST['submit'])){

		if (empty($_POST['email'])) {
			$email="";
			$erremail = "You forgot to enter your email address";
			$flag=0;
		} 
		
		
		if(!(empty($pass))){
			if(strlen($pass)<4)
			{
				$pass ="";
				$errpass = "Password must contains at least 4 characters";
				$flag=0;
			}
		}
		else
		{
			$pass="";
			$errpass = "Cannot be empty";
			$flag=0;
		}
				
		if(!(empty($cpass))){
			if($cpass!=$pass)
			{	$cpass = "";
				$errcpass = "Must be match";
				$flag=0;
			}
		}
		else
		{
			$cpass="";
			$errcpass = "Cannot be empty";
			$flag=0;
		}
		
		
		
		if($flag==1)
		{
			$c = oci_connect("sz","sz","localhost");

		$name= $_POST['name']; 
      $email = $_POST['email'];
      $pass = $_POST['pass']; 
      $cpass= $_POST['cpass']; 
     $s = oci_parse($c, "insert into project
                           (id,name, email,pass )
                           values (project_seq.NEXTVAL,'$name', '$email',
                                   '$pass')");
								   $result = oci_execute($s);
 if ($result)
      { 
        echo <<<EOD
    <body style="font-family: Arial, sans-serif;">

    <h2>registration completed</h2>
    <p><a href="login.php">Login</a><p>
    </body>
EOD;
    exit;
      }
      else
      { 
         echo "<p>registration not completed!</p>";
         var_dump(oci_error($s));
      }

      oci_close($c);
		}
		else
			echo "fill form correctly";


		}
	}	
?>





<html>
<body>

   <form action="#" method="POST">
	    <div align="Center" width=33% border="1px" >
			<div>
                 <h1 > PROTOTYPE OF Travel Guide </h1> <hr/> 
            </div>
             <div >
   		            <h2> SIGN UP </h2>
		            <p>Please provide the following informations to Sign up</p>
	        </div>
	        
			<br/>
            <div >
		        <label >Name : </label>
		        <input type="text" id = "name" name="name" onblur="getName()">
				<span style="color:red;">*<?php echo $errname ?></span>
				<br/>
	        </div>
			<br/>
            <div>
		        <label>Job</label>
		        <input type="email" id = "email" name="email" onblur="getEmail()">
				<span style="color:red;">*<?php echo $erremail ?></span>
				<br/>
	        </div>
			<br/>
            <div>
		        <label>Salary</label>
		        <input type="email" id = "email" name="email" onblur="getEmail()">
				<span style="color:red;">*<?php echo $erremail ?></span>
				<br/>
	        </div>
	        <br/>
            <div>
		        <label>Hire_Date</label>
		        <input type="email" id = "email" name="email" onblur="getEmail()">
				<span style="color:red;">*<?php echo $erremail ?></span>
				<br/>
	        </div>
	        <br/>
			<div>
		        <label>Commision</label>
		        <input type="email" id = "email" name="email" onblur="getEmail()">
				<span style="color:red;">*<?php echo $erremail ?></span>
				<br/>
	        </div>
			<div>
		        <label>Department Name</label>
		        <input type="email" id = "email" name="email" onblur="getEmail()">
				<span style="color:red;">*<?php echo $erremail ?></span>
				<br/>
	        </div>
            <div >
		        <input type="submit" value="Sign Up" name="submit"><br/>
				
				<a href="login.php">Log in</a>
				
	        </div>
			<br/>
		</div>	
	</form>

</body>
<?php 
   include("FOOTER/footer.php");
?>
<script type="text/javascript" src='myjavascript.js'></script>
</html>




