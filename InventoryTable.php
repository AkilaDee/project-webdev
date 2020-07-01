<?php require_once("../db/db.php"); ?>
<?php 
	session_start();
	if(isset($_POST['logout'])) {
		$_SESSION['login'] = false;
		unset($_SESSION['login']);
	}
	if(isset($_SESSION['login']) && $_SESSION['login'] ) {
		// user allowed
	} else {
		header("Location: index.html");
	}
?>

<html>
<head>
	<link rel="stylesheet" href="tablecss.css"/>
	<link rel="stylesheet" href="css/styleindex.css"/>
	<title>Inventory Table</title>
	<style>
	table {
	  border-collapse: collapse;
	  width: 100%;
	}

	th, td {
	  text-align: center;
	  padding: 8px;

	}

	tr:nth-child(even){background-color: #f2f2f2}

	th {
	  background-color: #4CAF50;
	  color: white;
}
	</style>
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
				<form action="" method='post'>
					<button name='logout' class="site-btn sb-c2">Logout</button>
				</form>
                    
                </div>
            </div>
		
	
</div>
</header>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>	
	<table  align="center">
		<tr>
			<td colspan="5"><h1>Inventory Table</h1></td>
		</tr>
		<tr>
			<th>Item ID</th>
			<th>Item Name</th>
			<th>Qunatity</th>
		</tr>
		
		<?php
		
			$sql="select * from inventory";
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row['item_id']."</td>";
				echo "<td>".$row['item_name']."</td>";
				echo "<td>".$row['quantity']."</td>";
				echo "</tr>";
			}
		
	?>
		
	</table>

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