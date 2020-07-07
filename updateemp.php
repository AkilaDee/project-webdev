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
?>
<?php
if(isset($_GET['emp_id'])){
$sql1 = "SELECT * FROM employee WHERE emp_id =".$_GET['emp_id'];
$result = mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($result);
if($result){


}
//echo "Sucessfull";
else{
echo "failed";	
}

}

if(isset($_POST['update'])){
	$sql2 = "UPDATE employee SET emp_id='".$_POST['ep_id']."',name='".$_POST['nme']."', email='".$_POST['eail']."', address='".$_POST['adress']."', contactNo='".$_POST['cno']."' WHERE emp_id ='".$_POST['ep_id']."'";   
$result2 = mysqli_query($conn,$sql2);

$sql3 = "SELECT * FROM employee WHERE emp_id ='".$_POST['ep_id']."'";
$result3 = mysqli_query($conn,$sql3);
$row=mysqli_fetch_assoc($result3);
echo "<script> alert('Updated Sucessfully') </script>";
header("Location: EmpDetTable.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Update Employee</title>
	 <link rel="stylesheet" href="tablecss.css"/>
	 <link href="img/collier.png" rel="shortcut icon"/>
    <link rel="stylesheet" href="css/styleindex.css"/>
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
	  background-color: #00ffff;
	  color: black;
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


		<table>
		<tr>
			<th>Employee ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Contact</th>

		</tr>
		<form action='updateemp.php' method ='POST'>
			<tr>
			<?php 
			echo "<td><input type = 'text' name='ep_id' required readonly value =".$row['emp_id']."></td>";
			echo "<td><input type = 'text' name='nme' required value =".$row['name']."></td>";
			echo "<td><input type = 'text' name='eail' required value =".$row['email']."></td>";
			echo "<td><input type = 'text' name='adress' required value =".$row['address']." ></td>";
			echo "<td><input type = 'text' name='cno' required value =".$row['contactNo']."></td>";
			?>
		</tr>
		<tr>
			<td colspan=5><br><br></td>
		</tr>
		<br>
		<tr>
			
			<td colspan =5><input type='submit' value="update" name='update' class="button"></td>
		</tr>
		
		</form>
	</table>
	
</body>
</html>