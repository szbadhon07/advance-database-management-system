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

.right_sidebar ul{
    margin-right: 27px;
}
.right_sidebar ul li{
    text-decoration: none;
    list-style-type: none;
    padding: 20px;
    border: 2px solid #efefef;
    text-align: center;
}

.right_sidebar ul li:hover{
    background: #efefef;
}

 .right_sidebar ul li a{
     text-decoration: none;
   
     
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
                <li><a href="UserHome.php">Home</a></li>
                
                <li><a href="userblogpage.php">Blogs</a></li>
                
				<li>
                   <!-- <input type="submit" value="logout" name="submit"> !-->
                   <a href="Logout.php">Logout</a>
                   
                </li>
            </ul>
        </div>
    </div>

<div class="maincontent">
        <div class="left_sidebar">
           <h1 style="text-align:center">Places</h1>
            <ul>
                <li><a href="createBlog.php">Create Blog</a></li>
                <li><a href="#">Edit Post</a></li>
                <li><a href="#">Delete Post</a></li>
                <li><a href="#">Edit Profile</a></li>
                
            </ul>


        </div>
        <div class="main_post">
        <form method="post" action="#" enctype="multipart/form-data">
	
	<table width="100%" align="center" >
	
		<tr>
			<td align="left">Post Title:</td>
			<td><input type="text" name="title" size="65"></td>
		</tr>

		<tr>
			<td align="left">Category:</td>
                        <td><select name="category">
                           
                            <option name="Saintmartin">Saint Martin</option>
                            <option name="Dhaka">Dhaka</option>
							<option name="rangamati">rangamati</option>
							<option name="sylhet">sylhet</option>
							<option name="cox bazar">cox bazar</option>
							
            </select>
            </td>		

		</tr>
		
		
		<tr>
			<td align="left">Post Content:</td>
			<td><textarea name="content" cols="67" rows="15" style="resize:none"></textarea></td>
		</tr>
		
		<tr>
			<td align="center" colspan="6">
                </br>
                    <input type="submit" name="submit" value="Publish"> 
            </td>
		</tr>
       
	
	</table>
</form>
        </div>
        
</div>
<body background="3.jpg">

</body>
</html>
<?php 
require_once('index.php');
 $c = oci_connect("sz","sz","localhost");



if(isset($_POST['submit'])){
    
	  $post_title = $_POST['title'];
	  $post_category = $_POST['category'];
	  $post_content = $_POST['content'];
	  
	 
      $s=oci_parse($c,"insert into post (userid,ptitle,pcategory,pcontent) 
      values (post_seq.NEXTVAL,'$post_title','$post_category','$post_content')");
	  $r=oci_execute($s);
	
	if($r){
	
	echo "<script>alert('post published successfuly')</script>";
	echo "<script>window.open('UserHome.php','_self')</script>";
	
	}
	else 
		echo "opppsss!!!!";

}

?>