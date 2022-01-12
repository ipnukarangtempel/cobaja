<?php require_once('Connections/DBtur.php'); ?>
<?php
mysql_select_db($database_DBtur, $DBtur);
$query_Recordset1 = "SELECT * FROM paket_tur ORDER BY Kode_paket ASC";
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
    <td height="97" colspan="12"> <div align="center"><img src="images/atas.png" alt="D" width="1024" height="195">&nbsp; </div></td>
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
          <td height="943" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr> 
                <td width="162" height="640" valign="top"> <?php include('include/menu.htm'); ?> &nbsp;</td>
              </tr>
            </table></td>
          <td valign="top" class="blok"> <p align="center" class="judul"><br>
              DAFTAR PAKET CIPTOPRINT.COM <br>
              <span class="isi">(Harga bisa berubah sewaktu-waktu tanpa konfirmasi) 
              </span></p>
            <blockquote>
              <p align="center"> 
                <?php include('include/cari.htm'); ?>
              </div>
            </blockquote>
            <div align="center"> 
              <?php do { ?>
              <table width="88%" border="0" cellpadding="1" cellspacing="1">
                <!--DWLayoutTable-->
                <tr class="isi"> 
                  <td width="7" height="74"></td>
                  <td colspan="2" valign="top"><hr size="1"> <p><img src="images/bg_slider_3.jpg" alt="H" width="720" height="252"></p>
                    <div align="center"></div></td>
                  <td width="145"> </td>
                </tr>
                <tr class="isi">
                  <td height="1"></td>
                  <td width="326"></td>
                  <td width="219"></td>
                  <td></td>
                </tr>
                <tr class="isi"> 
                  <td height="75"></td>
                  <td valign="top"><p><strong><?php echo $row_Recordset1['Nama']; ?> 
                      (<?php echo $row_Recordset1['Kode_paket']; ?>) </strong><br>
                      Rp. <?php echo number_format(($row_Recordset1['Harga']), 2, ',', '.'); ?></p>
                    <?php echo $row_Recordset1['Deskripsi']; ?> </td>
                  <td valign="top"> 
                    <?php if (($row_Recordset1['gambar'] != "") && ($row_Recordset1['gambar'] != NULL)) 
							  {?>
                    <img name="foto_objek" src="images/paket/<?php echo $row_Recordset1['gambar']; ?>"> 
                    <?php } else {?>
                    <em><br>
                    Belum ada foto untuk paket ini..</em> 
                    <?php }?>                  </td>
                  <td>&nbsp;</td>
                </tr>
              </table>
              <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
              <blockquote>&nbsp;</blockquote>
            </div>
            <blockquote> 
              <p align="center">&nbsp; </p>
            </blockquote></td>
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
