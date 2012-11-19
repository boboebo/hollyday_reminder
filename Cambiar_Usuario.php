<? include("seguridad.php");?>
<html>
<head>
<title>Hollyday  Reminder - Cambiar Usuario</title>
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
 {if ( is_id_usuario() && is_nombre() && is_usuario() && is_clave() && is_clave2())
	return true;
	else 
	return false;
}
function is_id_usuario() {
if (document.forms[0].id_usuario.value == "") {
alert ("\n ¡¡ Debe Cargar el Número del Usuario !!.")
document.forms[0].id_usuario.focus();
return false;
}
return true;
}
function is_nombre() {
if (document.forms[0].nombre.value == "") {
alert ("\n ¡¡ Debe Cargar el Nombre del Usuario !! .")
document.forms[0].nombre.focus();
return false;
}
return true;
}
function is_usuario() {
if (document.forms[0].usuario.value == "") {
alert ("\n ¡¡ Debe Cargar el Usuario de Sistema !!.")
document.forms[0].usuario.focus();
return false;
}
return true;
}
function is_clave() {
if (document.forms[0].clave.value == "") {
alert ("\n ¡¡ Debe Cargar el Password del Usuario para ingresar al Sistema !!.")
document.forms[0].clave.focus();
return false;
}
return true;
}
function is_clave2() {
if (document.forms[0].clave2.value != document.forms[0].clave.value ) {
alert ("\n ¡¡ Los Passwords ingresados no son iguales !!.")
document.forms[0].clave2.focus();
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
</head>

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

<? include("estilos.php");?>
<body bgcolor="#FFFFFF" text="#000000" bgProperties=fixed  background="images/fondo1.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" link="#333333" vlink="#333333" alink="#333333" onLoad="MM_preloadImages('images/Botones/bot_NuevoUsuario2.jpg')">
<table width="1010" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="1029"> 
      <table width="1010" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td width="15" background="images/cuadro_izq.jpg">&nbsp;</td>
          <td width="980" align="center" valign="top" background="images/fondo2.jpg"> 
            <table width="958" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td height="12" background="images/fondo2.jpg"></td>
              </tr>
              <tr valign="top"> 
                <td bgcolor="#FFFFFF" valign="top" align="center">
                  <table width="940" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td height="10"></td>
                    </tr>
                    <tr> 
                      <td height="50" align="center" valign="top" background="images/fondo_botonnera1.jpg"> 
                        <?  ?>                      </td>
                    </tr>
                    <tr> 
                      <td height="10" align="center" valign="top"></td>
                    </tr>
                    <td align="center" valign="top"> </td>
                    </tr>
                  </table>                </td>
              </tr>
              <tr valign="top">
                <td bgcolor="#FFFFFF" valign="top" align="center"> 
                  <table width="940" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
					<td height="15" background="images/fondo_fris1.png"></td>
				  </tr>
                  <tr> 
                      <td align="center"></td>
                  </tr>
                    <tr>
                      <td align="center" height="315" valign="top"> 
                       <?
						$id_usuario=$_REQUEST['id_usuario'];
						$ssql= "select * from usuarios where id_usuario=".$id_usuario."" ;  
						$result = mysql_db_query($BaseDatos,$ssql);
						
							while($row=mysql_fetch_array($result))
							{
						?>
							 <table width="881" border="0" cellspacing="0" cellpadding="0" height="20" align="center">
                          <tr> 
                            <td width="259">&nbsp;</td>
                            <td width="200" align="center">&nbsp;</td>
                            <td width="233">&nbsp;</td>
                          </tr>
                        </table>
                        <table width="905" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" height="260" align="center">
                          <tr> 
                            <td height="350" bgcolor="#FFFFFF"  valign="top"> 
                              <form name="form1" method="post" action="ABM_Usuarios.php?Opcion=2"  onSubmit="return submitForms()">
                                <table width="451" border="0" height="257" cellpadding="1" cellspacing="1" align="center" bgcolor="#E1E1E1">
                                  <tr> 
                                    <td align="center" valign="top"> 
                                      <table width="450" border="0" cellpadding="1" cellspacing="1" height="323" bgcolor="#F3F3F3">
                                        <tr valign="bottom"> 
                                          <td height="49" colspan="2" bgcolor="#CCCCCC"> 
                                            <div align="center"><font size="3" face="Verdana, Arial, Helvetica, sans-serif" color="#333333"><b><font size="4">Cambiar Datos del
                                          Usuario</font></b></font></div></td>
                                        </tr>
                                        <tr valign="bottom">
                                          <td height="10" colspan="2" nowrap bgcolor="#FFFFFF"><div align="center"><b><font face="Arial, Helvetica, sans-serif" color="#990000" size="2">Ficha 
                                          del Usuario</font></b></div></td>
                                        </tr>
                                        <tr> 
                                          <td width="127" height="25" bgcolor="#FFFFFF"> 
                                            <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#666666">Nombre 
                                          Completo :</font></div>                                          </td>
                                          <td width="316" height="25" colspan="-1" bgcolor="#FFFFFF"> 
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                            <input type="text" name="nombre" size="30" maxlength="40" onKeyUp="form1.nombre.value=form1.nombre.value.toUpperCase();" value="<? echo $row["nombre"]; ?>">
                                          <font size="1" color="#FF0000"><b>(*)</b></font></font></td>
                                        </tr>
                                        <tr> 
                                          <td width="127" height="25" bgcolor="#FFFFFF"> 
                                          <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#666666">Usuario:</font></div>                                          </td>
                                          <td width="316" height="25" colspan="-1" bgcolor="#FFFFFF"> 
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="2">                                            </font> <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                            <input type="text" name="usuario" size="10" maxlength="10" value="<? echo $row["usuario"]; ?>">
                                          <font size="1" color="#FF0000"><b>(*)</b></font></font>                                          </td>
                                        </tr>
                                        <tr> 
                                          <td width="127" height="25" bgcolor="#FFFFFF"> 
                                          <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#666666">Password:</font></div>                                          </td>
                                          <td width="316" height="25" colspan="-1" bgcolor="#FFFFFF"> 
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                            <input type="password" name="clave" size="20" maxlength="20" value="<? echo $row["clave"]; ?>">
                                          <font size="1" color="#FF0000"><b>(*)</b></font></font></td>
                                        </tr>
                                        <tr> 
                                          <td width="127" height="25" bgcolor="#FFFFFF"> 
                                            <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#666666">Repita 
                                          el Password:</font></div>                                          </td>
                                          <td width="316" height="25" colspan="-1" bgcolor="#FFFFFF"> 
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                            <input type="password" name="clave2" size="20" maxlength="20" value="<? echo $row["clave"]; ?>">
                                          <font size="1" color="#FF0000"><b>(*)</b></font></font></td>
                                        </tr>
                                        <tr> 
                                          <td width="127" height="12" bgcolor="#FFFFFF"> 
                                            <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#666666">Rol 
                                          / Perfil :</font></div>                                          </td>
                                          <td width="316" height="12" colspan="-1" bgcolor="#FFFFFF"> 
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                            <select class=campos3 name="IdRol" size="1" onChange="expandir()">
                                              <?
				//********* Roles *************
				$ssql_roles = "select * from Roles";  
				$result_roles = mysql_db_query($BaseDatos,$ssql_roles);
				while($row_roles=mysql_fetch_array($result_roles))
				{
				?>
                                              <option value="<?echo $row_roles["IdRol"];?>" <? if($row["IdRol"]==$row_roles["IdRol"]){echo "selected";}?> > 
                                              <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                              <? echo $row_roles["Rol"];?>                                              </font> </option>
                                              <?
				}
				?>
                                            </select>
                                            </font>
											
										   <div id="capaexpansion1" style="display: <? if ($row["IdRol"]==3) echo "block"; else echo "none"?>" align="left">
										   <table width="258">
										   <tr>
										      <td>
										        <div align="left">
										          <?
												//mysql_data_seek($result_rol, 0);
												$ssql_dis = "select * from  Disciplinas";  
												$result_dis = mysql_db_query($BaseDatos,$ssql_dis);
												
												 while($row_dis=mysql_fetch_array($result_dis))
												 {
													 $disciplina=$row_dis["IdDisciplina"];
													 $var_ok=0;
													 $ssql_roles = "select * from UsuDisciplinas where IdDisciplina= $disciplina and id_usuario=$id_usuario";  
													 $result_roles = mysql_db_query($BaseDatos,$ssql_roles);
													 $num_registros = mysql_num_rows($result_roles);
													 if($num_registros<>0)$var_ok=1;
													 ?>
													 
													  <input type="checkbox" name="<? echo "D".$row_dis["IdDisciplina"];?>" value="1" <? if ($var_ok==1) echo "checked";?>>
													  <font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#666666"><? echo "  ".$row_dis["DisciplinaNombre"];?></font>	
													  <?   echo "<br>"; 
											     }?>
										            </div></td></tr>
										   </table>
										  </div>										  </td>
                                        </tr>
                                        <tr> 
                                          <td width="127" height="30" bgcolor="#FFFFFF"> 
                                            <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#666666">Tel&eacute;fono 
                                          :</font></div>                                          </td>
                                          <td height="30" colspan="1" bgcolor="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                            <input type="text" name="telefono" size="10" maxlength="10" value="<?echo $row["telefono"]; ?>">
                                          </font> </td>
                                        </tr>
                                        <tr> 
                                          <td width="127" height="18" bgcolor="#FFFFFF"> 
                                          <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#666666">E-Mail:</font></div>                                          </td>
                                          <td width="316" height="18" colspan="-1" bgcolor="#FFFFFF"> 
                                            <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
                                            <input type="text" name="email" size="30" maxlength="40" value="<?echo $row["email"]; ?>">
                                            <input type="hidden" name="fechahora" value="<? echo Date("d/m/Y  H:i:s");?>">
                                            <input type="hidden" name="id_usuario" value=<? echo $row["id_usuario"];?>>
                                          </font></td>
                                        </tr>
                                        <tr>
                                          <td height="8" colspan="2" bgcolor="#FFFFFF"><div align="center"><font face="Arial, Helvetica, sans-serif" size="1" color="#666666">&nbsp;&nbsp;Los 
                                            Datos marcados con el s&iacute;mbolo<b> &quot;*&quot;</b>, son indispensables 
                                          para la ficha del Usuario</font></div></td>
                                        </tr>
                                        <tr>
                                          <td height="26" colspan="2"><div align="center">
                                            <input name="Submit" type="image" src="images/bot_Aceptar1.jpg" width="124" height="24" border="0">
                                          </div></td>
                                        </tr>
                                      </table>                                    </td>
                                  </tr>
                                </table>
                                <div align="center">
                                  <p><a href="Usuarios.php?usuario_buscado=<? echo $_REQUEST['usuario_buscado'];?>"><img src="images/BotonVolver.jpg" height="30" border="0"></a>                                  </p>
                                </div>
                              </form>                            </td>
                          </tr>
                        </table>
						<?
						}
					mysql_free_result($result);
					?>                      </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                  </table>                </td>
              </tr>
              <tr valign="top"> 
                <td bgcolor="#FFFFFF" valign="top" align="center"></td>
              </tr>
              <tr> 
                <td height="12" background="images/fondo2.jpg"></td>
              </tr>
            </table>          </td>
          <td width="15" background="images/cuadro_der.jpg">&nbsp;</td>
        </tr>
      </table>    </td>
  </tr>
  <tr>
    <td align="center" height="119" width="1029" valign="top"> 
      <?include("pie1.php");?>    </td>
  </tr>
</table>
</body>
</html>
