﻿<?php
//including the database connection file
include("config.php");
//getting id of the data from url
$id = $_GET['id'];
//deleting the row from table
$result = mysql_query("UPDATE m_gorla.towary SET status='zrealizowano' WHERE id=$id");
//redirecting to the display page (index.php in our case)
header("Location:towary.php");
?>