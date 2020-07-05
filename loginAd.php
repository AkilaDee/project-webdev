<?php require_once("../db/db.php"); ?>

<?php
  session_start();
  // print_r($_POST);
  if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    
    $pass = md5($_POST['pass']);
   


    $sql = "SELECT * FROM admin WHERE email = '{$email}' AND password = '{$pass}';";
    $check = $conn->query($sql);
    if($check->num_rows == 1) {
      $_SESSION['login'] =true;
      $_SESSION['userType'] = 1;
      header("Location: adminLogin.php");
    } elseif($check->num_rows == 0) {
      $_SESSION['error'] = "User doesn't exists.";
    } else {
        die("Database Error.");
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <h1><center>Login as Admin</center></h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <style>
    @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
    * {
        color: #fff;
    }
    body {
        height:100%;
        background:url('img/back.jpg');
        background-size: cover;
        background-position: center;
        background-repeat:none;
    }
    
    .login {
        position: absolute;
        top:50%;
        left:50%;
        transform: translate(-50%,-40%); 
        width: 30%;  
        border:5px solid white;
        padding: 3%;     
        border-radius: 4px;
    }
    /* .login form {
        align-content:center;
        text-align:center;
    } */
    
    
    .login form > label, input {
          display:block;
    }
    .bottomline{
        /* margin-bottom:20px; */
    }
    .underline{
        border:none;
        /* border-bottom:2px solid green;  */
        background-color:transparent;

    }
    .button{
        width:40%;
        margin-top:50px;
        padding:5px;
        font-size:20px;
        text-align:center;
        border: 3px solid white;
        background-color:transparent;

    }
    .logi{
        width:100%;
        overflow:hidden;
        font-size:30px;
        padding:8px 0;
        margin:8px 0;
        border-bottom: 2px solid white;
    }
    .logi i{
        width: 100px;
        float:left;
        text-align:center;
    }
    . logi input{
        border:none;
        outline:none;
        background:none;
        color:white;
        font-size:30px;
        width:80%;
        float:left;
        margin:0 10px;
    }
    </style>
    <link rel="stylesheet" href="css/styleindex.css"/>
</head>
<body>
<header class="header-section">
    
	<a href="index.html" class="site-logo">
		<img src="img/logo.png" alt="logo">
	</a>
  
	<div class="header-right">
		<ul class="main-menu">
			<li><a href="index.html">Home</a></li>
			<li><a href="about.html">About us</a></li>
			<li><a href="cont.html">Contact</a></li>
			
		</ul>	
	
    </div>

</header>
    <div class="login">
    <center>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
               <img src="img/collier.png "  width ="60%" >
                <div class="logi">
                    <i class="fas fa-envelope"></i>
                    <input type="email" style="font-size:20px;" placeholder="Email" required name="email" class="bottomline underline">
                </div>
                <br>
                <div class="logi">
                     <i class="fas fa-lock"></i>
                     <input type="password" style="font-size:20px;" placeholder="password" required name="pass" class="bottomline underline"> 
                     
                </div>     
                <div>
                    <?php
                        if(isset($_SESSION['error'])) {
                            echo $_SESSION['error'];
							unset($_SESSION['error']);
                        }
                    ?>
                </div>
                <input type="submit" name="submit" class="button" value="Login">
                
        </form>
    </center>
    </div>
    
</body>
</html>