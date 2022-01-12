<?php require_once('Connections/DBtur.php'); ?>
<?php
$colname_Recordset1 = "1";
if (isset($HTTP_POST_VARS['Nama'])) {
  $colname_Recordset1 = (get_magic_quotes_gpc()) ? $HTTP_POST_VARS['Nama'] : addslashes($HTTP_POST_VARS['Nama']);
}
mysql_select_db($database_DBtur, $DBtur);
$query_Recordset1 = sprintf("SELECT * FROM paket_tur WHERE Deskripsi LIKE '%%%s%%'", $colname_Recordset1);
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
    <td height="97" colspan="12"> 
      <? include('include\atas.htm');?>
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
            <blockquote>
              <p align="left" class="judul"><strong><font face="Arial, Helvetica, sans-serif">HASIL 
                PENCARIAN </font></strong></p>
              <p align="left" class="judul">&nbsp;</p>
              <table width="60%" border="0" cellspacing="0" cellpadding="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="291" rowspan="2"><p class="isi"><strong><?php echo $row_Recordset1['Nama']; ?> 
                      <?php echo $row_Recordset1['Kode_paket']; ?><br>
                      </strong>Rp. <?php echo number_format(($row_Recordset1['Harga']), 2, ',', '.'); ?> 
                    </p>
                    <p class="isi"><?php echo $row_Recordset1['Deskripsi']; ?></p>
                    <p align="left"> <span class="isi"> </span></p></td>
                  <td width="157" height="22">&nbsp;</td>
                </tr>
                <tr>
                  <td height="107" valign="top" class="isi"> <font size="1" face="Arial, Helvetica, sans-serif">
                    <?php if (($row_Recordset1['gambar'] != "") && ($row_Recordset1['gambar'] != NULL)) 
							  {?>
                    <img name="foto_objek" src="images/paket/<?php echo $row_Recordset1['gambar']; ?>"> 
                    <?php } else {?>
                    <em><br>
                    Belum ada foto untuk paket tur ini..</em> 
                    <?php }?>
                    </font> </td>
                </tr>
              </table>
              <p align="left">&nbsp; </p>
              </blockquote></td>
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
mysql_free_result($Recordset1);
?>
