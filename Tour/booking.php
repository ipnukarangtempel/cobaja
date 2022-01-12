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

if ((isset($HTTP_POST_VARS["MM_insert"])) && ($HTTP_POST_VARS["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO booking (tanggal,nama,alamat, email, telepon, kode_paket, jumlah_orang, Note) VALUES (%s,%s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($HTTP_POST_VARS['tanggal'], "date"),
					   GetSQLValueString($HTTP_POST_VARS['nama'], "text"),
					   GetSQLValueString($HTTP_POST_VARS['alamat'], "text"),
                       GetSQLValueString($HTTP_POST_VARS['email'], "text"),
                       GetSQLValueString($HTTP_POST_VARS['telepon'], "text"),
                       GetSQLValueString($HTTP_POST_VARS['kode_paket'], "text"),
                       GetSQLValueString($HTTP_POST_VARS['jumlah_orang'], "int"),
                       GetSQLValueString($HTTP_POST_VARS['Note'], "text"));

  mysql_select_db($database_DBtur, $DBtur);
  $Result1 = mysql_query($insertSQL, $DBtur) or die(mysql_error());
  $insertGoTo = "booking_sukses.php";
  if (isset($HTTP_SERVER_VARS['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $HTTP_SERVER_VARS['QUERY_STRING']; }
	 header(sprintf("Location: %s", $insertGoTo));
}



mysql_select_db($database_DBtur, $DBtur);
$query_Recordset1 = "SELECT * FROM booking";
$Recordset1 = mysql_query($query_Recordset1, $DBtur) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_DBtur, $DBtur);
$query_Recordset2 = "SELECT Kode_paket, Nama FROM paket_tur";
$Recordset2 = mysql_query($query_Recordset2, $DBtur) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);
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
    <td height="97" colspan="12">&nbsp; <img src="images/atas.png" alt="F" width="1024" height="195"></td>
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
          <td rowspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr> 
                <td width="162" height="1357" valign="top"><?php include('include/menu.htm'); ?> &nbsp;</td>
              </tr>
            </table></td>
          <td height="50" valign="top" class="blok"> <p align="center"><span class="judul"><br>
              </span></p>
            <p align="center"><span class="judul"> Reservasi Paket</span>            </p>
            <p>&nbsp;</p></td>
          </tr>
        <tr>
          <td height="1"></td>
        </tr>
        <tr> 
          <td height="1306" valign="top" class="blok"><div align="right">&nbsp; 
            </div>
            <form method="post" name="form2" action="<?php echo $editFormAction; ?>">
              <div align="left"> 
                <table align="center">
                  <tr valign="baseline"> 
                    <td align="right" nowrap class="isi"> <div align="left">Nama:</div></td>
                    <td><input type="text" name="nama" value="" size="32"></td>
                  </tr>
                  <tr valign="baseline"> 
                    <td align="right" nowrap class="isi"> <div align="left">Alamat:</div></td>
                    <td><input type="text" name="alamat" value="" size="50"></td>
                  </tr>
                  <tr valign="baseline"> 
                    <td align="right" nowrap class="isi"> <div align="left">Email:</div></td>
                    <td><input type="text" name="email" value="" size="32"></td>
                  </tr>
                  <tr valign="baseline"> 
                    <td align="right" nowrap class="isi"> <div align="left">Telepon:</div></td>
                    <td><input type="text" name="telepon" value="" size="15"></td>
                  </tr>
                  <tr valign="baseline"> 
                    <td align="right" nowrap class="isi"> <div align="left">Nama 
                        Paket :</div></td>
                    <td> <select name="kode_paket">
                        <?php 
do {  
?>
                        <option value="<?php echo $row_Recordset2['Kode_paket']?>" <?php if (!(strcmp($row_Recordset2['Kode_paket'], $row_Recordset1['kode_paket']))) {echo "SELECTED";} ?>><?php echo $row_Recordset2['Nama']?></option>
                        <?php
} while ($row_Recordset2 = mysql_fetch_assoc($Recordset2));
?>
                      </select> </td>
                  <tr> 
                  <tr valign="baseline"> 
                    <td align="right" nowrap class="isi"> <div align="left">Jumlah 
                        orang:</div></td>
                    <td><input type="text" name="jumlah_orang" value="" size="3"></td>
                  </tr>
                  <tr valign="baseline"> 
                    <td align="right" valign="top" nowrap class="isi"> <div align="left">Note:</div></td>
                    <td> <textarea name="Note" cols="50" rows="5"></textarea> 
                    </td>
                  </tr>
                  <tr valign="baseline"> 
                    <td nowrap align="right">&nbsp;</td>
                    <td><input type="submit" value="Pesan"></td>
                  </tr>
                </table>
                <input type="hidden" name="MM_insert" value="form2">
                <input name="tanggal" type="hidden" id="tanggal" value="<? include('include/waktu_skrg.php') ;?>">
              </div>
            </form>
            <p align="left">&nbsp;</p></td>
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

mysql_free_result($Recordset2);
?>
