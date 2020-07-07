<?php require_once("../db/db.php"); ?>
<?php 
	session_start();
	if(isset($_POST['logout'])) {
		$_SESSION['login'] = false;
		unset($_SESSION['login']);
	}
	if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
		// user allowed
	} else {
		header("Location: index.html");
	}
?>

<html>
<head>
    <link rel="stylesheet" href="tablecss.css"/>
	<title>Feedbacks</title>
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
			<td colspan="5"><h1>Feedbacks</h1></td>
		</tr>
		<tr>
			<th>User ID</th>
			<th>Name</th>
			<th>Last name</th>
			<th>E-mail</th>
			<th>Country</th>
			<th>Message</th>
		</tr>
		
		<?php
		
			$sql="select * from contact";
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($result)){
			echo "<tr>";
				
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['Name']."</td>";
				echo "<td>".$row['LastName']."</td>";
				echo "<td>".$row['Email']."</td>";
				echo "<td>".$row['Country']."</td>";
				echo "<td>".$row['Message']."</td>";
			echo "</tr>";	
			}
		
	?>
		
	</table>
	
	
	
</body>
</html>