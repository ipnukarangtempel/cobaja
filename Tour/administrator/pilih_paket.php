<? include ('include/session.php'); ?>
<?php require_once('../Connections/DBtur.php'); ?>
<?php
mysql_select_db($database_DBtur, $DBtur);
$query_Recordset1 = "SELECT Kode_paket, Nama FROM paket_tur";
$Recordset1 = mysql_query($query_Recordset1, $DBtur) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);


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
<title>Tour</title>
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
<table id="Table_01" width="1024" height="721" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td height="97" colspan="12"><?php include('../include/atas.htm') ?>&nbsp; </td>
  </tr>
  <tr> 
    <td width="28" height="38">&nbsp;</td>
    <td colspan="9" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
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
                <td width="746">&nbsp;</td>
                <td width="38">&nbsp;</td>
              </tr>
              <tr class="blok"> 
                <td height="59">&nbsp;</td>
                <td valign="top"> <div align="center" class="isi"> 
                    <p align="left" class="judul"><img src="images/icon_home.gif" width="21" height="22"> 
                      PILIH DATA PAKET</p>
                    <p align="left">&nbsp;</p>
                  </div></td>
                <td>&nbsp;</td>
              </tr>
              <tr class="blok"> 
                <td height="580">&nbsp;</td>
                <td valign="top"> <form name="form1" method="post" action="detail_paket.php">
                    <p class="isi">Silahkan nama paket yang ingin dihapus dan 
                      lihat dulu detailnya.</p>
                    <p class="isi"> 
                      <select name="Kode_paket" id="Kode_paket" title="anu">
                        <?php
do {  
?>
                        <option value="<?php echo $row_Recordset1['Kode_paket']?>"><?php echo $row_Recordset1['Nama']?></option>
                        <?php
} while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
  $rows = mysql_num_rows($Recordset1);
  if($rows > 0) {
      mysql_data_seek($Recordset1, 0);
	  $row_Recordset1 = mysql_fetch_assoc($Recordset1);
  }
?>
                      </select>
                      <input type="submit" name="Submit" value="Lihat Detail">
                    </p>
                    <p class="isi"> </p>
                    <p class="isi"></p>
                    <p class="isi"></p>
                  </form>
                  <p>&nbsp;</p></td>
                <td>&nbsp;</td>
              </tr>
              <tr class="blok"> 
                <td height="389">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
        </tr>
      </table></td>
    <td width="2">&nbsp;</td>
    <td width="25" rowspan="2"><!--DWLayoutEmptyCell-->&nbsp; </td>
  </tr>
  <tr> 
    <td height="502">&nbsp;</td>
    <td> <img src="../images/index_22.gif" width="2" height="21" alt=""></td>
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
    <td> <img src="../images/spacer.gif" width="2" height="1" alt=""></td>
    <td> <img src="../images/spacer.gif" width="25" height="1" alt=""></td>
  </tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>



