<?
session_start();

include("db_conexion.php");

//**** Coneccion a la Base de Datos  **********
con_mysql();
$BaseDatos = "1046514_hr";


//****** INSERT USUARIOS **********
if ($_REQUEST['opcion']==1)
{

$nombre=$_REQUEST['nombre'];
$nombre = strtoupper($nombre);
$email=$_REQUEST['email'];
$Usuario_id=$_SESSION['IdUsuarioSes'];


    //***** Controla si Existe un Registro con el mismo nombre **********
	$ssql2 = "select * from clientes where ClienteNombre='$nombre' AND IdUsuario=$Usuario_id  ";  
	$result2 = mysql_db_query($BaseDatos,$ssql2);
	//************Calcula el Nro.Registros *********
	$num_registros = mysql_num_rows($result2);
	
	if( $num_registros == 0)
	{

		//***** Controla si Existe un Registro con el mismo nombre  **********
			$ssql3 = "select * from clientes where ClienteMail='$email' AND IdUsuario=$Usuario_id ";  
			$result3 = mysql_db_query($BaseDatos,$ssql3);
			//************Calcula el Nro.Registros *********
			$num_registros3 = mysql_num_rows($result3);
			
			if( $num_registros3 == 0)
			{
										
				$sql = 'insert into clientes';
				$sql .= '(ClienteNombre,ClienteMail,IdUsuario,ClienteActivo)';
				$sql .= 'values';
				$sql .= "('$nombre','$email','$Usuario_id',1)";
				
				//mysql_db_query($BaseDatos,$sql);		
				if (!mysql_db_query($BaseDatos,$sql))
					  echo "ERROR  ".$sql;
					
				else
					  header("Location: Clientes.php?resultado=1");
	         }
			 else header("Location: Clientes.php?resultado=13");

	 }
	else
	{
	  header("Location: Clientes.php?resultado=12");
	 }
}

//****** MODIFICA FICHA DE Usuario **********
if ($_REQUEST['opcion']==2)
{
	$nombre=$_REQUEST['nombre'];
	$nombre1 = strtoupper($nombre);
	$email=$_REQUEST['email'];
	$idcli=$_REQUEST['idcli'];
	$Usuario_id=$_SESSION['IdUsuarioSes'];
	
	//-- HACE UPDATE  
		
		$sql = " update clientes set ";
		$sql .= " ClienteNombre = '$nombre' ";
		$sql .= " ,ClienteMail = '$email' ";
		$sql .= " ,IdUsuario = '$Usuario_id' ";
		$sql .= " WHERE IdCliente='$idcli'";
		
		//*** Ejecucion del Update ***
	
		if (!mysql_db_query($BaseDatos,$sql))
	        echo "ERROR  ".$sql;
		    
		else
            header("Location: "."Clientes.php?resultado=2");

}
//****** BORRA USUARIO **********
if ($_REQUEST['opcion']==3)
{
	$idcli=$_REQUEST['idcli'];
	
	//*** Ejecucion del Delete ***
	$sql = "delete from clientes where IdCliente=$idcli";
	
	if (!mysql_db_query($BaseDatos,$sql))
		echo "ERROR  ".$sql;
		
	else
		header("Location: Clientes.php?resultado=3");
}


if ($_REQUEST['opcion']==4)
{
	$idcli=$_REQUEST['idcli'];
	
	//*** Ejecucion del Delete ***
	$sql = "update clientes set ClienteActivo =0 where IdCliente=$idcli";
	
	if (!mysql_db_query($BaseDatos,$sql))
		$A;//panel de reintento;
	

}



?>