<html>
<head>
<title>Hollyday  Reminder - Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="anylinkmenu.css" />
<script type="text/javascript" src="menucontents.js"></script>
<script type="text/javascript" src="anylinkmenu.js"></script>
<script type="text/javascript">
anylinkmenu.init("menuanchorclass")
</script>
<script language="JavaScript">
function submitForms()
 {if ( is_usuario() && is_contrasena())
	return true;
	else 
	return false;
}
function is_usuario() {
if (document.forms[0].usuario.value == "") {
alert ("\n ¡¡ Debe Ingresar el USUARIO para acceder al Sistema !!.")
document.forms[0].usuario.focus();
return false;
}
return true;
}
function is_contrasena() {
if (document.forms[0].contrasena.value == "") {
alert ("\n ¡¡ Debe Cargar el PASSWORD del Usuario para ingresar al Sistema !!.")
document.forms[0].contrasena.focus();
return false;
}
return true;
}
</script>
<style type="text/css">
<!--
body {
	background-color: #EFEFEF;
}
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 24px;
}
.Estilo2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #8E9C72;
}
.Estilo4 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
}
.Estilo5 {font-size: 12px}
-->
</style></head>
<?  //include("foto_top.php");
include("estilos.php");?>
<body onLoad="document.forms[0].usuario.focus()" text="#000000" bgProperties=fixed  background="images/fondo1.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" link="#333333" vlink="#333333" alink="#333333">
<table width="1010" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EFEFEF">
  <tr bgcolor="#EFEFEF">
    <td width="1029"> 
      <table width="966" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EFEFEF">
        <tr bgcolor="#EFEFEF">
          <td width="4" background="images/cuadro_izq.jpg">&nbsp;</td>
          <td width="958" align="center" valign="top" background="images/fondo2.jpg"> 
            <table width="958" height="473" border="0" cellpadding="0" cellspacing="0" bgcolor="#EFEFEF">
             
              <tr bgcolor="#EFEFEF">
                <td align="center" valign="top">
                  <table width="940" border="0" cellpadding="0" cellspacing="0" bgcolor="#EFEFEF">
                    <tr> 
                      <td height="10"></td>
                    </tr>
                    <tr> 
                      <td height="8" align="center" valign="top" background="images/fondo2.jpg"></td>
                    </tr>
                    <tr bgcolor="#EFEFEF"> 
                      <td height="134" align="center" valign="top"> 
                        <table width="940" height="134" border="0" cellpadding="0" cellspacing="0" bgcolor="#EFEFEF">
                          <tr> 
                            <td align="center" valign="top" bgcolor="#EFEFEF"> 
                              <table width="940" border="0" cellspacing="0" cellpadding="0">
                                
                                <tr bgcolor="#EFEFEF"> 
                                  <td height="101" background="images/BannerPrincipal/linea_ver1.png">&nbsp;</td>
                                  <td height="282" align="center" valign="middle"> 
                                    <table width="910" border="0" cellspacing="0" cellpadding="0" height="541">
									  <tr>
									    <td height="151" colspan="3" background="images/Header.jpg">&nbsp;</td>
									  </tr>
									  <tr>
									    <td height="32" colspan="3" background="images/borde.PNG">&nbsp;</td>
									  </tr>
									  <tr> 
                      <td colspan="2" align="center" valign="top" bordercolor="#000000" bgcolor="#D6DBCC"><p><?
			if($_REQUEST['resultado']<>"")
			{
				if($_REQUEST['resultado']==1){$mensaje="¡¡ El USUARIO ingresado no existe o la CLAVE es incorrecta !! <br>  ¡ Verifique !"; $colormensaje="#CC0000";};
				if($_REQUEST['resultado']==2){$mensaje="¡¡ El USUARIO ingresado No esta Habilitado a trabajar en el Sistema !!"; $colormensaje="#CC0000";};
				if($_REQUEST['resultado']==3){$mensaje="¡¡ El USUARIO se registro correctamente !! <br>  ¡ Verifique !"; $colormensaje="#006633";};
				if($_REQUEST['resultado']==4){$mensaje="¡¡ El USUARIO ya existe en el Sistema !!"; $colormensaje="#CC0000";};
				if($_REQUEST['resultado']==5){$mensaje="¡¡ Error en el insert del registro. Intente nuevamente !!"; $colormensaje="#CC0000";};
			?></p>
                        <table width="653" border="0" cellspacing="1" cellpadding="1">
                          <tr>
                            <td width="693" align="center" valign="middle"><font face="Arial, Helvetica, sans-serif" size="3"><b><font color="<?echo $colormensaje;?>"> <?echo $mensaje;?> </font></b></font></td>
                          </tr>
                        </table>
                        <?
			}
			?></td>
					  <td width="284" rowspan="4" align="center" valign="top" bordercolor="#000000" bgcolor="#D6DBCC">
										
										<table width="282" border="0" cellpadding="1" cellspacing="1" height="363" align="center" bgcolor="#CCCCCC">
										  <form name="form1" id="form1" autocomplete="off" method="post" action="validar.php" onSubmit="return submitForms()">
										    <tr bgcolor="#D6DBCC"> 
										      <td height="361" align="center" valign="middle"><table width="280" height="352" border="0" cellpadding="0" cellspacing="0" bgcolor="#F8F8F8">
                                                <tr>
                                                  <td height="55" align="center">&nbsp;</td>
                                                  <td width="54" height="55" align="center" background="images/03.png">&nbsp;</td>
                                                  <td width="110" align="center">&nbsp;</td>
                                                </tr>
												<tr>
                                                  <td colspan="3" height="40" align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="3" color="#0033FF"><b><font color="#0066CC" size="2"><i><font color="#006699">Informaci&oacute;n 
                                                    de Cuenta de Acceso</font></i></font></b></font></td>
                                                </tr>
                                                <tr bgcolor="#EDEDE9">
                                                  <td height="34" align="right"><font color="#666666" face="Verdana, Arial, Helvetica, sans-serif" size="2">Usuario 
                                                    :</font></td>
                                                  <td height="34" colspan="2"><input type="text" name="usuario" size="10" maxlength="20">                                                  </td>
                                                </tr>
                                                <tr bgcolor="#EDEDE9" valign="middle">
                                                  <td height="34" align="right"><p><font color="#666666" face="Verdana, Arial, Helvetica, sans-serif" size="2">Password 
                                                    :</font></p></td>
                                                  <td height="34" colspan="2"><p>
                                                      <input type="password" name="contrasena" size="10" maxlength="20">
                                                  </p></td>
                                                </tr>
                                                <tr>
                                                  <td colspan="3" height="39" valign="middle" align="center"><input type="submit" name="Submit" value="Autenticarse">                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td height="150" colspan="3" align="center" valign="middle" bgcolor="#F8F8F8"><p class="Estilo2 Estilo5"><a href="Nuevo_Usuario.php"><strong>Registrarse</strong></a></p>
                                                    <p>&nbsp;</p>
                                                    <p>&nbsp;</p>
                                                    <p>&nbsp;</p></td>
                                                </tr>
                                              </table></td>
                              </tr>
										    </form>
                                        </table></td>
									  </tr>
                                      <tr bgcolor="#D6DBCC"> 
                                        <td width="124" rowspan="2" align="center" valign="middle" background="images/spectacles.gif">&nbsp;</td>
                                        <td width="527" height="90" align="center" valign="middle" bgcolor="#D6DBCC"><span class="Estilo1">Hollyday 
                                          Remainder</span></td>
                                      </tr>
                                      <tr>
                                        <td height="160" align="center" valign="middle" bordercolor="#D6DBCC"><p><span class="Estilo2">Text</span></p></td>
                                      </tr>
                                      <tr bgcolor="#D6DBCC">
                                        <td height="31" align="center" valign="middle" background="images/Page-BgTexture.jpg">&nbsp;</td>
                                        <td height="31" align="center" valign="middle" background="images/Page-BgTexture.jpg"><span class="Estilo4">Text</span></td>
                                      </tr>
                                  </table>                                  </td>
                                  <td height="101" background="images/BannerPrincipal/linea_ver1.png">&nbsp;</td>
                                </tr>
                            </table>							  </td>
                          </tr>
                      </table>						</td>
                    </tr>
                </table>			    </td>
              </tr>
          </table>          </td>
          <td width="10" background="images/cuadro_der.jpg">&nbsp;</td>
        </tr>
    </table>    </td>
  </tr>
  <tr>
    <td align="center" height="119" width="1029" valign="top"> 
      <? include("pie1.php");?>    </td>
  </tr>
</table>
</body>
</html>
