<?php require 'connections/connections.php'; ?>
<?php session_start();?>
<?php 
	if (isset($_SESSION['adminYear'])){
		}
		else{
			header('location:loginPage.php');
			}
?>
<head>
<link href="css/main.css" rel="stylesheet" type="text/css"/>
<title>main page</title>
</head>

<body>
	<div class="header"></div>
    <div class="firstColumn">
    <div class="menu-wrap">
    <nav class="menu">
    	<ul class="clearfix"> 
         <li><a href="mainPage.php">MAIN PAGE</a></li>
         <li><a href="#">MEMBER</a>
         	<ul class="sub-menu">
            	<li><a href="addMemberPage.php">ADD MEMBER</a></li>
				<li><a href="displayMemberPage.php">DISPLAY MEMBER</a></li>
            </ul>
            </li>
         <li><a href="#">PROGRAM</a>
         	<ul class="sub-menu">
         <li><a href="addProgramPage.php">NEW PROGRAM</a></li>
         <li><a href="editProgramPage.php">EDIT PROGRAM</a></li>
         <li><a href="displayProgramPage.php">PROGRAM REPORT</a></li>
         </ul>
         </li>
         <li><a href="loginPage.php">LOG OUT</a></li>
         </ul>
         </nav>
    </div>
    </div>
    <div class="secondColumn"></div>
    <div class="footer"></div>
</body>
</html>
