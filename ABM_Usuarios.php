<?
session_start();

include("db_conexion.php");

//**** Coneccion a la Base de Datos  **********
con_mysql();
$BaseDatos = "1046514_hr";

$nombre=$_REQUEST['nombre'];

//****** INSERT USUARIOS **********
if ($_REQUEST['opcion']==1)
{

    //***** Controla si Existe un Registro con el mismo Número **********
	$ssql2 = "select * from usuarios where UsuarioNombre='$nombre'";  
	$result2 = mysql_db_query($BaseDatos,$ssql2);
	//************Calcula el Nro.Registros *********
	$num_registros = mysql_num_rows($result2);
	
	if( $num_registros == 0)
	{
		$nombre = strtoupper($nombre);
		$usuario=$_REQUEST['usuario'];
		$clave=$_REQUEST['clave'];
		$email=$_REQUEST['email'];
				
		$sql = 'insert into usuarios';
	  	$sql .= '(UsuarioNombre,UsuarioPass,UsuarioNick,UsuarioMail)';
		$sql .= 'values';
		$sql .= "('$nombre','$clave','$usuario','$email')";
		
		//mysql_db_query($BaseDatos,$sql);		
		if (!mysql_db_query($BaseDatos,$sql))
	          echo "ERROR  ".$sql;
		    
		else{
		  	  			 
			$idusu = mysql_insert_id();
			 //**************************************************************************************
			 //******************** ENVIO POR EMAIL ***********************************
			 //**************************************************************************************
										$mensaje= "Hola ".$nombre1."<br><br>";
										$mensaje.= "Gracias por registrase en Hollyday Reminder. Su nueva cuenta ha sido creada con éxito, no obstante, antes de poder usarla tiene que activarla.<br>";
										$mensaje.= "Para activar la cuenta seleccione el siguiente enlace : <br><br>";
										$mensaje.= "<b><font face='Verdana, Arial, Helvetica, sans-serif' size='2' color='#3399CC'><a href='http://hollydayreminder.mywebcommunity.org/ABM_Usuarios.php?opcion=4&idusu=".$idusu."' target='_blank'>Habilitar Nuevo Usuario</a></font></b><br><br>";
										$mensaje.= "Hecho esto podrá acceder a <br><br>";
										$mensaje.= "<b><font face='Verdana, Arial, Helvetica, sans-serif' size='2' color='#3399CC'><a href='http://hollydayreminder.mywebcommunity.org/login.php' target='_blank'>Ingresar a Acheral Jobs</a></font></b><br><br>";
										$mensaje.= "usando la información de acceso: <br><br>";
										$mensaje.= "<b>Usuario – ".$usuario1."<br>";
										$mensaje.= "Clave – ".$clave1."<br>";
								  
										//*************************** ENVIO DE EMAIL *************
										$asunto="Hollyday Reminder - NUEVO REGISTRANTE";
										/* Para enviar correo HTML, puede definir la cabecera Content-type. */
										$para="$email1";
										$cabeceras  = "MIME-Version: 1.0\r\n";
										$cabeceras .= "Content-type: text/html; charset=iso-8859-1\r\n";
										//echo $mensaje;
										mail($para,$asunto,$mensaje,$cabeceras);
			 
			 
			 
			 header("Location: "."login.php?resultado=1");
			 
			 }//else
	 }
	else
	{
	  header("Location: "."login.php?resultado=12");
	 }
}

//****** MODIFICA FICHA DE Usuario **********
if ($_REQUEST['opcion']==2)
{
	$nombre=$_REQUEST['nombre'];
	$nombre1 = strtoupper($nombre);
	$usuario=$_REQUEST['usuario'];
	$clave=$_REQUEST['clave'];
	$clave2=$_REQUEST['clave2'];
	$email=$_REQUEST['email'];
	$pais=$_REQUEST['Pais'];
	$provincia=$_REQUEST['Provincia'];
	$Usuario_id=$_SESSION['IdUsuarioSes'];
	
	//-- HACE UPDATE  
	if ($clave == $clave2)
	{
		$sql = " update usuarios set ";
		$sql .= " UsuarioNombre = '$nombre' ";
		$sql .= " ,UsuarioMail = '$email' ";
		$sql .= " ,UsuarioNick = '$usuario' ";
		$sql .= " ,UsuarioPass = '$clave' ";
		$sql .= " ,UsuarioPais = '$pais' ";
		$sql .= " ,UsuarioProvincia = '$provincia' ";
		$sql .= " WHERE IdUsuario='$Usuario_id'";
		
		//*** Ejecucion del Update ***
	
		if (!mysql_db_query($BaseDatos,$sql))
	        echo "ERROR  ".$sql;
		    
		else
            header("Location: "."Nuevo_Usuario.php?resultado=1");

	}
	else
	{
		header("Location: Cambiar_Usuario.php?resultado=2");
	}
}
//****** BORRA USUARIO **********
if ($_REQUEST['opcion']==3)
{
	//*********** Controla Tablas Relacionadas  **********
	//******** Tabla usuario_modulo ****************
	//$ssql2 = "select * from usuarios_modulos where id_usuario = ".$id_usu ;  
	//$result2 = mysql_db_query($BaseDatos,$ssql2);
	////************Calcula el Nro.Registros *********
	//$num_registros = 0;
	//$num_registros = mysql_num_rows($result2);
	
	//if( $num_registros == 0)
	//{

		//*** Ejecucion del Delete ***
		mysql_db_query($BaseDatos,"delete from usuarios where id_usuario='$id_usuario'");
		header("Location: Usuarios.php?resultado=3");

	//}
	//else
	//{
	//<br>$color="#CC0000";
	//$Var1= "¡¡ No puede borrar éste Usuario. Existen Módulos autorizados para el mismo !!";
	//}
}

if ($_REQUEST['opcion']==4)
{

	$Usuario_id=$_REQUEST['idusu'];
	
	//-- HACE UPDATE  
	
		$sql = " update usuarios set ";
		$sql .= " ,UsuarioCheck = 1 ";
		$sql .= " WHERE IdUsuario='$Usuario_id'";
		
		//*** Ejecucion del Update ***
	
		if (!mysql_db_query($BaseDatos,$sql))
	        echo "ERROR  ".$sql;
		    
		else
            header("Location: login.php");
}
?>