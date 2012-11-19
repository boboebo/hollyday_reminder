<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php

						//**************************************************************************************
						//******************** ENVIO POR EMAIL ***********************************
						//**************************************************************************************
										$mensaje= "Hola ";
								  
										//*************************** ENVIO DE EMAIL *************
										$asunto="Hollyday  Reminder - Aviso";
										/* Para enviar correo HTML, puede definir la cabecera Content-type. */
										$para="agustin.neuman@gmail.com";
										$cabeceras  = "MIME-Version: 1.0\r\n";
										$cabeceras .= "Content-type: text/html; charset=iso-8859-1\r\n";
										$cabeceras .= "from: Hollyday  Reminder\r\n";
										echo $para.", ".$asunto.", ".$mensaje.", ".$cabeceras;
										mail($para,$asunto,$mensaje,$cabeceras);

?>
</body>
</html>
