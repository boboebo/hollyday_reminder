<?include("seguridad.php");?>
<html>
<head>
<title>Hollyday  Reminder - Usuarios</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta mane="Diseño y Programación" valor="Ing. Agustin Neuman - Mayo de 2012">
<meta mane="Ultima Actualizacion" valor="Ing. Agustin Neuman - Mayo de 2012">
<link rel="stylesheet" type="text/css" href="anylinkmenu.css" />
<LINK href="regi.css" type=text/css rel=stylesheet>
<link type="text/css" href="css/redmond/jquery-ui-1.8.9.custom.css" rel="stylesheet" />
<script type="text/javascript" src="menucontents.js"></script>
<script type="text/javascript" src="anylinkmenu.js"></script>
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
#dhtmltooltip{
position: absolute;
left: -300px;
width: 150px;
border: 1px solid black;
padding: 2px;
background-color: lightyellow;
visibility: hidden;
z-index: 100;
/*Remove below line to remove shadow. Below line should always appear last within this CSS*/
filter: progid:DXImageTransform.Microsoft.Shadow(color=gray,direction=135);
}

#dhtmlpointer{
position:absolute;
left: -300px;
z-index: 101;
visibility: hidden;
}
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: x-small;
}
</style>

</head>
<?
include("estilos.php");
include("cool.php");
$usuario_buscado=$_REQUEST['usuario_buscado'];
?>
<body bgcolor="#FFFFFF" text="#000000" bgProperties=fixed  background="images/fondo1.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" link="#333333" vlink="#333333" alink="#333333" onLoad="MM_preloadImages('images/Botones/bot_NuevoUsuario2.jpg')">

<table width="1010" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td background="images/top1.jpg" height="51" align="center" width="1029"> 
      <?include("top0.php");?>
    </td>
  </tr>
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
                        <?   ?>
                      </td>
                    </tr>
                    <tr> 
                      <td height="10" align="center" valign="top"></td>
                    </tr>
                    <td align="center" valign="top"> </td>
                    </tr>
                  </table>
                </td>
              </tr>
			  <?
			  
//************ PRIMER SELECT *********************
$ssql = "select * from usuarios,Roles where usuarios.nombre like '%".$usuario_buscado."%' and usuarios.IdRol=Roles.IdRol order by usuarios.nombre" ;  
$result = mysql_db_query($BaseDatos,$ssql);

//************Calcula el Nro.de Pagina *********
$num_total_registros = mysql_num_rows($result);  
?>
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
                        <table width="931" border="0" cellspacing="0" cellpadding="0">
                          <tr> 
                            <td width="163">&nbsp;</td>
                            <td width="612" align="center" valign="top"><font size="3" face="Verdana, Arial, Helvetica, sans-serif" color="#333333"><b><font size="4">Usuarios<br>
                              <?
			if($_REQUEST['resultado']<>"")
			{
				if($_REQUEST['resultado']==1){$mensaje= "¡¡ Los Datos del Usuario se Registraron Correctamente !!"; $colormensaje="#339900";};
				if($_REQUEST['resultado']==12){$mensaje="¡¡ Ya Existe un Usuario con igual Código o Nro. de Usuario !!"; $colormensaje="#CC0000";};
				if($_REQUEST['resultado']==2){$mensaje= "¡¡ Los Datos del Usuario se Cambiaron Correctamente !!"; $colormensaje="#339900";};
				if($_REQUEST['resultado']==3){$mensaje= "¡¡ El Usuario fue BORRADO con Exito !!"; $colormensaje="#339900";};
				if($_REQUEST['resultado']==4){$mensaje= "¡¡ El Usuario fue ".$_REQUEST['HABTEXT']." con Exito !!"; $colormensaje="#339900";};
			?>
                              </font></b></font> 
                              <table width="554" border="0" cellspacing="1" cellpadding="1" align="center">
                                <tr> 
                                  <td align="center" valign="middle"><font face="Arial, Helvetica, sans-serif" size="4"><b><font color="<?echo $colormensaje;?>"> 
                                    </font><font face="Arial, Helvetica, sans-serif" size="4"><b><font color="<?echo $colormensaje;?>"> 
                                    <? echo $mensaje;?>
                                    </font></b></font></b></font></td>
                                </tr>
                              </table>
                              <?
			}
			?>
                              <br>
                              <table width="602" border="0" cellspacing="1" cellpadding="1" bgcolor="#D4D4D4" align="center">
                                <form name="form1" method="post" action="Usuarios.php">
                                  <tr> 
                                    <td align="center" valign="middle"> 
                                      <table width="600" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF">
                                        <tr> 
                                          <td height="25" bgcolor="#F4F4F4" width="30%"> 
                                            <div align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#666666">Usuarios 
                                              con Nombre :</font></div>
                                          </td>
                                          <td height="25" bgcolor="#F4F4F4" colspan="3"> 
                                            <input class=campos3 type="text" name="usuario_buscado" value="<? echo $usuario_buscado;?>" size="40">
                                            <input  type="hidden" name="Usuario" value="<?echo $Usuario?>">
                                          </td>
                                          <td height="25" bgcolor="#F4F4F4" width="23%" align="center"> 
                                            <input name="Submit" type="image" src="images/botonbuscar1.jpg" width="63" height="21" border="0" alt="Buscar Usuario">
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>
                                </form>
                              </table>
                              
                            </td>
                            <td width="169" align="center" valign="top"><img src="images/Usuarios1.jpg" width="125" height="125"></td>
                          </tr>
                        </table>
                        <table width="800" border="0" align="center" height="20" cellpadding="0" cellspacing="0">
                          <tr bgcolor="#FFFFFF"> 
                            <td height="24" align="left" valign="bottom" width="211"> 
                              <a href="Nuevo_Usuario.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('image999','','images/Botones/bot_NuevoUsuario2.jpg',1)" > 
                              <img src="images/Botones/bot_NuevoUsuario1.jpg" name="image999"  width="124" height="24" border="0" title="Nuevo Usuario" align="middle"></a></td>
                            <td height="24" align="center" width="519">&nbsp;</td>
                          </tr>
                        </table>
                        <table width="800" border="0" align="center" bgcolor="#E6E6E6" dwcopytype="CopyTableRow">
                          <tr> 
                            <td height="21" width="46" background="images/topgrilla.gif"> 
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#666666"><b>C&oacute;digo</b></font></div>
                            </td>
                            <td height="21" width="316" background="images/topgrilla.gif"> 
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#666666"><b>Nombre</b></font></div>
                            </td>
                            <td height="21" width="153" background="images/topgrilla.gif"> 
                              <div align="center" class="Estilo2"><font face="Arial, Helvetica, sans-serif" size="2" color="#666666"><b>Rol/Perfil</b></font></div>
                            </td>
                            <td width="87" background="images/topgrilla.gif" align="center"><span class="Estilo3"><font face="Arial, Helvetica, sans-serif" size="2" color="#666666"><b>Usuario</b></font></span></td>
                            <td width="203" background="images/topgrilla.gif" align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#666666"><b>Email</b></font></td>
                            <td colspan="2" height="40" background="images/topgrilla.gif"> 
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#666666"><b>Acciones</b></font></div>
                            </td>
                          </tr>
                          <?
//******** Mostramos los Registros de la Tabla ***********
if ($num_total_registros == 0)
{ 
	echo "<tr> <td colspan=8 ><div align=center> <font face=Arial, Helvetica, sans-serif size=2> ¡ No se encontraron Registros !</font></div> </td></tr>";
}
else
{   
   	
	$var1 = 1;
   	while($row=mysql_fetch_array($result))
	{
		
		$id_usuario=$row["id_usuario"]; 
		$ssql2 = " SELECT Disciplinas.DisciplinaNombre as disciplina FROM Disciplinas,UsuDisciplinas "; 
		$ssql2.= " WHERE UsuDisciplinas.id_usuario=$id_usuario AND UsuDisciplinas.IdDisciplina=Disciplinas.IdDisciplina "; 
		$result2 = mysql_db_query($BaseDatos,$ssql2);
		
		$TextoFicha="<font face=Verdana, Arial, Helvetica, sans-serif size=2 color=#333333>";
		
		if($row["IdRol"]==3)
		{  
		  $TextoFicha.="El usuario es EDITOR de las disciplinas:<br>";
		  while($row_rol=mysql_fetch_array($result2)) 
		  {
		    $TextoFicha.= $row_rol['disciplina']."<br>";
		  }
		}
		else
		   $TextoFicha.="El usuario NO es EDITOR <br>";
		
		$TextoFicha.="</font>";
		
		$IdUsuarioX= $row["IdUsuario"];
		//----- Pinta las filas -------------
		if($var1 == 0){$color="#F7F7F7";	$var1 = 1;}else{$color="#FFFFFF";	$var1 = 0;}

	?>
                          <tr onMouseOver="mo_in(this,'#BBC9D9')" onMouseOut="mo_out(this,'<? echo $color;?>')" bgcolor="<? echo $color;?>"> 
                            <td width="46"> 
                              <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#333333"> 
                                <? echo $row["id_usuario"]; ?>
                                </font></div>
                            </td>
                            <td width="316"> <font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#333333"> 
                              <? echo $row["nombre"]; ?>
                              </font></td>
                            <td width="153" align="center" onMouseover="ddrivetip('<? echo $TextoFicha; ?>', 300)"; onMouseout="hideddrivetip()"> 
                              <font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#333333"> 
                              <? echo $row["Rol"]; ?>
                              </font></td>
                            <td width="87" align="center"> 
                              <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#333333"> 
                                <? echo $row["usuario"]; ?>
                                </font></div>
                            </td>
                            <td width="203" align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#333333"> 
                              <? echo $row["email"]; ?>
                              </font></td>
                            <td width="42" align="center"> 
                              <a  title="Eliminar Usuario" href="ABM_Usuarios.php?opcion=3&id_usuario=<? echo $row["id_usuario"];?>" onClick="return confirm('¿ Esta seguro que desea borrar el Usuario <? echo $row["nombre"];?> ? ')"><img src="images/borrar.png" width="16" height="16" border="0" title="Borrar Usuario"></a> 
                            </td>
                            <td colspan="2" width="43"> 
                              <div align="center"><a  title="Cambiar Datos del Usuario" class="Menu1" href="Cambiar_Usuario.php?id_usuario=<? echo $row["id_usuario"]; ?>&usuario_buscado=<? echo $usuario_buscado;?>"  style="TEXT-DECORATION: none"><img src="images/cambiar.png" width="16" height="16" border="0" title="Cambiar Datos"></a></div>
                            </td>
                            <?
					   if ($row["habilitado"]==0)
					   {
					  ?>
                            <?
					  }
					  else
					  {
					  ?>
                            <? } ?>
                          </tr>
                          <?
	}
	
}
mysql_free_result($result)
?>
                        </table>
                        <br>
                        <a href="Tablas.php"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">&lt;Volver&gt;</font></a> 
                      </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr valign="top"> 
                <td bgcolor="#FFFFFF" valign="top" align="center"></td>
              </tr>
              <tr> 
                <td height="12" background="images/fondo2.jpg"></td>
              </tr>
            </table>
          </td>
          <td width="15" background="images/cuadro_der.jpg">&nbsp;</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td align="center" height="119" width="1029" valign="top"> 
      <?include("pie1.php");?>
    </td>
  </tr>
</table>
</body>
</html>
