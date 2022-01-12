<?php require_once('../Connections/DBtur.php'); ?>
<?php
mysql_select_db($database_DBtur, $DBtur);
$query_Recordset1 = "SELECT UserName, Password FROM `user`";
$Recordset1 = mysql_query($query_Recordset1, $DBtur) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

if (($HTTP_POST_VARS['user'] != $row_Recordset1['UserName']) or ($HTTP_POST_VARS['password'] != $row_Recordset1['Password']))
{   
//header("Location: index.php?err=1");
echo "password atau user salah" ?>
<link href="CSS/contoh.css" rel="stylesheet" type="text/css">
 <span class="paragraf"><a href="index.php">Coba masukkan user dan password lagi</a> 
<?
	} 
else 
{
    
		session_start();
		session_register("user");
		$user = $row_Recordset1["UserName"];
		header("Location: admin.php?user=$user");
		
	}

mysql_free_result($Recordset1 );

?>
</span>