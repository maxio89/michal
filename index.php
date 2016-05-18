<?php
 session_start();
 include "config.php";
 ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link href="arkusz.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class='menu'>
<<?php 
  if (isset($_SESSION['user_name'])) {

        echo "<a href=\"logout.php\"><span>Wyloguj</span></a>";
    }
    else {
    	echo "<a href=\"login.php\"><span>Zaloguj</span></a>";
    }

 ?>


<a href='towary.php'><span>Pokaż towary</span></a>
<a href="pytania.php"><span>Zadaj pytanie</span></a>
</div>
</body>


</html>