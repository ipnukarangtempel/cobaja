<?php require_once('Connections/DBtur.php'); ?>
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

if ((isset($HTTP_POST_VARS["MM_insert"])) && ($HTTP_POST_VARS["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO kontak (nama, alamat, email, komentar) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($HTTP_POST_VARS['nama'], "text"),
                       GetSQLValueString($HTTP_POST_VARS['alamat'], "text"),
                       GetSQLValueString($HTTP_POST_VARS['email'], "text"),
                       GetSQLValueString($HTTP_POST_VARS['komentar'], "text"));

  mysql_select_db($database_DBtur, $DBtur);
  $Result1 = mysql_query($insertSQL, $DBtur) or die(mysql_error());
    $insertGoTo = "kontak_sukses.php";
  if (isset($HTTP_SERVER_VARS['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $HTTP_SERVER_VARS['QUERY_STRING']; }
	 header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_DBtur, $DBtur);
$query_Recordset1 = "SELECT nama, alamat, email, komentar FROM kontak";
$Recordset1 = mysql_query($query_Recordset1, $DBtur) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<html>
<head>
<title>Tour &amp; travel services</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="CSS/contoh.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (for template.psd) -->
<table id="Table_01" width="1024" height="721" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td height="97" colspan="12">&nbsp; <img src="images/atas.png" alt="p" width="1024" height="195"></td>
  </tr>
  <tr> 
    <td width="28" height="38">&nbsp;</td>
    <td colspan="9" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td width="162" height="21">&nbsp;</td>
          <td width="807">&nbsp;</td>
        </tr>
        <tr> 
          <td height="890" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr> 
                <td width="162" height="890" valign="top"><?php include('include/menu.htm'); ?> &nbsp;</td>
              </tr>
            </table></td>
          <td valign="top" class="blok">
<p align="center" class="judul">&nbsp;</p>
            <p align="center" class="judul">Contact Us</p>
            <p align="center" class="judul">&nbsp;</p>
            <p align="center" class="isi">(Silahkan tulis Komentar, kritik, saran 
              atau info lebih jelas yang ingin anda peroleh dari kami )</p>
            <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
              <table align="center">
                <tr valign="baseline"> 
                  <td align="right" nowrap class="isi">Nama</td>
                  <td><input type="text" name="nama" value="" size="32"></td>
                </tr>
                <tr valign="baseline"> 
                  <td align="right" nowrap class="isi">Alamat</td>
                  <td><input type="text" name="alamat" value="" size="50]"></td>
                </tr>
                <tr valign="baseline"> 
                  <td align="right" nowrap class="isi">Email</td>
                  <td><input type="text" name="email" value="" size="30"></td>
                </tr>
                <tr valign="baseline"> 
                  <td align="right" valign="top" nowrap class="isi">Komentar</td>
                  <td> <textarea name="komentar" cols="50" rows="5"></textarea> 
                  </td>
                </tr>
                <tr valign="baseline"> 
                  <td align="right" nowrap class="isi">&nbsp;</td>
                  <td><input type="submit" value="Kirim"></td>
                </tr>
              </table>
              <input type="hidden" name="MM_insert" value="form1">
            </form>
            <p class="isi">&nbsp;</p>
            <p>&nbsp;</p></td>
          </tr>
      </table></td>
    <td width="2">&nbsp;</td>
    <td width="25" rowspan="2"><!--DWLayoutEmptyCell-->&nbsp; </td>
  </tr>
  <tr> 
    <td height="502">&nbsp;</td>
    <td> <img src="images/index_22.gif" width="2" height="21" alt=""></td>
  </tr>
  <tr> 
    <td height="0"></td>
    <td width="112"></td>
    <td width="30"></td>
    <td width="103"></td>
    <td width="32"></td>
    <td width="82"></td>
    <td width="45"></td>
    <td width="65"></td>
    <td width="92"></td>
    <td width="408"></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td height="1"> <img src="images/spacer.gif" width="28" height="1" alt=""></td>
    <td> <img src="images/spacer.gif" width="112" height="1" alt=""></td>
    <td> <img src="images/spacer.gif" width="30" height="1" alt=""></td>
    <td> <img src="images/spacer.gif" width="103" height="1" alt=""></td>
    <td> <img src="images/spacer.gif" width="32" height="1" alt=""></td>
    <td> <img src="images/spacer.gif" width="82" height="1" alt=""></td>
    <td> <img src="images/spacer.gif" width="45" height="1" alt=""></td>
    <td> <img src="images/spacer.gif" width="65" height="1" alt=""></td>
    <td> <img src="images/spacer.gif" width="92" height="1" alt=""></td>
    <td> <img src="images/spacer.gif" width="408" height="1" alt=""></td>
    <td> <img src="images/spacer.gif" width="2" height="1" alt=""></td>
    <td> <img src="images/spacer.gif" width="25" height="1" alt=""></td>
  </tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
