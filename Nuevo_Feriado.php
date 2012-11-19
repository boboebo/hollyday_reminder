<? session_start();?>
<html>
<head>
<title>Hollyday  Reminder - Nuevo Usuarios</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta mane="Diseño y Programación" valor="Ing. Agustin Neuman - Mayo de 2012">
<meta mane="Ultima Actualizacion" valor="Ing. Agustin Neuman - Mayo de 2012">
<link rel="stylesheet" type="text/css" href="anylinkmenu.css" />
<script type="text/javascript" src="menucontents.js"></script>
<script type="text/javascript" src="anylinkmenu.js"></script>
<script type="text/javascript" src="jquery/funciones.js"></script>
<script type='text/javascript' src='jquery/formexp.js'></script>
<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript" src="juery/jquery-ui-1.8.9.custom.min.js"></script>
<script language="JavaScript">
function submitForms()
 {if ( is_dia() && is_mes() && is_Descripcion() )
	return true;
	else 
	return false;
}

function is_dia() {
if (document.forms[0].dia.value == "" || document.forms[0].dia.value > 31) {
alert ("\n ¡¡ Debe Cargar el Dia Correcto!! .")
document.forms[0].dia.focus();
return false;
}
return true;
}
function is_mes() {
if (document.forms[0].mes.value == "" ||  document.forms[0].mes.value > 12 ) {
alert ("\n ¡¡ Debe Cargar el Mes Correcto !!.")
document.forms[0].mes.focus();
return false;
}
return true;
}
function is_Descripcion() {
if (document.forms[0].Descripcion.value == "") {
alert ("\n ¡¡ Debe Cargar una Descripcion para el Feriado !!.")
document.forms[0].Descripcion.focus();
return false;
}
return true;
}
</script>
<script type="text/javascript">
<!--
anylinkmenu.init("menuanchorclass")

<!-- 
function mo_in(src,fondoin) { 

if (!src.contains(event.fromElement)) { 
    src.style.cursor = 'hand';
	src.bgColor = fondoin; 
	} 
} 
function mo_out(src,fondout) { 
	if (!src.contains(event.toElement)) { 
	src.bgColor = fondout; 
	} 
} 
function link(src) {
    if(event.srcElement.tagName=='TD'){
	  document.location.href = src;
    }
	}
	
	  function mOvr(src,clrOver) {

    if (!src.contains(event.fromElement)) {
	  src.style.cursor = 'hand';
	  src.bgColor = '#000099';

	}
  }
</script>
<style type="text/css">
<!--
body {
	background-color: #EFEFEF;
}
-->
</style></head>

<script language="JavaScript">
function expandir(){
 if (document.forms[0].IdRol.value == 3){
	xDisplay('capaexpansion1', 'block');
 }
 else{
	xDisplay('capaexpansion1', 'none');
 }
}


</script>

<? 
include("estilos.php");
include("db_conexion.php");
con_mysql();
$BaseDatos = "1046514_hr"; 
?>
<body text="#000000" bgProperties=fixed  background="images/fondo1.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" link="#333333" vlink="#333333" alink="#333333" onLoad="MM_preloadImages('images/Botones/bot_NuevoUsuario2.jpg')">
<table width="1010" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="1029"> 
      <table width="1010" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td width="15" background="images/cuadro_izq.jpg" bgcolor="#D6DBCC">&nbsp;</td>
          <td width="980" align="center" valign="top" background="images/fondo2.jpg"> 
            <table width="911" border="0" cellpadding="0" cellspacing="0" bgcolor="#D6DBCC">
              <tr> 
                <td width="940" height="12" background="images/fondo2.jpg"></td>
              </tr>
              <tr valign="top"> 
                <td bgcolor="#FFFFFF" valign="top" align="center">
                  <table width="910" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td width="917" height="146" background="images/Header.jpg"> 
                        <div align="center"></div></td>
                    </tr>
                    
                    <td height="2" align="center" valign="top"> </td>
                    </tr>
                </table>                </td>
              </tr>
              <tr valign="top">
                <td bgcolor="#FFFFFF" valign="top" align="center"> 
                  <table width="911" border="0" cellpadding="0" cellspacing="0" bgcolor="#D6DBCC">
                    <tr background="images/borde.PNG"> 
					<td width="926" height="32"></td>
				  </tr>
                  <tr> 
                      <td align="center"></td>
                  </tr>
                    <tr>
                      <td align="center" height="315" valign="top"> 
                        <table width="881" border="0" cellspacing="0" cellpadding="0" height="20" align="center">
                          <tr> 
                            <td colspan="2" align="center" valign="top" bordercolor="#000000" bgcolor="#D6DBCC"><p><?
			if($_REQUEST['resultado']<>"")
			{
				if($_REQUEST['resultado']==1){$mensaje="¡¡ Se registraron los cambios !! <br>  ¡ Verifique !"; $colormensaje="#CC0000";};
				if($_REQUEST['resultado']==2){$mensaje="¡¡ Las Contraseñas no coinciden !!"; $colormensaje="#CC0000";};
				if($_REQUEST['resultado']==3){$mensaje="¡¡ xxx !! <br>  ¡ Verifique !"; $colormensaje="#006633";};
				
			?></p>
                        <table width="653" border="0" cellspacing="1" cellpadding="1">
                          <tr>
                            <td width="693" align="center" valign="middle"><font face="Arial, Helvetica, sans-serif" size="3"><b><font color="<?echo $colormensaje;?>"> <? echo $mensaje;?> </font></b></font></td>
                          </tr>
                        </table>
                        <?
			}
			?></td>
                          </tr>
                        </table>
                        <table width="905" border="0" cellspacing="0" cellpadding="0" bgcolor="#D6DBCC" height="273" align="center">
                          <tr bgcolor="#D6DBCC"> 
                            <td height="273"  valign="top"> 
                             
							 <!-- <table width="467" border="0" height="257" cellpadding="1" cellspacing="1" align="center" bgcolor="#F3F3F3"> -->
							 <? 
							 $idfer = $_REQUEST['idfer'];
							 $opcion = $_REQUEST['opcion'];
							 
							 $ssql= "select * from feriados where IdFeriado=$idfer ";
   							 $result = mysql_db_query($BaseDatos,$ssql);
								                 
							 $row=@mysql_fetch_array($result);
					    
								 $dia=$row['FeriadoDia'];
								 $mes=$row['FeriadoMes'];
								 $descripcion=$row['FeriadoDescripcion'];
								 
							?>
							 <form name="form1" method="post" action="ABM_Feriados.php?opcion=<? echo $opcion;?>"  onSubmit="return submitForms()">
                                <table width="539" border="0" height="147" cellpadding="1" cellspacing="1" align="center" bgcolor="#E1E1E1">
                                  <tr> 
                                    <td width="535" height="145" align="center" valign="top"> 
                                      <table width="547" border="0" cellpadding="1" cellspacing="1" height="143" bgcolor="#F3F3F3">
                                        <tr> 
                                          <td height="40" colspan="2" bgcolor="#D6DBCC"> 
                                            <div align="center"><font size="3" face="Verdana, Arial, Helvetica, sans-serif" color="#333333"><b><font size="4">Feriados</font></b></font></div></td>
                                        </tr>
                                        <tr> 
                                          <td width="133" height="31" bgcolor="#C4D9BD"> 
                                          <div align="right"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#666666">Dia :</font></strong></div></td>
                                          <td width="407" height="31" colspan="-1" bgcolor="#C4D9BD"> 
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                            <input type="text" name="dia" value="<? echo $dia;?>" size="15" maxlength="40" onKeyUp="form1.nombre.value=form1.nombre.value.toUpperCase();">
                                          <font size="1" color="#FF0000"><b>(*)</b></font></font></td>
                                        </tr>
										
										<tr> 
                                          <td width="133" height="31" bgcolor="#E8EFE4"> 
                                          <div align="right"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#666666">                                          Mes :</font></strong></div>                                          </td>
                                          <td width="407" height="31" colspan="-1" bgcolor="#E8EFE4"> 
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                            <input type="text" name="mes" value="<? echo $mes;?>" size="15" maxlength="40" onKeyUp="form1.nombre.value=form1.nombre.value.toUpperCase();">
                                          <font size="1" color="#FF0000"><b>(*)</b></font></font></td>
                                        </tr>
										
                                        <tr bgcolor="#C4D9BD"> 
                                          <td width="133" height="26" bgcolor="#C4D9BD"> 
                                          <div align="right"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#666666">Descripci&oacute;n : </font></strong></div>                                          </td>
                                          <td width="407" height="26" colspan="-1" bgcolor="#C4D9BD"> 
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                            <textarea name="Descripcion" id="texto" cols="30" rows="3" class="camposlogin"><? echo $descripcion;?></textarea>
                                            
                                            <input type="hidden" name="idfer" value="<? echo $idfer;?>">
                                          </font></td>
                                        </tr>
                                        <tr bgcolor="#E8EFE4">
                                          <td height="5" colspan="2" bgcolor="#E8EFE4"><div align="center"><font face="Arial, Helvetica, sans-serif" size="1" color="#666666">&nbsp;Los 
                                            Datos marcados con el s&iacute;mbolo<b> &quot;*&quot;</b>, son indispensables 
                                          para la ficha del Usuario</font></div></td>
                                        </tr>
                                        <tr bgcolor="#E8EFE4">
                                          <td height="6" colspan="2" bgcolor="#E8EFE4"><div align="center">
                                            <input name="Submit" type="image" src="images/bot_Aceptar1.jpg" width="124" height="24" border="0">
                                          </div></td>
                                        </tr>
                                    </table>                                    </td>
                                  </tr>
                                </table>
                                <div align="center">
                                  <p><a href="Feriados.php"><img src="images/BotonVolver.jpg" height="30" border="0"></a> 
                                  </p>
                                  <p><div align="center"><a href="Tablas.php"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">&lt;Volver&gt;</font></a></div></p>
                                </div>
                            </form>
							                             </td>
                          </tr>
						  
						   <!-- loco -->
                        </table>                      </td>
                    </tr>
                    <tr>
                      <td><? include("pie1.php");?></td>
                    </tr>
                  </table>                </td>
              </tr>
              <tr valign="top"> 
                <td bgcolor="#FFFFFF" valign="top" align="center"></td>
              </tr>
          </table>          </td>
          <td width="15" background="images/cuadro_der.jpg">&nbsp;</td>
        </tr>
      </table>    </td>
  </tr>
  <tr>
    <td align="center" height="119" width="1029" valign="top">&nbsp;</td>
  </tr>
</table>
</body>
</html>
