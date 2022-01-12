<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_DBtur = "localhost";
$database_DBtur = "dbtur";
$username_DBtur = "root";
$password_DBtur = "";
$DBtur = mysql_pconnect($hostname_DBtur, $username_DBtur, $password_DBtur) or die(mysql_error());
?>