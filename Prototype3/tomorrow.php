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
  <body onLoad="start()">
    <div id="header" class="container headerBar">
      <a href="index.php">
        <img id="headerImage" src="img/Union.png"/>
        <h1>Union</h1>
      </a>
	  <?php
	    if(isset($_SESSION['username'])){
			echo '<p><a id="user" style="visibility: visible" href="user.html">'.$_SESSION["username"].'</a><a class="logInOrOut" href="logout.php">Log Out</a></p>';
		} else {
			echo '<p><a id="user" style="visibility: hidden" href="user.html">User</a><a class="logInOrOut" href="login.php">Log In</a></p>';
		}
		?>
    </div>
	  <div id="articleContainer" class="container">
      <div id="mainArticle" class="article standardBox">
        <h1 id="mainArticleTitle" class="articleHeading" ></h1>
        <a class="matrixIcon clicked" onclick="showMatrix()">▦</a>
        <p id="mainArticleText" class="articleText"></p>
      </div>
      <div id="sub1Article" class="article standardBox" style="left:300px;top:-400px;">
        <h1 id="sub1ArticleTitle" class="articleHeading"></h1>
        <p id="sub1ArticleText" class="articleText"></p>
      </div>
      <div id="sub2Article" class="article standardBox" style="left:-300px;top:-830px">
        <h1 id="sub2ArticleTitle" class="articleHeading"></h1>
        <p id="sub2ArticleText" class="articleText"></p>
      </div>
      <div id="matrixContainer" class="standardBox" style="left:27px;top:-1230px">
        <div class="arrow-up"></div>

        <div class="axisLabels">
          <p style="left: 45px;top: -30px;">Rating Matrix</p>
          <p style="left: 50px;top: -38px; visibility: hidden;">Axis One</p>
          <p style="left: -110px;top: 47px;" class="rotatedOpposite">Libertatian - Authoritarian</p>
          <p style="left: 179px;top: 9px; visibility: hidden;" class="rotated">Axis Three</p>
          <p style="left: 50px;top: 122px;">Economic Left - Economic Right</p>
        </div>
        <table style="position: relative;left: 15px;">
          <tr>
            <td onclick="choose(this, 0, 0)"></td>
            <td onclick="choose(this, 0, 1)"></td>
            <td onclick="choose(this, 0, 2)"></td>
            <td onclick="choose(this, 0, 3)"></td>
            <td onclick="choose(this, 0, 4)"></td>
            <td onclick="choose(this, 0, 5)"></td>
            <td onclick="choose(this, 0, 6)"></td>
            <td onclick="choose(this, 0, 7)"></td>
            <td onclick="choose(this, 0, 8)"></td>
            <td onclick="choose(this, 0, 9)"></td>
          </tr>
          <tr>
            <td onclick="choose(this, 1, 0)"></td>
            <td onclick="choose(this, 1, 1)"></td>
            <td onclick="choose(this, 1, 2)"></td>
            <td onclick="choose(this, 1, 3)"></td>
            <td onclick="choose(this, 1, 4)"></td>
            <td onclick="choose(this, 1, 5)"></td>
            <td onclick="choose(this, 1, 6)"></td>
            <td onclick="choose(this, 1, 7)"></td>
            <td onclick="choose(this, 1, 8)"></td>
            <td onclick="choose(this, 1, 9)"></td>
          </tr>
          <tr>
            <td onclick="choose(this, 2, 0)"></td>
            <td onclick="choose(this, 2, 1)"></td>
            <td onclick="choose(this, 2, 2)"></td>
            <td onclick="choose(this, 2, 3)"></td>
            <td onclick="choose(this, 2, 4)"></td>
            <td onclick="choose(this, 2, 5)"></td>
            <td onclick="choose(this, 2, 6)"></td>
            <td onclick="choose(this, 2, 7)"></td>
            <td onclick="choose(this, 2, 8)"></td>
            <td onclick="choose(this, 2, 9)"></td>
          </tr>
          <tr>
            <td onclick="choose(this, 3, 0)"></td>
            <td onclick="choose(this, 3, 1)"></td>
            <td onclick="choose(this, 3, 2)"></td>
            <td onclick="choose(this, 3, 3)"></td>
            <td onclick="choose(this, 3, 4)"></td>
            <td onclick="choose(this, 3, 5)"></td>
            <td onclick="choose(this, 3, 6)"></td>
            <td onclick="choose(this, 3, 7)"></td>
            <td onclick="choose(this, 3, 8)"></td>
            <td onclick="choose(this, 3, 9)"></td>
          </tr>
          <tr>
            <td onclick="choose(this, 4, 0)"></td>
            <td onclick="choose(this, 4, 1)"></td>
            <td onclick="choose(this, 4, 2)"></td>
            <td onclick="choose(this, 4, 3)"></td>
            <td onclick="choose(this, 4, 4)"></td>
            <td onclick="choose(this, 4, 5)"></td>
            <td onclick="choose(this, 4, 6)"></td>
            <td onclick="choose(this, 4, 7)"></td>
            <td onclick="choose(this, 4, 8)"></td>
            <td onclick="choose(this, 4, 9)"></td>
          </tr>
          <tr>
            <td onclick="choose(this, 5, 0)"></td>
            <td onclick="choose(this, 5, 1)"></td>
            <td onclick="choose(this, 5, 2)"></td>
            <td onclick="choose(this, 5, 3)"></td>
            <td onclick="choose(this, 5, 4)"></td>
            <td onclick="choose(this, 5, 5)"></td>
            <td onclick="choose(this, 5, 6)"></td>
            <td onclick="choose(this, 5, 7)"></td>
            <td onclick="choose(this, 5, 8)"></td>
            <td onclick="choose(this, 5, 9)"></td>
          </tr>
          <tr>
            <td onclick="choose(this, 6, 0)"></td>
            <td onclick="choose(this, 6, 1)"></td>
            <td onclick="choose(this, 6, 2)"></td>
            <td onclick="choose(this, 6, 3)"></td>
            <td onclick="choose(this, 6, 4)"></td>
            <td onclick="choose(this, 6, 5)"></td>
            <td onclick="choose(this, 6, 6)"></td>
            <td onclick="choose(this, 6, 7)"></td>
            <td onclick="choose(this, 6, 8)"></td>
            <td onclick="choose(this, 6, 9)"></td>
          </tr>
          <tr>
            <td onclick="choose(this, 7, 0)"></td>
            <td onclick="choose(this, 7, 1)"></td>
            <td onclick="choose(this, 7, 2)"></td>
            <td onclick="choose(this, 7, 3)"></td>
            <td onclick="choose(this, 7, 4)"></td>
            <td onclick="choose(this, 7, 5)"></td>
            <td onclick="choose(this, 7, 6)"></td>
            <td onclick="choose(this, 7, 7)"></td>
            <td onclick="choose(this, 7, 8)"></td>
            <td onclick="choose(this, 7, 9)"></td>
          </tr>
          <tr>
            <td onclick="choose(this, 8, 0)"></td>
            <td onclick="choose(this, 8, 1)"></td>
            <td onclick="choose(this, 8, 2)"></td>
            <td onclick="choose(this, 8, 3)"></td>
            <td onclick="choose(this, 8, 4)"></td>
            <td onclick="choose(this, 8, 5)"></td>
            <td onclick="choose(this, 8, 6)"></td>
            <td onclick="choose(this, 8, 7)"></td>
            <td onclick="choose(this, 8, 8)"></td>
            <td onclick="choose(this, 8, 9)"></td>
          </tr>
          <tr>
            <td onclick="choose(this, 9, 0)"></td>
            <td onclick="choose(this, 9, 1)"></td>
            <td onclick="choose(this, 9, 2)"></td>
            <td onclick="choose(this, 9, 3)"></td>
            <td onclick="choose(this, 9, 4)"></td>
            <td onclick="choose(this, 9, 5)"></td>
            <td onclick="choose(this, 9, 6)"></td>
            <td onclick="choose(this, 9, 7)"></td>
            <td onclick="choose(this, 9, 8)"></td>
            <td onclick="choose(this, 9, 9)"></td>
          </tr>
          </tr>
        </table>


      </div>
    </div>

    <div id="dateSwitcherContainer" class="container">
      <div id="dateDisplay" class="standardBox">
        <p>
          <a href="index.php">◀</a>
          <a class="date">2/5/2016</a>
          <a href="tomorrow.php">▶</a>
        </p>
      </div>
    </div>

    <div id="discussionContainer" class="container headerBar">
      <div id="discussionHeader">
        <h1>Discussion</h1>
      </div>
      <div id="newComment" class="discussion standardBox">
        <p class="username"><a href="">Comment</a></p><input id="commentInput" type="text" placeHolder="Add a comment here"/><p id="clock" class="clockStarting">00:00:00</p>
      </div>
    </div>
  </body>
</html>
