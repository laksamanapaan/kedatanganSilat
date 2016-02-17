<?php require 'connections/connections.php'; ?>
<?php session_start();?>
<?php 
	if (isset($_SESSION['adminYear'])){
		}
		else{
			header('location:loginPage.php');
			}
?>
<?php
if (isset($_SESSION['addMemberBtn'])){
	$mname=$_POST['nameTxt'];
	$mnum=$_POST['matricNoTxt'];
	$college=$POST['collegeTxt'];
	$belt=$POST['beltRadio'];
	
	$sql=$con->query("insert into members (name, matricNumber, college, belt) values ('{$mname}','{$mnum}','{$college}','{$belt}')");
	}
?>
<head>
<link href="css/main.css" rel="stylesheet" type="text/css"/>
<title>main page</title>
</head>

<body>
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
    <div class="firstColumn"> 
    <form name="addMemberForm" method="post" action="">
    <div>Name: <input name="nameTxt" type="text" required/></div>
    <div>Matric no: <input name="matricNoTxt" type="text" required/></div>
    <div>College: <input name="collegeTxt" type="text" /></div>
    <div>Belt:
      <p>
        <label>
          <input type="radio" name="beltRadio" value="hitamMulus" id="beltRadio_0">
          hitam mulus</label>
        <br>
        <label>
          <input type="radio" name="beltRadio" value="awanPutih" id="beltRadio_1">
          awan putih</label>
        <br>
        <label>
          <input type="radio" name="beltRadio" value="pelangiHijau" id="beltRadio_2">
          pelangi hijau</label>
        <br>
        <label>
          <input type="radio" name="beltRadio" value="merah1" id="beltRadio_3">
          merah cula 1</label>
        <br>
        <label>
          <input type="radio" name="beltRadio" value="merah2" id="beltRadio_4">
          merah cula 2</label>
        <br>
        <label>
          <input type="radio" name="beltRadio" value="merah3" id="beltRadio_5">
          merah cula 3</label>
        <br>
        <label>
          <input type="radio" name="beltRadio" value="merah0" id="beltRadio_6">
          merah kosong</label>
        <br>
      </p>
      </div>
      <div><input name="addMemberBtn" type="submit" value="ADD"></div>
    </form>
    </div>
    <div class="secondColumn">
    </div>
    <div class="footer"></div>
</body>
</html>
