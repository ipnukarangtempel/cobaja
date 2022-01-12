<?php require_once('Connections/DBtur.php'); ?>
<?php
mysql_select_db($database_DBtur, $DBtur);
$query_Recordset1 = "SELECT ID_berita, tanggal, sinopsis, judul FROM berita ORDER BY tanggal ASC";
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
    <td height="97" colspan="12">&nbsp; <img src="images/atas.png" alt="o" width="1024" height="195"></td>
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
            <p align="center" class="judul"> INFO &amp; NEWS</p>
            <p align="center" class="judul">&nbsp;</p>
            <div align="center">
              <?php do { ?>
              <table width="72%" height="208" border="0" cellpadding="0" cellspacing="0">
                <tr> 
                  <td width="59%" class="isi"><strong><?php echo $row_Recordset1['judul']; ?> </strong><br> <?php echo $row_Recordset1['tanggal']; ?><br> </td>
                </tr>
                <tr> 
                  <td class="isi"> <p align="justify"><?php echo $row_Recordset1['sinopsis']; ?></p>
                    <p align="justify"></p>
                    <p align="justify"><a href="detail_news.php?tanggal=<?php echo $row_Recordset1['tanggal']; ?>">Lebih 
                      detail</a> </p>
                    <hr size="1"> 
                    <p>&nbsp;</p>
                    </td>
                </tr>
              </table>
              <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
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
mysql_free_result($Recordset1);
?>
