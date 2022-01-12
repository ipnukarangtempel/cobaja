<? include ('include/session.php'); ?>
<?php require_once('../Connections/DBtur.php'); ?>
<?php
$maxRows_Q1 = 10;
$pageNum_Q1 = 0;
if (isset($HTTP_GET_VARS['pageNum_Q1'])) {
  $pageNum_Q1 = $HTTP_GET_VARS['pageNum_Q1'];
}
$startRow_Q1 = $pageNum_Q1 * $maxRows_Q1;

mysql_select_db($database_DBtur, $DBtur);
$query_Q1 = "SELECT * FROM booking";
$query_limit_Q1 = sprintf("%s LIMIT %d, %d", $query_Q1, $startRow_Q1, $maxRows_Q1);
$Q1 = mysql_query($query_limit_Q1, $DBtur) or die(mysql_error());
$row_Q1 = mysql_fetch_assoc($Q1);

if (isset($HTTP_GET_VARS['totalRows_Q1'])) {
  $totalRows_Q1 = $HTTP_GET_VARS['totalRows_Q1'];
} else {
  $all_Q1 = mysql_query($query_Q1);
  $totalRows_Q1 = mysql_num_rows($all_Q1);
}
$totalPages_Q1 = ceil($totalRows_Q1/$maxRows_Q1)-1;
?>
<? 
/*  if(!session_is_registered($user))
{
echo("Maaf Anda Harus Login untuk masuk ke sini");
exit;
}
*/?> 
<html>
<head>
<title>for template</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript">
<!--
/***********************************************
* Switch Menu script- by Martial B of http://getElementById.com/
* Modified by Dynamic Drive for format & NS4/IE4 compatibility
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var persistmenu="yes" //"yes" or "no". Make sure each SPAN content contains an incrementing ID starting at 1 (id="sub1", id="sub2", etc)
var persisttype="sitewide" //enter "sitewide" for menu to persist across site, "local" for this page only

if (document.getElementById){ //DynamicDrive.com change
document.write('<style type="text/css">\n')
document.write('.submenu{display: none;}\n')
document.write('</style>\n')
}

function SwitchMenu(obj){
	if(document.getElementById){
	var el = document.getElementById(obj);
	var ar = document.getElementById("masterdiv").getElementsByTagName("span"); //DynamicDrive.com change
		if(el.style.display != "block"){ //DynamicDrive.com change
			for (var i=0; i<ar.length; i++){
				if (ar[i].className=="submenu") //DynamicDrive.com change
				ar[i].style.display = "none";
			}
			el.style.display = "block";
		}else{
			el.style.display = "none";
		}
	}
}

function get_cookie(Name) { 
var search = Name + "="
var returnvalue = "";
if (document.cookie.length > 0) {
offset = document.cookie.indexOf(search)
if (offset != -1) { 
offset += search.length
end = document.cookie.indexOf(";", offset);
if (end == -1) end = document.cookie.length;
returnvalue=unescape(document.cookie.substring(offset, end))
}
}
return returnvalue;
}

function onloadfunction(){
if (persistmenu=="yes"){
var cookiename=(persisttype=="sitewide")? "switchmenu" : window.location.pathname
var cookievalue=get_cookie(cookiename)
if (cookievalue!="")
document.getElementById(cookievalue).style.display="block"
}
}

function savemenustate(){
var inc=1, blockid=""
while (document.getElementById("sub"+inc)){
if (document.getElementById("sub"+inc).style.display=="block"){
blockid="sub"+inc
break
}
inc++
}
var cookiename=(persisttype=="sitewide")? "switchmenu" : window.location.pathname
var cookievalue=(persisttype=="sitewide")? blockid+";path=/" : blockid
document.cookie=cookiename+"="+cookievalue
}

if (window.addEventListener)
window.addEventListener("load", onloadfunction, false)
else if (window.attachEvent)
window.attachEvent("onload", onloadfunction)
else if (document.getElementById)
window.onload=onloadfunction

if (persistmenu=="yes" && document.getElementById)
window.onunload=savemenustate

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<link href="CSS/contoh.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (for template.psd) -->
<table id="Table_01" width="1043" height="721" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td height="97" colspan="11"> <?php include('../include/atas.htm') ?>&nbsp; </td>
  </tr>
  <tr> 
    <td width="31" height="1093">&nbsp;</td>
    <td colspan="9" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td width="156" height="33" >&nbsp;</td>
          <td width="813" >&nbsp;</td>
        </tr>
        <tr> 
          <td height="1047" valign="top" > <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr> 
                <td width="153" height="548" valign="top"> <?php include('include/menu_admin.php'); ?> </td>
                <td width="3">&nbsp;</td>
              </tr>
              <tr> 
                <td height="499">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <!--DWLayoutTable-->
            </table></td>
          <td valign="top" ><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr class="blok"> 
                <td width="29" height="32">&nbsp;</td>
                <td width="118">&nbsp;</td>
              </tr>
              <tr class="blok"> 
                <td height="59">&nbsp;</td>
                <td valign="top"> <div align="center" class="isi"> 
                    <p align="left" class="judul"><img src="images/icon_home.gif" width="21" height="22"> 
                      DATA RESERVASI</p>
                    <p align="left">&nbsp;</p>
                  </div></td>
              </tr>
              <tr class="blok"> 
                <td height="67">&nbsp;</td>
                <td valign="top">&nbsp; <table width="896" border="0" cellpadding="1" cellspacing="1">
                    <tr align="left" valign="top" bgcolor="#999999" class="isi"> 
                      <td height="18" width="5"> <div align="left">Kode</div></td>
                      <td width="51">Tanggal</td>
                      <td width="66"> <div align="left">Nama</div></td>
                      <td width="118"> <div align="left">Alamat</div></td>
                      <td width="68"> <div align="left">Email</div></td>
                      <td width="111"> <div align="left">Telepon</div></td>
                      <td width="15"> <div align="left">Paket</div></td>
                      <td width="5"> <div align="left">Jml _org</div></td>
                      <td width="154"> <div align="left">Note</div></td>
                    </tr>
                    <?php do { ?>
                    <tr align="left" valign="top" bgcolor="#CCCCCC" class="isi"> 
                      <td width="10"><?php echo $row_Q1['kode_booking']; ?></td>
                      <td> 
                        <?php  $tgl =date("d M Y",strtotime($row_Q1['tanggal'])); echo $tgl; ?>
                      </td>
                      <td><?php echo $row_Q1['nama']; ?></td>
                      <td><?php echo $row_Q1['alamat']; ?></td>
                      <td><?php echo $row_Q1['email']; ?></td>
                      <td><?php echo $row_Q1['telepon']; ?></td>
                      <td><?php echo $row_Q1['kode_paket']; ?></td>
                      <td><?php echo $row_Q1['jumlah_orang']; ?></td>
                      <td><?php echo $row_Q1['Note']; ?></td>
                    </tr>
                    <?php } while ($row_Q1 = mysql_fetch_assoc($Q1)); ?>
                  </table></td>
              </tr>
              <tr class="blok"> 
                <td height="902">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
        </tr>
      </table></td>
    <td width="46">&nbsp;</td>
  </tr>
  <tr> 
    <td height="0"></td>
    <td width="113"></td>
    <td width="78"></td>
    <td width="103"></td>
    <td width="78"></td>
    <td width="82"></td>
    <td width="78"></td>
    <td width="78"></td>
    <td width="92"></td>
    <td width="408"></td>
    <td></td>
  </tr>
  <tr> 
    <td height="1"> <img src="../images/spacer.gif" width="28" height="1" alt=""></td>
    <td> <img src="../images/spacer.gif" width="112" height="1" alt=""></td>
    <td> <img src="../images/spacer.gif" width="30" height="1" alt=""></td>
    <td> <img src="../images/spacer.gif" width="103" height="1" alt=""></td>
    <td> <img src="../images/spacer.gif" width="32" height="1" alt=""></td>
    <td> <img src="../images/spacer.gif" width="82" height="1" alt=""></td>
    <td> <img src="../images/spacer.gif" width="45" height="1" alt=""></td>
    <td> <img src="../images/spacer.gif" width="65" height="1" alt=""></td>
    <td> <img src="../images/spacer.gif" width="92" height="1" alt=""></td>
    <td> <img src="../images/spacer.gif" width="408" height="1" alt=""></td>
    <td> <img src="../images/spacer.gif" width="46" height="1" alt=""></td>
  </tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>
<?php
mysql_free_result($Q1);
?>



