<?php
	$db_host = "localhost";
    $db_user = "m.gorla";
    $db_pass = "12345";
    $db_base = "m_gorla";
    
    $db = mysql_connect($db_host, $db_user, $db_pass);
    mysql_select_db($db_base, $db);
    
    if (isset($_SESSION['user_id'])) {
        $user_id     = $_SESSION['user_id'];
        $user_name   = $_SESSION['user_name'];
        $user_email  = $_SESSION['user_email'];
        $user_rights = $_SESSION['user_rights'];
        $user_date   = $_SESSION['user_date'];
    }

    if(!mysql_select_db("m_gorla"))
{
     die('oops database selection problem ! --> '.mysql_error());
}

 ?>