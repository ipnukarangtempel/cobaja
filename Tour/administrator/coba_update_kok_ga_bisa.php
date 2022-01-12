<? include ('include/session.php'); ?>
<?php require_once('../Connections/DBtur.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $HTTP_SERVER_VARS['PHP_SELF'];
if (isset($HTTP_SERVER_VARS['QUERY_STRING'])) {
  $editFormAction .= "?" . $HTTP_SERVER_VARS['QUERY_STRING'];
}

if ((isset($HTTP_POST_VARS["MM_update"])) && ($HTTP_POST_VARS["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE paket_tur SET Nama=%s, Deskripsi=%s, Harga=%s WHERE Kode_paket=%s",
                       GetSQLValueString($HTTP_POST_VARS['Nama'], "text"),
                       GetSQLValueString($HTTP_POST_VARS['Deskripsi'], "text"),
                       GetSQLValueString($HTTP_POST_VARS['Harga'], "int"),
                       GetSQLValueString($HTTP_POST_VARS['Kode_paket'], "text"));

  mysql_select_db($database_DBtur, $DBtur);
  $Result1 = mysql_query($updateSQL, $DBtur) or die(mysql_error());

  $updateGoTo = "tambah_sukses.php";
  if (isset($HTTP_SERVER_VARS['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $HTTP_SERVER_VARS['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

mysql_select_db($database_DBtur, $DBtur);
$query_Recordset1 = "SELECT * FROM paket_tur";
$Recordset1 = mysql_query($query_Recordset1, $DBtur) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline"> 
      <td nowrap align="right">Kode_paket:</td>
      <td><?php echo $row_Recordset1['Kode_paket']; ?></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Nama:</td>
      <td><input type="text" name="Nama" value="<?php echo $row_Recordset1['Nama']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Deskripsi:</td>
      <td><input type="text" name="Deskripsi" value="<?php echo $row_Recordset1['Deskripsi']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Harga:</td>
      <td><input type="text" name="Harga" value="<?php echo $row_Recordset1['Harga']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Update Record"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="Kode_paket" value="<?php echo $row_Recordset1['Kode_paket']; ?>">
</form>
<p>&nbsp;</p>
  
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>

