<?php 
	session_start();
	if(isset($_POST['logout'])) {
		$_SESSION['login'] = false;
		unset($_SESSION['login']);
	}
	if(isset($_SESSION['login']) && $_SESSION['login'] == true && $_SESSION['userType'] == 2) {
		// user allowed
	} else {
		header("Location: index.html");
	}
?>
<html>
<head>
	<title>Update Inventory</title>
	<link rel="stylesheet" href="style.css"/>
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
<?php $item = $_GET['item']; ?>
	<div class="fpage">
		<div class="phead">
			<h2>Select Weather Adding Inventory or Removing</h2>
		</div>
		<div class="block1" >	
			<a href="addQuantity.php?item=<?php echo $item; ?>"><button class="button" type="submit" name="Add">Add Inventory</button></a>
			</br>
			</br>
			<a href="removeQuantity.php?item=<?php echo $item;?>"><button class="button" type="submit" name="Remove">Remove Inventory</button></a>
		</div>
	</div>



</body>
</html>