<?php
session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Union</title>
    <link href="style.css" rel="stylesheet">
    <link rel="icon" href="img/Union.png">
    <link href="https://fonts.googleapis.com/css?family=Lora|Open+Sans:300,400" rel="stylesheet">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="script.js" type="text/javascript"></script>
  </head>
  <body>
	<?php
		if(isset($_SESSION['username'])){
			echo "<script> startUser('".$_SESSION['username']."'); </script>";
		}
	?>
    <div id="header" class="container headerBar">
      <a href="index.php">
        <img id="headerImage" src="img/Union.png"/>
        <h1>Union</h1>
      </a>
      <p><a class="logInOrOut" href="index.php">Home</a></p>
    </div>
	  <div id="articleContainer" class="container">
      <div id="userContainer" class="article standardBox">
        <!--<h1 id="loginTitle" class="articleHeading" >User</h1>
        <a class="matrixIcon" onclick="showMatrix()">≡</a>
        <p id="mainArticleText" class="articleText"></p>-->
        <div id="userInfo">
          <p>Your page</p>
          <p class="smallerText"></p>
        </div>

        <div id="userMatrixContainer">
          <div class="axisLabels">
            <p style="left: 34px;top: -30px;">Rating Matrix</p>
            <p style="left: 50px;top: -38px; visibility: hidden;">Axis One</p>
            <p style="left: -110px;top: 47px;" class="rotatedOpposite">Libertatian - Authoritarian</p>
            <p style="left: 179px;top: 9px; visibility: hidden;" class="rotated">Axis Three</p>
            <p style="left: 50px;top: 122px;">Economic Left - Economic Right</p>
          </div>
          <table style="position: relative;left: 15px;">
            <tr>
              <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            </tr>
          </table>
        </div>


      </div>
    </div>
  </body>
</html>
