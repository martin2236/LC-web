
<html>
	<head>
    				<link href="images/icono.ico" type="image/x-icon" rel="shortcut icon" />
    				<meta charset="utf-8">
			     	<title> Nico Soft formulario de e-mail </title>
                    <link rel="stylesheet" href="style2.css" />
                    
                    
                    <script type ="text/javascript">/*Agregamos una etiqueta script para poder trabajar con javascript*/
					function Redireccionar()/* Creamos una funcion para que nos redireccione al index*/
					{
						window.location = 'index.html';
					}
					setTimeout('Redireccionar()',4000);
					</script>
	</head>
    
<body>


		<div class="container">
<?php
		//capturamos datos desde el form
		$name=$_POST['name'];
		$email=$_POST['email'];
		$cel=$_POST['cel'];
		$address=$_POST['address'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
		//configuramos datos del email
		$para='info@liclisandrocrovetto.com.ar';
		$asunto='Mensaje enviado desde la web';
		$asunto2='Gracias por su consulta';
	// título
	$título = 'E-Mail desde la pagina';
	
	// mensaje
	$mensaje = '
	<html>
	<head>
	<title>E-Mail desde la pagina</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>
	<body>
	Sr/a: '.$name.'- Su E-Mail es: '.$email.'<BR>
	TELEFONO DE CONTACTO: '.$cel.'<BR>
	Titulo de la Consulta: '.$address.'<BR>
	Area: '.$subject.'<BR>
	Consulta: '.$message.' 
	</body>
	</html>
	
	';
	$para = strtolower($para);
	$para = trim($para);

	// Para enviar un correo HTML, debe establecerse la cabecera Content-type
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	// Cabeceras adicionales
	$cabeceras .= 'To: '.$name.' <'.$para.'>'."\r\n";
	$cabeceras .= 'From: Consulta desde la Pagina Web. <info@liclisandrocrovetto.com.ar>' . "\r\n";

		mail($para, $título, $mensaje, $cabeceras);
		echo("MUCHAS GRACIAS, NOS COMUNICAREMOS CON UD.");
			$título = 'E-Mail desde la pagina';
	
	// mensaje
	$mensaje = '
	<html>
	<head>
	<title>Consulta a DUARTE PROPIEDADES</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>
	<body>
	Sr/a: '.$name.'- Su E-Mail es: '.$email.'<BR>
	TELEFONO DE CONTACTO: '.$cel.'<BR>
	Titulo de la Consulta: '.$address.'<BR>
	Area: '.$subject.'<BR>
	Consulta: '.$message.' 
	
	Estaremos comunicandonos a la brevedad. Muchas gracias por su cunsulta.-
	</body>
	</html>
	
	';

		mail($email, $título, $mensaje, $cabeceras);

	
		
?>

             <H2><img src="images/cargando2.gif" alt=""/>Redireccionando al inicio.!!</H2>  		 
		</div>
        
        
</body>

</html>
