<?php 
include("config.php");
$messge="";
$mm="";
if(isset($_POST['send']))
{
$first=$_POST['first'];
$last=$_POST['last'];
foreach($_POST['gender'] as $jend)
$ginder=$jend;
$Email_Addre=$_POST['emailaddress'];
$phone_number=$_POST['phone'];
$address=$_POST['address'];
$post_cose=$_POST['code'];
foreach($_POST['Branche'] as $burch)
$our_Branche=$burch;
$note=$_POST['note'];
if(!empty($first)&&!empty($last)&& !empty($ginder)&& !empty($Email_Addre)&& !empty($phone_number)&& !empty($address)&& !empty($post_cose)&& !empty($our_Branche)&& !empty($note)){
$messge=" <font color=blue size=5><p>ok : Your request has been send successfully ..</p></font>";

$sql = "INSERT INTO purchase VALUES('$first','$last','$ginder','$Email_Addre','$phone_number','$address','$post_cose','$our_Branche','$note')";
$result=mysqli_query($con, $sql);

}
else{
    $mm="<font color=red size=5><p>fields are not filled</p></font>";

}

}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title> Purchase Form</title>
</head>
<body>
    <!-- header section starts -->
    <header class="header">

        <div id="menu-btn" class="fa-solid fa-bars"></div>

        <a href="#" class="logo">Car<span>Out</span></a>

        <!-- navbar section -->
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="index.html">Vehicles</a>
            <a href="index.html">services</a>
            <a href="index.html">featured</a>
            <a href="index.html">reviews</a>
            <a href="index.html">contact</a>
        </nav>




    </header>

    <section class="ccc1">
    <?php echo "$messge";?>
    <?php echo "$mm";?>

        <div class="wrappp">

            <div class="title">
                Purchase Form
            </div>
            <div class="form">
            <form method="post">

               <div class="inputfield">
                  <label>First Name</label>
                  <input type="text" class="input" name="first">
               </div>
                <div class="inputfield">
                  <label>Last Name</label>
                  <input type="text" class="input" name="last">
               </div>

                <div class="inputfield">
                  <label>Gender</label>
                  <div class="custom_select">
                    <select name="gender[]">
                      <option value="">-</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
               </div>
                <div class="inputfield">
                  <label>Email Address</label>
                  <input type="text" class="input" name="emailaddress">
               </div>
              <div class="inputfield">
                  <label>Phone Number</label>
                  <input type="text" class="input" name="phone">
               </div>
              <div class="inputfield">
                  <label>Address</label>
                  <textarea class="textarea" name="address"></textarea>
               </div>
              <div class="inputfield">
                  <label>Postal Code</label>
                  <input type="text" class="input" name="code">
               </div>

              <div class="inputfield">
                <label>Our Branchesr</label>
                <div class="custom_select">
                  <select name="Branche[]">
                    <option value="">Branches</option>
                    <option value="Abha">Abha</option>
                    <option value="Dammam">Dammam</option>
                    <option value="Riyadh">Riyadh</option>
                    <option value="Tabuk">Tabuk</option>
                    <option value="Medina">Medina</option>
                  </select>
                </div>
              </div>
             <div class="inputfield">
                 <label>Note</label>
                 <textarea class="textarea" name="note"></textarea>
              </div>

             </div>
             <div class="inputfield">
                <input type="submit" value="SEND" name="send" class="btn">
</form>
              </div>
            </div>
        </div>
    </section>

    <!-- footer section starts -->
    <section class="footer">

        <div class="footer-box-container">

            <div class="box">
                <h3>our branches</h3>
                <a href="#"><i class="fa-solid fa-location-dot"></i> Kingdom of Saudi Arabia </a>
                <a href="#"><i class="fa-solid fa-location-dot"></i> The UAE</a>
                <a href="#"><i class="fa-solid fa-location-dot"></i> France</a>
                <a href="#"><i class="fa-solid fa-location-dot"></i> Australia</a>
                <a href="#"><i class="fa-solid fa-location-dot"></i> Russia</a>
            </div>



            <div class="box">
                <h3>quick links</h3>
                <a href="#"><i class="fa-solid fa-phone"></i> +966-456-7890</a>
                <a href="#"><i class="fa-solid fa-phone"></i> +966-222-3333</a>
                <a href="#"><i class="fa-solid fa-envelope"></i> carout@gmail.com</a>
                <a href="#"><i class="fa-solid fa-location-dot"></i> Al-Mudina, Saudi Arabia</a>
            </div>

            <div class="box">
                <h3>social media</h3>
                <a href="#"><i class="fa-brands fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fa-brands fa-instagram"></i> instagram</a>
                <a href="#"><i class="fa-brands fa-twitter"></i> twitter</a>

            </div>

        </div>


    </section>
    <!-- footer section end -->

    <!-- font awsome link -->
    <script src="https://kit.fontawesome.com/ca9a6c5a17.js" crossorigin="anonymous"></script>

    <!-- import javascript custome file -->
    <script src="js/script.js"></script>
</body>
</html>
