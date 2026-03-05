<?php
ob_start();
session_start();
if(isset($_SESSION['mobno']))
{
	header("Location:customer/Customer.php");
}else{
?>
<!DOCTYPE html>
<html>
<head>
<title>Online Shopping For Local Vendor's::Home</title>
<!--
Setting logo for title bar and image size should be 50X50.
-->
<link rel="shortcut icon" href="IMAGES/img3.jpg" type="image/x-icon">
<!-- 
viewport to make your website look good on all devices.
width=device-width:Depending on width of the device it takes width.
initial-scale=1.0:sets the initial zoom level when the page is first loaded by the browser.
-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- 
Linking Externall css file and 
media=all :Used for all media type devices.
-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="JS/sweetalert2.all.min.js"></script>
  <script src="JS/validation.js"></script>
<link href="CSS/style.css" rel="stylesheet" type="text/css" media="all" />


</head>
<body>
<!--header-->
<header>
  <a href="#" class="logo"><img src="IMAGES/img3.jpg"/>Online Shopy</a>
  <div class="header-right">
  <a>Email ID:susmitacm79@gmail.com</a><br><br>
  <a>Contact No:1234567890</a>
  </div>
</header>
<!-- end of header-->
<!--menu/navigation bar-->
<div class="header"></div>

<nav class="navbar">
  <a  class="active1" href="index.php"><i class="fas fa-home"style="color:purple; font-size:40px;"></i>Home</a>
  <a href="aboutus.php"><i class="fas fa-address-card"style="color:purple; font-size:40px;"></i>About Us</a>
  <a href="contactus.php"><i class="fas fa-phone-volume"style="color:purple; font-size:40px;"></i>Contact Us</a>
  <div class="dropdown">
    <button class="dropbtn"><i class="fas fa-sign-in-alt"style="color:purple; font-size:40px;"></i>SignUp 
     
    </button>
    <div class="dropdown-content">
      <a onclick="showcustomerprofile()">Customer SignUp</a>
      <a onclick="showsellerprofile()">Seller Signup</a>
      
    </div>
  </div>
<div class="dropdown">
    <button class="dropbtn"><i class="fas fa-user-plus"style="color:purple; font-size:40px;"></i>SignIn
     
    </button>
    <div class="dropdown-content">
      <a class="csigninstart-btn">Customer Signin</a>
      <a class="asigninstart-btn">Admin Signin</a>
      <a class="ssigninstart-btn">Seller Signin</a>
    </div>
	
  </div> 
</nav>

<!--end of menu/navigation bar-->
<!--start of slider css -->

<div class="row">
        <div class="col-3">
               <h1>Give Your Workout <br>A New Style!</h1>
               <p>Success isn't always about greatness. It's about 
                  consistency.Consistent <br>Hard Work gains Success.Greatness 
                  will Come.</p>

                  <a  onclick="showcustomerprofile()" class="btn">Explore Now &#8594; </a>
          </div>
<div class="col-2">
<img src="IMAGES/h1.jpg" style="width:200%,height:20px;">
</div>
<div class="Fcard Fcard1">
         <h5></h5>
         <p>  </p>

            

      </div>
      <div class="Fcard Fcard2">
         <h5></h5>
         <p></p>

      </div>
      <div class="Fcard Fcard3">
         <h5></h5>
         <p>Always follow The Siganals</p>

      </div>
      <div class="Fcard Fcard4">
         <h5>fruits & veg</h5>
         <p> Keep calm and eat more veggies....</p>


      </div>
      
  
</div>

<div class="slideshow-container">

<div class="mySlides spin">
  <div class="numbertext">baner1/ 5</div>
  <img src="IMAGES/baner1.jpg" style="width:100%">
  <div class="text">I Could give up Shopping but I'm not a quitter...!</div>
</div>

<div class="mySlides spin">
  <div class="numbertext">2 / 5</div>
  <img src="IMAGES/2.jpg" style="width:100%">
  <div class="text">Happiness is....<br>
  Reciving What You Ordered Online...!</div>
</div>

<div class="mySlides spin">
  <div class="numbertext">3 / 5</div>
  <img src="IMAGES/3.jpg" style="width:100%">
  <div class="text">Happiness is not in money,but in Shopping...!</div>
</div>
<div class="mySlides spin">
  <div class="numbertext">b8/ 5</div>
  <img src="IMAGES/b8.jpg" style="width:100%">
  <div class="text">Don'T send a Man to The Grocery Store...!</div>
</div>
<div class="mySlides spin">
  <div class="numbertext">b1 / 5</div>
  <img src="IMAGES/b1.jpg" style="width:100%">
  <div class="text">If Only Online Shopping Burned Calories...!</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
</div>
<script type="text/javascript" src="JS/slider.js"></script>

<!--end of slider css --> 
<!--Start of Products --> 
<h2 style="text-align:center">Product Details</h2>


<table>
<tr>
<?php
$connect=mysqli_connect("localhost","root","","onlineshopy");
	if(!$connect)
	{
		die("Could not connect the mysql database".mysqli_error());
	}
	else
	{
		$pquery="select *from product";
		$result=mysqli_query($connect,$pquery) or die("Could not connect exucute query");
		while($row=mysqli_fetch_array($result))
		{
			?>
 
<td>
  
  <div class="card">
  <?php echo '<img src="data:image\jpeg;base64,'.base64_encode($row['pphoto1']).'" width="250" height="200">';?>
  <h1><?php echo $row['pname'];?></h1>
  
  <p class="desc">name:<?php echo $row['pname'];?></p>
  <p class="desc">sellermobno:<?php echo $row['sellermobno'];?></p>
  <p class="desc">pdescription:<?php echo $row['pdescription'];?></p>
  <p class="price">RS.<?php echo $row['Pprice'];?>per bag</p>
    <p class="desc">quantity:<?php echo $row['pquantity'];?></p>
    <p class="desc">How to use:<?php echo $row['HtoU'];?></p>
  <p><button><a onclick="showcustomerprofile()">Buy</button></a></p>
  </div>
 </td>
	<?php
}
}
?>
</tr>
</table>
<!--end of Products --> 
<!--start of about us --> 
<section style="background-image:url('IMAGES/k1.jpg'); background-repeat:no-repeat"> 

  <h1>Our Services</h1>
  <ul type="Daimond">
  <li>Know the needs of Customer and providing them.</li>
  <li>Research potential client.</li>
  <li>Selling personalised goods and gifts.</li>
  <li>Cost Reliable.</li>
  </ul>
  
</section>
<!--end of about us --> 
<br/><br/><br/>

<!-- start of coustomer signup popup window-->
<div class="customerprofile">
<div class="customerprofileheader">
<h1>Customer signup</h1>
<span onclick="closecustomerprofile()">&times;</span>
</div>
<form action="#" name="myForm" method="POST" onsubmit="return formValidate()">
<div class="mpcontainer">
<label>fname:</label>
<input type="text" name="fname" id="fname" placeholder="Enter Name"/><br>

<label>lname:</label>
<input type="text" name="lname" id="lname" placeholder="Enter Name"/><br>
<label> Mobile no:</label>
<input type="text" name="umob" id="umob" placeholder="Enter Mob No" /><br>

<label>E-mail:</label>
<input type="text" name="email" id="email" placeholder="Enter Email Id" /><br>


<label>Gender:</label>
<select name="gender" id="gender">
                  <option value="select Gender">select Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Famale</option>
                  <option value="other">others</option>
              </select><br>
			  
<div class="form_wrap fom_grp">
<div class="form_item">
<label> password:</label>
<input type="password" name="pwd" id="pwd"/><br>
</div>
<div class="form_item">
<label>  confirm password:</label>
<input type="password" name="cpwd" id="cpwd"/><br>
</div>
</div>
			  
<label>Your Fvr Frnd Name:</label>
<input type="text" name="hint" placeholder="Enter ur fvr frnd name" /><br>




<label>Address:</label>
<textarea placeholder="Enter Address" name="address"></textarea><br>

<input type="submit" value="signup" name="csignup" class="btn"/>

  </div>
</div>
</form>
<script>
function showcustomerprofile() 
{
document.querySelector(".customerprofile").classList.add("showcustomerprofile");

}
function closecustomerprofile(){
document.querySelector(".customerprofile").classList.remove("showcustomerprofile");
}
</script>
<?php
if(isset($_POST['csignup']))
{
 $connect=mysqli_connect("localhost","root","","onlineshopy");
 if(!$connect)
 {
   die("Could not connect the mysql database".mysqli_error());
  }else{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $pwd=$_POST['pwd'];
  $gender=$_POST['gender'];
  $mobno=$_POST['umob'];
  $address=$_POST['address'];
  $hint=$_POST['hint'];
  $alreadyaccount="select *from customer1 where mobno='$mobno'";
  $result=mysqli_query($connect,$alreadyaccount)or die("could not execute alreadyaccount query");
  if(mysqli_num_rows($result)>=1)
  {
	echo '<script>';
	echo 'swal("Sorry","Your account is already present, please use signin","error")';
	echo '</script>';
  }else{
  $insertquery="insert into customer1 values('$mobno','$fname','$lname','$email','$pwd','$gender','$address','$hint')";
  $result=mysqli_query($connect,$insertquery) or die('error in insertquery');
  if($result==1)
  {
   echo '<script>';
   echo 'swal("Thank You","Your account is created successfully please login","success")';
    echo '</script>';
	}else{
	echo '<script>';
	echo 'swal("Sorry","Your account is not created please check the details","error")';
	echo '</script>';
	}
  }
}
}
?>

<!-- end  of customer signup popup window-->
<!-- start of seller signup popup window-->
<div class="sellerprofile">
<div class="sellerprofileheader">
<h1>Seller SignUp</h1>
<span onclick="closesellerprofile()">&times;</span>
</div>
<form action="#" name="myForm2" method="POST" onsubmit="return formValidate2()">
<div class="mpcontainer">

<label>fname:</label>
<input type="text" name="fname" id="fullname" placeholder="Enter Name"/><br>

<label>lname:</label>
<input type="text" name="lname" id="lastname" placeholder="Enter Name"/><br>

<label> Mobile no:</label>
<input type="text" name="umob" id="umobno" placeholder="Enter Mob No" /><br>

<label>E-mail:</label>
<input type="text" name="email" id="emailid" placeholder="Enter Email Id" /><br>

<div class="form_wrap fom_grp">
<div class="form_item">
<label> password:</label>
<input type="password" name="pwd" id="pass" /><br>
</div>
<div class="form_item">
<label>  confirm password:</label>
<input type="password" name="cpwd" id="cpass" /><br>
</div>
</div>

<label>Gender:</label>
<select name="gender" id="Gender" >
                  <option value="select gender">select gender</option>
                  <option value="Male">Male</option>
                  <option value="Famale">Famale</option>
                  <option value="others">others</option>
              </select><br>
			  
<label>Your Fvr Frnd Name:</label>
<input type="text" name="hint" placeholder="Enter ur fvr frnd name" /><br>



<label>Address:</label>
<textarea placeholder="Enter Address" name="address" ></textarea><br>

<input type="submit" value="signup" name="Ssignup"  class="btn"/>

  </div>
</div>
</form>
<script>
function showsellerprofile() 
{
document.querySelector(".sellerprofile").classList.add("showsellerprofile");

}
function closesellerprofile(){
document.querySelector(".sellerprofile").classList.remove("showsellerprofile");
}
</script>
<?php
if(isset($_POST['Ssignup']))
{
 $connect=mysqli_connect("localhost","root","","onlineshopy");
 if(!$connect)
 {
   die("Could not connect the mysql database".mysqli_error());
  }else{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $pwd=$_POST['pwd'];
  $gender=$_POST['gender'];
  $mobno=$_POST['umob'];
  
  $hint=$_POST['hint'];
  $alreadyaccount="select *from seller where mobno='$mobno'";
  $result=mysqli_query($connect,$alreadyaccount)or die("could not execute alreadyaccount query");
  if(mysqli_num_rows($result)>=1)
  {
	echo '<script>';
	echo 'swal("Sorry","Your account is already present, please use signin","error")';
	echo '</script>';
  }else{
  $insertquery="insert into seller values('$mobno','$fname','$lname','$address','$email','$pwd','$gender','$hint')";
  $result=mysqli_query($connect,$insertquery) or die('error in insertquery');
  if($result==1)
  {
   echo '<script>';
   echo 'swal("Thank You","Your account is created successfully please login","success")';
    echo '</script>';
	}else{
	echo '<script>';
	echo 'swal("Sorry","Your account is not created please check the details","error")';
	echo '</script>';
	}
  }
}
}
?>

<!-- end  of seller signup popup window-->
<!-- start of customer signin popup window-->
	<div class="csignincenter csigninmodal-box">
         <h1 style="color:red;font-size:15px;">Customer Signin </h1>
         <div class="fas fa-times csigninfa-times"></div>

        <div class="csigninform_container">
            <form name="form" action="#" method="post" >
	           <div class="csigninform_wrap">
					<div class="csigninform_item">
						<label>Mobile No</label>
						<input type="text" name="mobno">
					</div>
				</div>
				<div class="csigninform_wrap">
					<div class="csigninform_item">
						<label>Password</label>
						<input type="password" name="pwd">
					</div>   
				</div>
				<div class="csiginbtns">
					<div class="cbtn1">
						<input type="submit" name="csignin"  value="signin"/>
					</div>
					<div class="cbtn1">
						<input type="reset" value="clear"/>
					</div>
				</div>
	            <br>
				
			</form>
		</div>
		<a onclick="showchangepassword()" style="color:blue ; pointer:cursor; font-size:20px;">Forget password</a>
	</div>

      <script>
			$(document).ready(function(){
				$('.csigninstart-btn').click(function(){
				$('.csigninmodal-box').toggleClass("show-modal");
				$('.csigninstart-btn').toggleClass("show-modal");
			});
			$('.csigninfa-times').click(function(){
				$('.csigninmodal-box').toggleClass("show-modal");
				$('.csigninstart-btn').toggleClass("show-modal");
			});
			$('.closesignin').click(function(){
				$('.csigninmodal-box').toggleClass("show-modal");
				$('.csigninstart-btn').toggleClass("show-modal");
			});
			});
      </script>
<?php
if(isset($_POST['csignin']))
{
	$connect=mysqli_connect("localhost","root","","onlineshopy");
	if(!$connect)
	{
		die ("could not connect mysql database".mysqli_error($connect));
	}else{
		$mobno=$_POST['mobno'];
		$pwd=$_POST['pwd'];
		$selectquery="select *from customer1 where mobno='$mobno' and pwd='$pwd'";
		$result=mysqli_query($connect,$selectquery);
		if(mysqli_num_rows($result)==1)
		{
			$_SESSION['mobno']=$mobno;
			header("Location:customer/Customer.php");
		    exit;
		
		}else{
			echo '<script>';
		    echo 'swal("sorry","Your mobile number and password is incorrect, please check the details")';
			echo '</script>';
			
		}
	}
	
	
}

?>
<!--start of forgotpassword-->
<div class="changepassword">
<div class="passwordheader">
<h1>Customer Forgot Password</h1>
<span onclick="closechangepassword()">&times;</span>
</div>
<form action="#" method="post">
<div class="cpcontainer">
<label> Mobile no:</label>
<input type="text" name="mobno" placeholder="Enter Mobile no" />

<label> Hint:</label>
<input type="password" name="hint" placeholder="Enter Hint" />



<input type="submit" name="ForgotPassword" value="ForgotPassword" class="btn"/>

<input type="reset" value="clear" class="btn"/>
</form>
</div>
</div>
<!--end give feedback-->
<!-- start script  forgot pass-->
<script>
function showchangepassword()
{
document.querySelector(".changepassword").classList.add("showchangepassword");
}
function closechangepassword(){
document.querySelector(".changepassword").classList.remove("showchangepassword");
}
</script>
<?php
if(isset($_POST['ForgotPassword'])){
	$connect=mysqli_connect("localhost","root","","onlineshopy");
	if(!$connect)
	{
		die("could not connect mysql Databse".mysqli_error());
	}else{
		$mobno=$_POST['mobno'];
		$hint=$_POST['hint'];
		
		
		$cpquery="select *from  customer1 where mobno='$mobno' and hint='$hint'";
		$result=mysqli_query($connect,$cpquery)or die("could not execute query");
		$row2=mysqli_fetch_array($result);
		$dppwd=$row2['pwd'];
		if(mysqli_num_rows($result)==1)
				{
			   echo "<script>";
                echo"swal('ohh','your password is $dppwd','success')";
			    echo "</script>";
				}else{
				echo "<script>";
                echo"swal('Sorry!','password is not changed please check the details!','error')";
			    echo "</script>";
				}
			
	}
}

?>
<!-- end script forgot pass-->

<!-- end  of customer signin popup window-->

<!-- start of Admin signin popup window-->
	<div class="asignincenter asigninmodal-box">
         <h1 style="color:red;font-size:15px;">Admin Signin </h1>
         <div class="fas fa-times asigninfa-times"></div>

        <div class="asigninform_container">
<form name="form" method="POST" action="#">
	           <div class="asigninform_wrap">
					<div class="asigninform_item">
						<label>Mobile No</label>
						<input type="text" name="mobno">
					</div>
				</div>
				<div class="asigninform_wrap">
					<div class="asigninform_item">
						<label>Password</label>
						<input type="password" name="pwd">
					</div>   
				</div>
				<div class="asiginbtns">
					<div class="abtn1">
						<input type="submit" name="asignin" value="signin"/>
					</div>
					<div class="abtn1">
						<input type="reset" value="clear"/>
					</div>
				</div>
	            <br>
				
			</form>
					
		</div>
	</div>

      <script>
			$(document).ready(function(){
				$('.asigninstart-btn').click(function(){
				$('.asigninmodal-box').toggleClass("show-modal");
				$('.asigninstart-btn').toggleClass("show-modal");
			});
			$('.asigninfa-times').click(function(){
				$('.asigninmodal-box').toggleClass("show-modal");
				$('.asigninstart-btn').toggleClass("show-modal");
			});
			
			});
</script>
<?php
if(isset($_POST['asignin']))
{
	$connect=mysqli_connect("localhost","root","","onlineshopy");
	if(!$connect)
	{
		die ("could not connect mysql database".mysqli_error($connect));
	}else{
		$mobno=$_POST['mobno'];
		$pwd=$_POST['pwd'];
		$selectquery="select *from admin where mobno='$mobno' and pwd='$pwd'";
		$result=mysqli_query($connect,$selectquery);
		if(mysqli_num_rows($result)==1)
		{
			$_SESSION['mobno']=$mobno;
			header("Location:admin/Admin.php");
		    exit;
		
		}else{
			echo '<script>';
		    echo 'swal("sorry","Your mobile number and password is incorrect, please check the details")';
			echo '</script>';
			
		}
	}
	
	
}

?>
  <!-- end of Admin signin popup window-->
  
  <!-- start of Seller Signin  popup window-->
	<div class="ssignincenter ssigninmodal-box">
         <h1 style="color:red;font-size:15px;">Seller Signin </h1>
         <div class="fas fa-times ssigninfa-times"></div>

        <div class="ssigninform_container">
            <form name="form" method="POST" action="#">
	           <div class="ssigninform_wrap">
					<div class="ssigninform_item">
						<label>Mobile No</label>
						<input type="text" name="mobno">
					</div>
				</div>
				<div class="ssigninform_wrap">
					<div class="ssigninform_item">
						<label>Password</label>
						<input type="password" name="pwd">
					</div>   
				</div>
				<div class="ssiginbtns">
					<div class="sbtn1">
						<input type="submit" name="ssignin" value="signin"/>
					</div>
					<div class="sbtn1">
						<input type="reset" value="clear"/>
					</div>
				</div>
	            <br>
				
			</form>
			</div>
		<a onclick="showchangepassword1()" style="color:blue ; pointer:cursor; font-size:20px;">Forget password</a>
	</div>
		</div>
	</div>

      <script>
			$(document).ready(function(){
				$('.ssigninstart-btn').click(function(){
				$('.ssigninmodal-box').toggleClass("show-modal");
				$('.ssigninstart-btn').toggleClass("show-modal");
			});
			$('.ssigninfa-times').click(function(){
				$('.ssigninmodal-box').toggleClass("show-modal");
				$('.ssigninstart-btn').toggleClass("show-modal");
			});
			
			});
      </script>
<?php
if(isset($_POST['ssignin']))
{
	$connect=mysqli_connect("localhost","root","","onlineshopy");
	if(!$connect)
	{
		die ("could not connect mysql database".mysqli_error($connect));
	}else{
		$mobno=$_POST['mobno'];
		$pwd=$_POST['pwd'];
		$selectquery="select *from seller where mobno='$mobno' and pwd='$pwd'";
		$result=mysqli_query($connect,$selectquery);
		if(mysqli_num_rows($result)==1)
		{
			$_SESSION['mobno']=$mobno;
			header("Location:seller/seller.php");
		    exit;
		
		}else{
			echo '<script>';
		    echo 'swal("sorry","Your mobile number and password is incorrect, please check the details")';
			echo '</script>';
			
		}
	}
	
	
}

?>
<!--start of forgotpassword-->
<div class="changepassword1">
<div class="passwordheader1">
<h1>Seller Forgot Password</h1>
<span onclick="closechangepassword1()">&times;</span>
</div>
<form action="#" method="post">
<div class="cpcontainer">
<label> Mobile no:</label>
<input type="text" name="mobno" placeholder="Enter Mobile no" />

<label> Hint:</label>
<input type="password" name="hint" placeholder="Enter Hint" />



<input type="submit" name="ForgotPassword1" value="ForgotPassword" class="btn"/>

<input type="reset" value="clear" class="btn"/>
</form>
</div>
</div>
<!--end give feedback-->

<!-- start script  forgot pass-->
<script>
function showchangepassword1()
{
document.querySelector(".changepassword1").classList.add("showchangepassword1");
}
function closechangepassword1(){
document.querySelector(".changepassword1").classList.remove("showchangepassword1");
}
</script>
<?php
if(isset($_POST['ForgotPassword1'])){
	$connect=mysqli_connect("localhost","root","","onlineshopy");
	if(!$connect)
	{
		die("could not connect mysql Databse".mysqli_error());
	}else{
		$mobno=$_POST['mobno'];
		$hint=$_POST['hint'];
		
		
		$cpquery="select *from  seller where mobno='$mobno' and hint='$hint'";
		$result=mysqli_query($connect,$cpquery)or die("could not execute query");
		$row2=mysqli_fetch_array($result);
		$dppwd=$row2['pwd'];
		if(mysqli_num_rows($result)==1)
				{
			   echo "<script>";
                echo"swal('ohh','your password is $dppwd','success')";
			    echo "</script>";
				}else{
				echo "<script>";
                echo"swal('Sorry!','password is not changed please check the details!','error')";
			    echo "</script>";
				}
			
	}
}

?>
<!-- end script forgot pass-->


<!-- end of Seller Signin  popup window-->
</body>
</html>
<?php
}
?>
