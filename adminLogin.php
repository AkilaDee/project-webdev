<?php require_once("../db/db.php"); ?>
<?php 
	session_start();
	if(isset($_POST['logout'])) {
		$_SESSION['login'] = false;
		unset($_SESSION['login']);
	}
	if(isset($_SESSION['login']) && $_SESSION['login'] == true && $_SESSION['userType'] == 1) {
		// user allowed
	} else {
		header("Location: index.html");
	}
?>
<html>
<head>
	<title>Logged as Admin</title>
	<link rel="stylesheet" href="style.css"/>

	
	<link href="img/collier.png" rel="shortcut icon"/>
    <link rel="stylesheet" href="css/styleindex.css"/>
</head>



<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
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
				<form action="" method='post'>
					<button name='logout' class="site-btn sb-c2">Logout</button>
				</form>
                    
                </div>
			</div>
		</div>		
	</header>	
	
	<div class="fpage">
		<div class="phead">
			<h2 style="font-size:40px; color:white;">Logged in As Admin</h2>
		</div>
		<div class="block2">	
		<table>
		<tr>
		<td><a href="LogDet.php"><button type="submit" class="button1">View Log</button></td>
		<td><a href="InventoryTable.php"><button type="submit" class="button1">View Inventory</button></td>
		<td><a href="EmpDetTable.php"><button type="submit" class="button1">Employee Details</button></td>
		<td><a href="feedback.php"><button type="submit" class="button1">Feedbacks</button></td>
		</tr>
		</table>
		</div>
	</div>

</body>
</html>