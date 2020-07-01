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
    <link rel="stylesheet" href="tablecss.css"/>
	<title>Production Log Table</title>
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

	<table  align="center">
		<tr>
			<td colspan="5"><h1>Product Log Details</h1></td>
		</tr>
		<tr>
			<th>Log ID</th>
			<th>Item Name</th>
			<th>Date</th>
			<th>Activity</th>
			
		</tr>
		
		<?php
		
			$sql="select * from log";
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row['log_id']."</td>";
				echo "<td>".$row['item_name']."</td>";
				echo "<td>".$row['date']."</td>";
				echo "<td>".$row['log']."</td>";
				
				echo "</tr>";
			}
		
	?>
		
	</table>
	
	
	
</body>
</html>