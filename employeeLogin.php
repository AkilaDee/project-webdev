<?php 
	session_start();
	if(isset($_POST['logout'])) {
		$_SESSION['login'] = false;
		unset($_SESSION['login']);
	}
	if(isset($_SESSION['login']) && $_SESSION['login'] == true && $_SESSION['userType'] == 2) {
	
	} else {
		header("Location:index.html");
	}
?>

<html>
<head>
	<title>Logged as Employee</title>
	<link rel="stylesheet" href="empcss.css"/>

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
			<li><a href="cont.php">Contact</a></li>
			
		</ul>
		<div class="header-btns">
                
                 <div class="dropdown">
				<form action="" method='post'>
					<button name='logout' class="site-btn sb-c2">Logout</button>
				</form>
                    
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
			<h2 style="font-size:40px; color:white;">Logged in As Employee</h2>
		</div>
		<div class="block2">	
		<table>
		<tr>
		<td><a href="cate.php"><button type="submit" class="button1">Update Inventory</button></a></td>
		<td><a href="InventoryTable.php"><button type="submit" class="button1">View Inventory</button></td>
		<td><a href="feedback.php"><button type="submit" class="button1">Feedbacks</button></a></td>
		</tr>
		</table>
		</div>
	</div>
	<footer class="footer-section">
    <div class="container">
        <div class="footer-img">
                <img src="img/logo.png" width="30%" height="30%" >
        </div>
        <div class="footer-nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="cont.html">Contact</a></li>
            </ul>
        </div>
        <div class="footer-copy">
            <p> &copy; 2020 - Colliers Menswear | All rights reserved.  </p>
        </div>
    </div>
  </footer>

</body>
</html>