<!DOCTYPE html>

<?php
session_start();

$name=$_SESSION['name'];

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel Guide</title>
    <style>
        .header_menu{
			
            width: 100%;
            height: 80px;
            border-bottom: 2px solid #efefef;
        }    
        .left_side{
            width: 20%;
            float: left;
        }
        .right_side{
            width: 70%;
            float: right;
        }
.right_side ul{
    list-style: none;
    
}
.right_side ul li{
    float: left;
    padding: 20px;
    list-style:none;
}
.right_side ul li a{
    text-decoration: none;
    font-size: 20px 
}
.maincontent{
    width: 100%;
    margin-top: 20px;
}
.left_sidebar{
    width: 20%;
    border: 2px solid#efefef;
    float: left;

}
.main_post{
    margin-left: 30px;
    width: 55%;
	
    border:1px solid black;
    float: left;
}
.right_sidebar{
    width: 20%;
    border: 1px solid pink;
    float: right;
}

.left_sidebar ul{
    margin-right: 27px;
}
.left_sidebar ul li{
    text-decoration: none;
    list-style-type: none;
    padding: 20px;
    border: 2px solid #efefef;
    text-align: center;
}

.left_sidebar ul li:hover{
    background: #efefef;
}

 .left_sidebar ul li a{
     text-decoration: none;
   
     
 }
 .main_post p{
     text-allign : center;

 }

    </style>
</head>
<body>
    <div class="header_menu">
        <div class="left_side">
            <h1>Welcome,<?php echo "$name"; ?> !</h1>
        </div>
        <div class="right_side">
            <ul>
                <li><a href="AdminHome.php">Home</a></li>
                
                <li><a href="BlogPage.php">Blogs</a></li>
               
                
				<li>
                  <!-- <input type="submit" value="logout" name="submit"> !-->
                  <a href="adminout.php">Logout</a>
                   
                </li>
            </ul>
        </div>
    </div>

<div class="maincontent">
        <div class="left_sidebar">
           <h1 style="text-align:center">web site info</h1>
            <ul>
                <li><a href="Users.php">User list</a></li>
                <li><a href="admindetail.php">admin list</a></li>
				<li><a href="empdetail.php">Employee list</a></li>
               
               
            </ul>


        </div>
        <div class="main_post">

            <p>         
            
			 <?php
	require_once('index.php');
	 $c = oci_connect("sz","sz","localhost");
	  $sql=oci_parse($c,"select * from project ");
	  oci_execute($sql) ;
	  ?><table border="1">
	  <center>
				<table border='1' cellpadding='5' cellspacing='0'>
				<tr><td colspan='4' align='CENTER'>Users</td></tr>
				<tr>
				<td>Id</td><td>Name</td><td>Email</td><td>Function</td>
				</tr>
				
	  <?php
	  
	 
	  while($data=oci_fetch_array($sql))
	  {
	 ?>
	  <tr>
	  <td><?php echo $data['ID']; ?></td>
	  <td><?php echo $data['NAME']; ?></td>
	  <td><?php echo $data['EMAIL']; ?></td>
	 
	  <td><a href="userdel.php?id=<?php echo $data['ID']; ?>">delete</a></td>
	  
	  </tr>
	 <?php
	  }
	  ?>
	 





            
           </p>
        </div>




        
</div>
<body background="2.jpg">
</body>
</html>