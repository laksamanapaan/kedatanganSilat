<?php require 'connections/connections.php'; ?>
<?php
	if(isset($_POST['adminLogin']))
	{
		$un=$_POST['adminUsername'];
		$pw=$_POST['adminPassword'];
		
		$result=$con->query("select * from admin where username='$un' AND password='$pw'");
		
		$row=$result->fetch_array(MYSQLI_BOTH);
		
		session_start();
		$_SESSION["adminYear"]=$row['adminYear'];
		
		header('location: mainPage.php');
		};
?>

<head>
<link href="css/main.css" rel="stylesheet" type="text/css"/>
<title>login page</title>
</head>

<body>
<div class="container">
	<div class="header"></div>
    <div class="firstColumn">
    	<form action="" method="post" name="loginForm">
        <div class="formLogin">
        	<div>Username: <input name="adminUsername" type="text" required/></div>
            <div>Password : <input name="adminPassword" type="password" required/></div>
            <div><input name="adminLogin" type="submit" value="login" /></div>
        </div>
        </form>
    </div>
    <div class="secondColumn"></div>
    <div class="footer"></div>
</div>
</body>
</html>
