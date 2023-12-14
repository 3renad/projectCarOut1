
<?php 
session_start();
include("config.php");
$error="";
$msg="";
$message="";
$messageempty="";
if(isset($_REQUEST['login']))
{
	$email=$_REQUEST['email'];
	$pass=$_REQUEST['Password'];
	
	
	if(!empty($email) && !empty($pass))
	{
		$sql = "SELECT * FROM user where email='$email' && password='$pass'";
		$result=mysqli_query($con, $sql);
		$row=mysqli_fetch_array($result);
		   if($row){
			   
				$_SESSION['id']=$row['id'];
				$_SESSION['email']=$email;
				header("location:index.php");
				
		   }
		   else{
			   $error = " <font color=red><p class='alert alert-warning'>Login Not Successfully</p> </font>";
		   }
	}else{
		$error = " <font color=red><p class='alert alert-warning'>Please Fill all the fields</p></font>";
	}
}
if(isset($_REQUEST['creat']))
{
$namee=$_REQUEST['namee'];
$emaiel=$_REQUEST['email'];
$passwored=$_REQUEST['Password'];

if(empty($name) || empty($email) || empty($password))
{
    $sql = "INSERT INTO user(name,email,password) VALUES('$namee','$emaiel','$passwored')";
    $result=mysqli_query($con, $sql);
            header("location:login.php");
}
else{
    $message="Error in create..";
  

}


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up from</title>
     <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <link rel="stylesheet" href="stylee.css">
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="post">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <div class="infield">
                    <input type="text" placeholder="Name" name="namee" />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="email" placeholder="Email" name="email"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password"  name="Password" />
                    <label></label>
                </div>
                
                <button type="submit"  value="creat" name="creat">Create</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form method="post">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
        <?php echo $error; ?><?php echo $msg; ?>
   <?php echo $message;?>
<?php echo  $messageempty;?>

                <span>or use your account</span>
                <div class="infield">
                    <input type="email" placeholder="Email" name="email"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" name="Password" />
                    <label></label>
                </div>
                <!-- <a href="#" class="forgot">Forgot your password?</a> -->
                <button  name="login" value="login" type="submit">Sing In</button>
            </form>
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button>Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button>Sign Up</button>
                </div>
            </div>
            <button id="overlayBtn"></button>
        </div>
    </div>


    <!-- js code -->
    <script>
        
  
        overlayBtn.addEventListener('click', ()=>{
          container.classList.toggle('right-panel-active');
  
          overlayBtn.classList.remove('btnScaled');
          window.requestAnimationFrame( ()=>{
            overlayBtn.classList.add('btnScaled');
          } )
        });
  
      </script>

</body>
</html>
