<!-- Codes by Quackit.com -->
<html>
<head>
<script type="text/JavaScript">
<!--
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}
//   -->
</script>
</head>
<body onLoad="JavaScript:timedRefresh(60000);">
<p>Monitor de reevvio de E-mails.</p>
<p>No cerrar!!</p>

<?
//session_start();

include("db_conexion.php");

//**** Coneccion a la Base de Datos  **********
con_mysql();
$BaseDatos = "1046514_hr";


   $date = Date("Y/m/d");
   $year = Date("Y");
   $sday = Date("j");
   $smonth = Date("n");

   $ssql= "select * from feriados ";
	//echo $ssql;
   $result = mysql_db_query($BaseDatos,$ssql);
   $num_total_registros = mysql_num_rows($result); 
					
	if ($num_total_registros <> 0)
	{			
		while($row=mysql_fetch_array($result))
		{
		//IdFeriado	FeriadoFecha	FeriadoDescripcion	FeriadoDia	FeriadoMes	IdUsuario
		  $day = $row["FeriadoDia"];
		  $mes = $row["FeriadoMes"];
		  $descripcion = $row["FeriadoDescripcion"];
		  
		  if($day<14) {$day=14-$day; $mes-=1;}
		  else $day-=14;
		  
		    if($sday==$day and $smonth==$mes)
		    {
		       $ssql_cli= "select * from clientes where ClienteActivo=1 ";
				//echo $ssql;
			   $result_cli = mysql_db_query($BaseDatos,$ssql_cli);
			   $num_total_registros_cli = mysql_num_rows($result_cli); 
								
			   if ($num_total_registros_cli <> 0)
			   {			
					while($row_cli=mysql_fetch_array($result_cli))
			        {
					   //$mail = $row_cli["ClienteMail"];
					   $mail = "agustin.neuman@gmail.com";
					   
					    //**************************************************************************************
						//******************** ENVIO POR EMAIL ***********************************
						//**************************************************************************************
										$mensaje= "Hola ".$row_cli["ClienteNombre"]."<br><br>";
										$mensaje.= "El motivo del persente correo es avisarle que se aproxima en feriado en conmemoracion de <b> $descripcion</b> el dia <b>$day</b> del mes <b>$mes</b>.<br><br>";
										$mensaje.= "Para dejar de recibir estos avisos seleccione el siguiente enlace : <br><br>";
										$mensaje.= "<b><font face='Verdana, Arial, Helvetica, sans-serif' size='2' color='#3399CC'><a href='http://hollydayreminder.mywebcommunity.org/ABM_Clientes.php?opcion=4&idcli=".$row_cli['IdCliente']."' target='_blank'>Dar de baja al servicio</a></font></b><br><br>";
										$mensaje.= "Muchas gracias.<br><br>";
										$mensaje.= "<br> -:: NO RESPONDER ESTE CORREO ::-<br>";
								  
										//*************************** ENVIO DE EMAIL *************
										$asunto="Hollyday  Reminder - Aviso";
										/* Para enviar correo HTML, puede definir la cabecera Content-type. */
										$para="$mail";
										$cabeceras  = "MIME-Version: 1.0\r\n";
										$cabeceras .= "Content-type: text/html; charset=iso-8859-1\r\n";
										$cabeceras .= "from: Hollyday  Reminder\r\n";
										//echo $mensaje;
										mail($para,$asunto,$mensaje,$cabeceras);
					} 
			   }//if ($num_total_registros <> 0)
			  
			}//if($sday==$day and $smonth==$mes)
			
		}//while
	
	}
?>


</body>
</html>