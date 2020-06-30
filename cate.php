<?php 
	session_start();
	if(isset($_POST['logout'])) {
		$_SESSION['login'] = false;
		unset($_SESSION['login']);
	}
	if(isset($_SESSION['login']) && $_SESSION['login'] == true && $_SESSION['userType'] == 2) {
		// user allowed
	} else {
		header("Location:index.html");
	}
?>
<html>
<head>
   <title>Selecet product</title>
   <link rel="stylesheet" href="style.css"/>

   <link href="img/collier.png" rel="shortcut icon"/>
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
       <div class="header-btns">
	   
	   <div class="dropdown">
                    <a href="employeeLogin.php" class="site-btn sb-c2">Employee Home</a>
                </div>
                
       <div class="dropdown">
				<form action="" method='post'>
					<button name='logout' class="site-btn sb-c2">Logout</button>
				</form>
                    
                </div>
            </div>
       
    
 </div>
 
 </header>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
  

  <div class="fpage">
  <div class="phead">
  <h2 style="color:white;font-family:arial;">Select Product to Update 	Inventory</h2>
  </div>
  <table align="center">
                  <tr>
				  <td>
				  <div class="pblock">
                     <a href="update.php?item=tshirt">
                        <div >
                           <h4>T-shirt</h4>
                           <img class="box-img" src="Pics/tshirt.jpg" alt="" />
                        </div>
                     </a>
                  </div>
				  </td>
				  <td>
                  <div class="pblock">
                     <a href="update.php?item=denim">
                        <div>
                           <h4>Denim</h4>
                           <img class="box-img" src="Pics/denim.jpg" alt="" />
                        </div>
                     </a>
                  </div>
				  </td>
				  <td>
                  <div class="pblock">
                     <a href="update.php?item=shirt">
                        <div >
                           <h4>Shirt</h4>
                           <img class="box-img" src="Pics/shirt.jpg" alt="" />
                        </div>
                     </a>
                  </div>
				  </td>
				  <td>
                  <div class="pblock">
                     <a href="update.php?item=pant">
                        <div>
                           <h4>Pant</h4>
                           <img class="box-img" src="Pics/pant.jpg" alt="" />
                        </div>
                     </a>
                  </div>
				  </td>
				  </tr>
				  <tr>
				  <td>
                  <div class="pblock">
                     <a href="update.php?item=cap">
                        <div>
                           <h4>Cap</h4>
                           <img class="box-img" src="Pics/cap.jpg" alt="" />
                        </div>
                     </a>
                  </div>
				  </td>
				  <td>
                  <div class="pblock">
                     <a href="update.php?item=shorts">
                        <div >
                           <h4>Shorts</h4>
                           <img class="box-img" src="Pics/shorts.jpg" alt="" />
                        </div>
                     </a>
                  </div>
				  </td>
				  <td>
                  <div class="pblock">
                     <a href="update.php?item=sweater">
                        <div >
                           <h4>Sweater</h4>
                           <img class="box-img" src="Pics/sweater.jpg" alt="" />
                        </div>
                     </a>
                  </div>
				  </td>
				  <td>
                  <div class="pblock">
                     <a href="update.php?item=jercy">
                        <div>
                           <h4>Jercy</h4>
                           <img class="box-img" src="Pics/jercy.jpg" alt="" />
                        </div>
                     </a>
                  </div>
				  </td>
				  </tr>
		</div>

</body>
</html>