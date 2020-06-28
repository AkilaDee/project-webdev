<?php require_once("../db/db.php"); ?>
<!-- USer validate -->
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
	
	if(isset($_POST['del'])) {
		$sql = "DELETE FROM employee WHERE emp_id = {$_POST['del']};";
		if(mysqli_query($conn, $sql) === true) {
			header("Refersh:0");
		} else {
			echo "<script>alert('Failed to delete')</script>";
		}
	}
?>
<!-- end -user validate -->

<html>
<head>
    <link rel="stylesheet" href="tablecss.css"/>
	<title>Employee details</title>
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
			<td colspan="5"><h1>Employee Details</h1></td>
		</tr>
		<tr>
			<th>Employee ID</th>
			<th>Name</th>
			<th>Email(Login)</th>
			<th>Contact No</th>
			<th>Address</th>
			<th>Update Details</th>
			<th>Remove Emp</th>
		</tr>
		
		<?php
		
			$sql="select * from employee";
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($result)){
			echo "<tr>";
				echo "<td>".$row['emp_id']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "<td>".$row['address']."</td>";
				echo "<td>".$row['contactNo']."</td>";
				echo "<td><a href ='updateemp.php?emp_id=".$row['emp_id']."' > update </a> </td>";
				echo "<td><form method='post'><button type='submit' class='del-btn' name='del' value='{$row['emp_id']}'>Delete</button></form></td>";
				
				
			echo "</tr>";	
			}
		
	?>
		
	</table>
	
	
	
</body>
</html>