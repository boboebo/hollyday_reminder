<?php
session_start();

include("db_conexion.php");
con_mysql();
$BaseDatos ="1046514_hr";
mysql_select_db($BaseDatos);

		$_REQUEST["usuario"]=str_replace("'","",$_REQUEST["usuario"]);
		$_REQUEST["usuario"]=str_replace("%","",$_REQUEST["usuario"]);
		$_REQUEST["contrasena"]=str_replace("'","",$_REQUEST["contrasena"]);
		$_REQUEST["contrasena"]=str_replace("%","",$_REQUEST["contrasena"]);

			$ssql= "select * from usuarios where UsuarioNick='".$_REQUEST['usuario']."' and UsuarioPass='".$_REQUEST['contrasena']."' ";
			
			$result = mysql_db_query($BaseDatos,$ssql);
			$num_total_registros = @mysql_num_rows($result); 
					
			if ($num_total_registros <> 0)
			{
				   
					
									while($row=mysql_fetch_array($result))
									{
										if($row["UsuarioCheck"]==1){			
																																								
												$_SESSION['usuario']=$row["UsuarioNombre"]; //$_REQUEST["usuario"];
												$_SESSION['IdUsuarioSes']=$row["IdUsuario"]; //$IdUsuarioX;
																		
												header("Location: Tablas.php"); 
										  }
										// usuario no chequeado desde el mail
									     else header("Location: login.php?resultado=5");	
									}//---- END WHILE ---
                    
			}
			else 
			{
				//$cad="El nombre de usuario no existe o la contraseña es incorrecta";
				//header("Location: login.php?resultado=1");
			}
?>