<?php require_once("../db/db.php"); ?>

<?php
  session_start();
  
  if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contactno = $_POST['contactno'];
    $email = $_POST['email'];
    $psw = md5($_POST['psw']);


    $sql = "SELECT * FROM employee WHERE email = '{$email}';";
    $check = $conn->query($sql);
    if($check->num_rows == 0) {
      $sql = "INSERT INTO employee (`name`, `email`, `address`, `ContactNo`, `password`) VALUES('{$name}', '{$email}','{$address}', {$contactno}, '{$psw}' );";
      if($conn->query($sql) === TRUE) {	
        $_SESSION['success'] == "Login Successfull.";
		 echo "<script>alert('Registered Succesfully Please Login.')</script>";
        header("Location: login.php");
      }
    } else {
      echo "<script>alert('Email already exists.')</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>

    <style>
      * {box-sizing: border-box}

        /* Add padding to containers */
        .container {
        padding: 16px;
        }
      
        /* Full-width input fields */
        input[type=text], input[type=password] {
        width: 100%;
        padding: 10px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
        }



        /* Overwrite default styles of hr */
        hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
        }

        /* Set a style for the submit/register button */
        .registerbtn {
        background-color:#af0808 ;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 40%;
        opacity: 0.9;
        font-size:23px;
        }
        

        .registerbtn:hover {
        opacity:1;
        }

        /* Add a blue text color to links */
        a {
        color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
       
        text-align: center;
        }

    </style>
    	<link rel="stylesheet" href="css/register.css"/>

</head>

<header class="header-section">
    
        <a href="index.html" class="site-logo">
            <img src="img/logo.png" width="90%" height="90%" alt="logo">
        </a>
      
        <div class="header-right">
            <ul class="main-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="cont.php">Contact</a></li>
                
            </ul>
            <div class="header-btns">
                <div class="dropdown">
                        <a href="#" class="site-btn sb-c1">Login</a>
                            <div class="dropdown-content">
                                <a href="login.php">Employee</a>
                                <a href="loginAd.php">Admin</a>
                            </div>
                </div>
                <div class="dropdown">
                    <a href="register.php" class="site-btn sb-c2">Register</a>
                </div>
            </div>
        
    </div>
    
</header>

<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div class="container">
   <center> <p class="para">Register</p>
    <p class="paraone">Please fill in this form to create an account.</p> </center>
    <hr>
    <label for="name"><b><font color="white">Name</font></b></label>
    <input type="text" placeholder="Enter full name" name="name" required>

    <label for="email"><b><font color="white">Email</font></b></label>
    <input type="text" placeholder="Enter Email" name="email" required>


    <label for="email"><b><font color="white">Address</font></b></label>
    <input type="text" placeholder="Enter Address" name="address" required>

    <label for="email"><b><font color="white">Contact Number</font></b></label>
    <input type="text" placeholder="Enter Contact numper" name="contactno" required>

    
    <label for="psw"><b><font color="white">Password</font></b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b><font color="white">Confirm password</font></b></label>
    <input type="password" placeholder="Confirm Password" name="psw-repeat" required>
    <span style="color: red;">
      <?php 
        if(isset($_SESSION['error'])) {
          echo $_SESSION['error'];
		  
        }    
      ?>
    </span>
    <hr>

   <center> <button type="submit" class="registerbtn" align="center" name="submit">Register</button></center>
  </div>

  <div class="signin">
    <p><font color="white">Already Have an account?</font> <a href="login.php">Sign in</a>.</p>
  </div>
</form>
</body>
</html>
