<?
session_start();

include("db_conexion.php");

//**** Coneccion a la Base de Datos  **********
con_mysql();
$BaseDatos = "1046514_hr";
$date=Date("Y/m/d");


//****** INSERT USUARIOS **********
if ($_REQUEST['opcion']==1)
{

		$Descripcion=$_REQUEST['Descripcion'];
		$dia=$_REQUEST['dia'];
		$mes=$_REQUEST['mes'];
		$Usuario_id=$_SESSION['IdUsuarioSes'];

		//***** Controla si Existe un Registro con el mismo dia/mes **********
		$ssql2 = "select * from feriados where FeriadoMes='$mes' AND FeriadoDia='$dia' AND IdUsuario=$Usuario_id  ";  
		$result2 = mysql_db_query($BaseDatos,$ssql2);
		//************Calcula el Nro.Registros *********
		$num_registros = mysql_num_rows($result2);
		
		if( $num_registros == 0)
		{
		
				//***** Controla si Existe un Registro con el mismo Descripcion **********
				$ssql3 = "select * from feriados where FeriadoDescripcion='$Descripcion' AND IdUsuario=$Usuario_id ";  
				$result3 = mysql_db_query($BaseDatos,$ssql3);
				//************Calcula el Nro.Registros *********
				$num_registros3 = mysql_num_rows($result3);
				
				if( $num_registros3 == 0)
				{
						
						$sql = 'insert into feriados';
						$sql .= '(FeriadoFecha,FeriadoDescripcion,FeriadoDia,FeriadoMes,IdUsuario)';
						$sql .= 'values';
						$sql .= "($date,'$Descripcion',$dia,$mes,$Usuario_id)";
						
						//mysql_db_query($BaseDatos,$sql);		
						if (!mysql_db_query($BaseDatos,$sql))
							  echo "ERROR  ".$sql;
							
						else
							  header("Location: Feriados.php?resultado=1");
				 }
				 else header("Location: Feriados.php?resultado=12");
		}
		else header("Location: Feriados.php?resultado=13");
		

}

//****** MODIFICA FICHA DE Usuario **********
if ($_REQUEST['opcion']==2)
{
        $Descripcion=$_REQUEST['Descripcion'];
		$dia=$_REQUEST['dia'];
		$mes=$_REQUEST['mes'];
		$idfer=$_REQUEST['idfer'];
		$Usuario_id=$_SESSION['IdUsuarioSes'];
	
	//-- HACE UPDATE  
		$sql = " update feriados set ";
		$sql .= " FeriadoDescripcion = '$Descripcion' ";
		$sql .= " ,FeriadoDia = $dia ";
		$sql .= " ,FeriadoMes = $mes ";
		$sql .= " ,IdUsuario = $Usuario_id ";
		$sql .= " WHERE IdFeriado=$idfer";
		
		//*** Ejecucion del Update ***
	
		if (!mysql_db_query($BaseDatos,$sql))
	        echo "ERROR  ".$sql;
		    
		else
            header("Location: Feriados.php?resultado=2");

}
//****** BORRA USUARIO **********
if ($_REQUEST['opcion']==3)
{
	$idfer=$_REQUEST['idfer'];
	
	//*** Ejecucion del Delete ***
	$sql = "delete from feriados where IdFeriado=$idfer";
	
	if (!mysql_db_query($BaseDatos,$sql))
		echo "ERROR  ".$sql;
		
	else
		header("Location: Feriados.php?resultado=3");
}


?>