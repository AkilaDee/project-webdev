<?php
    require_once("../db/db.php");
?>
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
	<title>Add Inventory</title>
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
	<div class="fpage">
		<div class="phead">
			<h2>Select Quantity to Add</h2>
        </div>
        <form action="<?php echo ("{$_SERVER['PHP_SELF']}?item={$_GET['item']}"); ?>" method="post">	
            <div class="block2">
                <table>
                    <tr>
                        <td style="color:white;"><label for="quantity"><b>Enter The Quantity:-  </b></label></td>
                        <td><input type="number" name="quantity" size="25px" required></td>
                    </tr>
                   
            
                </table>
            </br>
        <button type="submit" class="button1" name="submit">ADD</button>
        </form>
        <div style="color: green;">
        <?php 
            if(isset($_POST['submit'])) {
                $sql = "INSERT INTO  log (`item_name`, `date`, `log`) VALUES('{$_GET['item']}', '" . date("Y-m-d") . "', {$_POST['quantity']});";
                if($conn-> query($sql) === TRUE) {
                    $sql = "SELECT quantity FROM inventory WHERE item_name = '{$_GET['item']}';";
                    $query = $conn->query($sql);
                    if($query->num_rows == 0 ) {
                        $conn->query("INSERT INTO inventory (item_name, quantity) VALUES('{$_GET['item']}', {$_POST['quantity']});");
                    } else {
                        $sql = "SELECT quantity FROM inventory WHERE item_name = '{$_GET['item']}';";
                        $query = $conn->query($sql);
                        $result = $query->fetch_assoc();
                        $sql = "UPDATE inventory SET quantity = {$result['quantity']} + {$_POST['quantity']} WHERE item_name = '{$_GET['item']}';";
                        if($conn->query($sql) === FALSE) {
                            die();
                         }
                        }
                    }
                    $result = $query->fetch_assoc();
                    
                    $sql = "UPDATE inventory SET quantity = {$result['quantity']} + {$_POST['quantity']} WHERE 'item_name' = '{$_GET['item']}';";
                    if($conn->query($sql) === TRUE) {
                        echo "<script>alert('Inventory Added');</script>";
                    }
                }
        ?>
        </div>
		</div>
	</div>

</body>
</html>