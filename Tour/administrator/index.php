<html>
<head>
<title>halaman Administrasi</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
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
          <td width="128" height="21">&nbsp;</td>
          <td width="627">&nbsp;</td>
          <td width="214">&nbsp;</td>
        </tr>
        <tr> 
          <td height="294">&nbsp;</td>
          <td valign="top" class="blok"> <p align="center" class="judul">Login 
            </p>
            <blockquote> 
              <blockquote> 
                <blockquote> 
                  <p align="center" class="isi">(Masukkan user name dan password 
                    untuk administasi situs)</p>
                </blockquote>
              </blockquote>
            </blockquote>
            <form action="login.php" method="post" name="form1" onSubmit="MM_validateForm('user','','R','password','','R');return document.MM_returnValue">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <!--DWLayoutTable-->
                <tr> 
                  <td width="19%" height="46" class="isi"><div align="center">User</div></td>
                  <td colspan="2"> <input name="user" type="text" id="user"></td>
                </tr>
                <tr> 
                  <td height="46" class="isi"><div align="center">Password</div></td>
                  <td colspan="2"> <input name="password" type="password" id="password"></td>
                </tr>
                <tr> 
                  <td height="46" class="paragraf">&nbsp;</td>
                  <td width="12%"> <input name="Submit" type="submit" value="Login"></td>
                  <td width="69%"> </td>
                </tr>
              </table>
            </form>
            <p align="center">&nbsp;</p>
            <p>&nbsp;</p></td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td height="410">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
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
<?php
?>
</body>
</html>

