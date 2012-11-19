<?

	//------ CIERRA EL REGISTRO DE ACCESOS DE USUSARIO 
	
	//echo "cc=".$_REQUEST['Id_Usuario'];
	//$fecha="";
	//$result_top=mssql_query("select * from UsuarioConexion where Id_Usuario='".$_REQUEST['Id_Usuario']."' and  FechaCierre=".$fecha." "); 
	//$num_total_registros_top = mssql_num_rows($result_top);
	//echo "n=".$num_total_registros_top;
	//while($row_top=mssql_fetch_array($result_top))
	//{
	//	echo $row_top["Usuario"]."-".$row_top["FechaCierre"];
	//}
	
	//$Hoy=Date("m/d/Y h:i:s");
	//$Cerrado=1;
	//mssql_query("update UsuarioConexion set FechaCierre='$Hoy',Cerrado='$Cerrado' where Id_Usuario='".$_REQUEST['Id_Usuario']."' and Cerrado=0");					
	
	global $_SESSION;
	unset($_SESSION['autenticado']);
	unset($_SESSION['usuario']);
	unset($_SESSION['IdUsuarioSes']);
	unset($_SESSION['IdRolSes']);
	unset($_SESSION['Rol']);
	unset($_SESSION['horainiciosesion']);
	unset($_SESSION['direccionIP']);
	//session_destroy();
	header("Location: login.php");
?>