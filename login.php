<?php
	session_start();
    include "config.php";

    function login() {
        echo "hello ".$_POST["login"];

        $user_login = $_POST['login'];
    $user_pass  = $_POST['haslo'];

    $sql = "SELECT * FROM dbtest.users WHERE login = '".$user_login."' AND haslo = '".$user_pass."';";
    $result = mysql_query($sql)
        or die(mysql_error());
        
    $rows = mysql_num_rows($result);
    
    if ($rows == 1) {
        
        $r = mysql_fetch_assoc($result);
        

        $_SESSION['user_name']   = $r['login'];
        // $_SESSION['user_rights'] = $r['user_rights'];
        
        header("Location: index.php");
    }
    else {
        echo "Podałeś błędny login lub hasło... <br> <a href=\"index.php\">Powrót</a>";
    }
    }

    if(isset($_POST['submit']))
{
   login();
}
 
  
   
        
        echo "
        <div class=\"center\">
            <div id=\"panel\">
                <form method=\"post\" action=\"login.php\">
                    <label for=\"login\">Nazwa użytkownika:</label>
                    <input required type=\"text\" id=\"login\" name=\"login\">
                    <label for=\"haslo\">Hasło:</label>
                    <input required type=\"password\" id=\"haslo\" name=\"haslo\">
                <div id=\"lower\">
                    <input type=\"submit\" value=\"Login\" name=\"submit\">
                </div>
                </form>
            </div>  
        </div>";
    

 
?>