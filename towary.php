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
<a href="index.php"><span>Home</span></a>

<?php 
  if (isset($_SESSION['user_name'])) {

        echo "<a href=\"logout.php\"><span>Wyloguj</span></a>";
    }
    else {
    	echo "<a href=\"login.php\"><span>Zaloguj</span></a>";
    }
    if(isset($_POST['submit']))
{
   szukaj();
}

echo "
        <div class=\"center\">
            <div id=\"panel\">
                <form method=\"post\" action=\"towary.php\">
                    <label for=\"nazwa\">Nazwa towaru:</label>
                    <input required type=\"text\" id=\"nazwa\" name=\"nazwa\">
                    
                <div id=\"lower\">
                    <input type=\"submit\" value=\"Szukaj\" name=\"submit\">
                </div>
                </form>
            </div>  
        </div>";

function szukaj() {
	$nazwa = $_POST['nazwa'];

 $sql = "SELECT * FROM dbtest.towary WHERE nazwa like '{$nazwa}%';";
    $result = mysql_query($sql)
        or die(mysql_error());
        $rows = mysql_num_rows($result);
     echo "<div class=\"towary\">";
   while($row = mysql_fetch_array($result)) {



        echo "<span>".$row['nazwa']."-".$row['status']."";	
		echo "<a href=\"realizuj.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Realizuj</a></span>";		

    }
     echo "</div>";


}

 
 ?>



</div>
</body>


</html>