<? session_start();?>
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
body {
	background-color: #EFEFEF;
}
</style>

</head>
<?
include("estilos.php");
include("db_conexion.php");

//**** Coneccion a la Base de Datos  **********
con_mysql();
$BaseDatos = "1046514_hr";

$buscado=$_REQUEST['buscado'];
?>
<body text="#000000" bgProperties=fixed  background="images/fondo1.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" link="#333333" vlink="#333333" alink="#333333" onLoad="MM_preloadImages('images/Botones/bot_NuevoUsuario2.jpg')">

<table width="1010" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="1029"> 
      <table width="1010" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td width="15" background="images/cuadro_izq.jpg">&nbsp;</td>
          <td width="958" align="center" valign="top" background="images/fondo2.jpg"> 
            <table width="910" border="0" cellpadding="0" cellspacing="0" bgcolor="#D6DBCC">
              <tr bgcolor="#EFEFEF"> 
                <td width="910" height="12" background="images/fondo2.jpg"></td>
              </tr>
              <tr valign="top"> 
                <td bgcolor="#FFFFFF" valign="top" align="center">
                  <table width="912" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td width="912" height="152" background="images/Header.jpg"> 
                      <?   ?>                      </td>
                    </tr>
                    
                    <tr> 
                      <td height="33" align="center" valign="top" background="images/borde.PNG"></td>
                    </tr>
                </table>                
				</td>
              </tr>
			  <?
		$id_usuario=$_SESSION['IdUsuarioSes']; 
		
		$ssql2 = " SELECT * FROM feriados WHERE IdUsuario=$id_usuario "; 
		
		if($buscado<>'')
		  $ssql2.= " AND FeriadoDescripcion	LIKE '%$buscado%'  ";
		
		$result = mysql_db_query($BaseDatos,$ssql2);
        
		$num_total_registros = mysql_num_rows($result);

?>
              <tr valign="top">
                <td bgcolor="#FFFFFF" valign="top" align="center"> 
                  <table width="912" border="0" cellpadding="0" cellspacing="0" bgcolor="#D6DBCC">
                  <tr> 
                      <td width="910" align="center"></td>
                  </tr>
                    <tr>
                      <td align="center" height="220" valign="top"> 
                        <table width="865" border="0" cellspacing="0" cellpadding="0">
                          <tr> 
                            <td width="148">&nbsp;</td>
                            <td width="611" align="center" valign="top"><font size="3" face="Verdana, Arial, Helvetica, sans-serif" color="#333333"><b><font size="4">Feriados<br>
                              <?
			if($_REQUEST['resultado']<>"")
			{
				if($_REQUEST['resultado']==1){$mensaje= "¡¡ Los Datos del Feriado se Registraron Correctamente !!"; $colormensaje="#339900";};
				if($_REQUEST['resultado']==12){$mensaje="¡¡ Ya Existe un Feriado con igual Descripcion !!"; $colormensaje="#CC0000";};
				if($_REQUEST['resultado']==13){$mensaje="¡¡ Ya Existe un Feriado con igual Fecha !!"; $colormensaje="#CC0000";};
				if($_REQUEST['resultado']==2){$mensaje= "¡¡ Los Datos del Feriado se Cambiaron Correctamente !!"; $colormensaje="#339900";};
				if($_REQUEST['resultado']==3){$mensaje= "¡¡ El Feriado fue BORRADO con Exito !!"; $colormensaje="#339900";};
				
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
                                <form name="form1" method="post" action="Feriados.php">
                                  <tr> 
                                    <td align="center" valign="middle"> 
                                      <table width="600" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF">
                                        <tr> 
                                          <td height="25" bgcolor="#F4F4F4" width="30%"> 
                                            <div align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#666666">Buscar Feriado  :</font></div>                                          </td>
                                          <td height="25" bgcolor="#F4F4F4" colspan="3"> 
                                            <input class=campos3 type="text" name="buscado" value="<? echo $buscado;?>" size="40"></td>
                                          <td height="25" bgcolor="#F4F4F4" width="23%" align="center"> 
                                            <input name="Submit" type="image" src="images/botonbuscar1.jpg" width="63" height="21" border="0" alt="Buscar Usuario">                                          </td>
                                        </tr>
                                      </table>                                    </td>
                                  </tr>
                                </form>
                            </table>                            </td>
                            <td width="127" align="center" valign="top">&nbsp;</td>
                          </tr>
                        </table>
                        <p>&nbsp;</p>
                        <table width="800" border="0" align="center" height="20" cellpadding="0" cellspacing="0">
                          <tr bgcolor="#FFFFFF"> 
                            <td width="211" height="24" align="left" valign="bottom" bgcolor="#D6DBCC"> 
                              <a href="Nuevo_Feriado.php?opcion=1"> 
                              <img src="images/bot_Nuevo1.png" name="image999"  width="124" height="24" border="0" title="Nuevo Feriado" align="middle"></a></td>
                            <td width="519" height="24" align="center" bgcolor="#D6DBCC">&nbsp;</td>
                          </tr>
                        </table>
                        <table width="800" border="0" align="center" bgcolor="#E6E6E6" dwcopytype="CopyTableRow">
                          <tr> 
                            <td height="27" width="46" background="images/topgrilla.gif"> 
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#666666"><b>C&oacute;digo</b></font></div>                            </td>
                            <td width="187" height="27" background="images/topgrilla.gif"> 
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#666666"><b>Fecha</b></font></div>                             
                              <div align="center" class="Estilo2"></div></td>
                            <td width="467" align="center" background="images/topgrilla.gif"><font face="Arial, Helvetica, sans-serif" size="2" color="#666666"><b>Descripci&oacute;n</b></font></td>
                            <td colspan="2" height="27" background="images/topgrilla.gif"> 
                              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#666666"><b>Acciones</b></font></div>                            </td>
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
		
		//----- Pinta las filas -------------
		if($var1 == 0){$color="#F7F7F7";	$var1 = 1;}else{$color="#FFFFFF";	$var1 = 0;}

		$d = $row["FeriadoDia"];
		$m = $row["FeriadoMes"];
		$y = date("Y");
		
		$date = "$d / $m / $y";

	?>
                          <tr onMouseOver="mo_in(this,'#BBC9D9')" onMouseOut="mo_out(this,'<? echo $color;?>')" bgcolor="<? echo $color;?>"> 
                            <td width="46"> 
                              <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#333333"> 
                                <? echo $row["IdFeriado"]; ?>
                                </font></div>                            </td>
                            <td> <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#333333"> 
                              <? echo $date; ?>
                            </font></div></td>
                            <td align="center"> 
                              <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#333333"><? echo $row["FeriadoDescripcion"]; ?></font></div>                              </td>
                            <td width="35" align="center"> 
                              <a  title="Eliminar Usuario" href="ABM_Feriados.php?opcion=3&idfer=<? echo $row["IdFeriado"];?>" onClick="return confirm('¿ Esta seguro que desea borrar el Cliente <? echo $row["FeriadoDescripcion"];?> ? ')"><img src="images/borrar.png" width="16" height="16" border="0" title="Borrar Usuario"></a>                            </td>
                            <td colspan="2" width="43"> 
                              <div align="center"><a  title="Cambiar Datos del Usuario" class="Menu1" href="Nuevo_Feriado.php?idfer=<? echo $row["IdFeriado"];?>&opcion=2" style="TEXT-DECORATION: none"><img src="images/cambiar.png" width="16" height="16" border="0" title="Cambiar Datos"></a></div> </td>
						  </tr>
                          <?
	}
}
mysql_free_result($result)
?>
                        </table>
                        <br>
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
                <td height="12" background="images/fondo2.jpg"><div align="center">
                  <? include("pie1.php");?>
                </div></td>
              </tr>
          </table>          </td>
          <td width="37" background="images/cuadro_der.jpg">&nbsp;</td>
        </tr>
      </table>    </td>
  </tr>
  <tr>
    <td align="center" height="119" width="1029" valign="top">&nbsp;</td>
  </tr>
</table>
</body>
</html>
