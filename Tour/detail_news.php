<?php require_once('Connections/DBtur.php'); ?>
<?php
$colname_Qdetail = "1";
if (isset($HTTP_GET_VARS['tanggal'])) {
  $colname_Qdetail = (get_magic_quotes_gpc()) ? $HTTP_GET_VARS['tanggal'] : addslashes($HTTP_GET_VARS['tanggal']);
}
mysql_select_db($database_DBtur, $DBtur);
$query_Qdetail = sprintf("SELECT tanggal, judul, isi FROM berita WHERE tanggal = '%s'", $colname_Qdetail);
$Qdetail = mysql_query($query_Qdetail, $DBtur) or die(mysql_error());
$row_Qdetail = mysql_fetch_assoc($Qdetail);
$totalRows_Qdetail = mysql_num_rows($Qdetail);
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
    <td height="97" colspan="12"> 
      <? include('include/atas.htm');?>
      &nbsp; </td>
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
          <td rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr> 
                <td width="162" height="532" valign="top"> <?php include('include/menu.htm'); ?> &nbsp;</td>
              </tr>
              <tr> 
                <td height="19">&nbsp;</td>
              </tr>
            </table></td>
          <td height="533" valign="top" class="blok"> <p align="center">&nbsp;</p>
            <div align="center">
              <table width="69%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td width="59%" height="64" class="isi"> <p> <span class="judul"><?php echo $row_Qdetail['judul']; ?></span><br>
                      <?php echo $row_Qdetail['tanggal']; ?> </p>
                    <p>&nbsp; </p></td>
                </tr>
                <tr> 
                  <td class="isi"> <p align="justify"><?php echo $row_Qdetail['isi']; ?></p>
                    <p>&nbsp;</p></td>
                </tr>
              </table>
            </div>
            <p align="left" class="judul">&nbsp;</p>
            <p align="left" class="judul">&nbsp;</p>
            <p>&nbsp;</p></td>
        </tr>
        <tr>
          <td height="18"></td>
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
    <td height="0" colspan="12">

	</td>
  </tr>
  <tr> 
    <td height="1"> <img src="images/spacer.gif" width="28" height="1" alt=""></td>
    <td width="112"> <img src="images/spacer.gif" width="112" height="1" alt=""></td>
    <td width="30"> <img src="images/spacer.gif" width="30" height="1" alt=""></td>
    <td width="103"> <img src="images/spacer.gif" width="103" height="1" alt=""></td>
    <td width="32"> <img src="images/spacer.gif" width="32" height="1" alt=""></td>
    <td width="82"> <img src="images/spacer.gif" width="82" height="1" alt=""></td>
    <td width="45"> <img src="images/spacer.gif" width="45" height="1" alt=""></td>
    <td width="65"> <img src="images/spacer.gif" width="65" height="1" alt=""></td>
    <td width="92"> <img src="images/spacer.gif" width="92" height="1" alt=""></td>
    <td width="408"> <img src="images/spacer.gif" width="408" height="1" alt=""></td>
    <td> <img src="images/spacer.gif" width="2" height="1" alt=""></td>
    <td> <img src="images/spacer.gif" width="25" height="1" alt=""></td>
  </tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>
<?php
mysql_free_result($Qdetail);

mysql_free_result($Recordset1);
?>

