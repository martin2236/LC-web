
<html>
	<head>
    				<link href="../images/icono.ico" type="image/x-icon" rel="shortcut icon" />
    				<meta charset="utf-8">
			     	<title> LC - EQUIPMENT & SOFTWARE DESIGN </title>
                    <link rel="stylesheet" href="../style2.css" />
                    
                    
                    <script type ="text/javascript">/*Agregamos una etiqueta script para poder trabajar con javascript*/
					function Redireccionar()/* Creamos una funcion para que nos redireccione al index*/
					{
						window.location = '/../index.html';
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
		$temp=$_POST['temp'];
		$ciupropa=$_POST['ciupropa'];
		$nemp=$_POST['nemp'];
		$civa=$_POST['civa'];
		$tel=$_POST['tel'];
		$Domicilio=$_POST['Domicilio'];
		$cpc=$_POST['cpc'];
		$sop=$_POST['sop'];
		$pact=$_POST['pact'];
		$mact=$_POST['mact'];
		$tiempo=$_POST['tiempo'];
		$extra=$_POST['extra'];
		//configuramos datos del email
		$para='info@lcesd.com.ar';
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
	CELULAR DE CONTACTO: '.$cel.'<BR>
	TELEFONO DE CONTACTO: '.$tel.'<BR>
	TIEMPO DE EJECUCION DESEADO: '.$temp.'<BR>
	DATOS DOMICILIARIOS: '.$ciupropa.' - '.$Domicilio.'<BR>
	NOMBRE DE LA EMMPRESA: '.$nemp.'<BR>
	CONDICION DE IVA: '.$civa.'<BR>
	CANTIDAD DE DISPOSITIVOS MOBILES QUE INGRESAN EN SIMULTANEO: '.$cpc.'<BR>
	DIVERSIDAD DE SISTEMAS OPERATIVOS: '.$sop.'<BR>
	QUE PROCEDIMIENTO DESEA CONTROLAR O AUTOMATIZAR: '.$pact.'<BR>
	COMO LO HACE HABITUALMENTE: '.$mact.'<BR>
	EN QUE TIEMPO LO DESEA TERMINADO: '.$tiempo.'<BR>
	
	Consulta: '.$extra.' 
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
	$cabeceras .= 'From: Consulta desde la Pagina Web. <info@lcesd.com.ar>' . "\r\n";

		mail($para, $título, $mensaje, $cabeceras);
		echo("MUCHAS GRACIAS, NOS COMUNICAREMOS CON UD.");
			$título = 'E-Mail desde la pagina';
	
	// mensaje
	$mensaje = '
	<html>
	<head>
	<title>Consulta a LC - EQUIPMENT & SOFTWARE DESIGN</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>
	<body>
	Sr/a: '.$name.'- Su E-Mail es: '.$email.'<BR>
	CELULAR DE CONTACTO: '.$cel.'<BR>
	TELEFONO DE CONTACTO: '.$tel.'<BR>
	TIEMPO DE EJECUCION DESEADO: '.$temp.'<BR>
	DATOS DOMICILIARIOS: '.$ciupropa.' - '.$Domicilio.'<BR>
	NOMBRE DE LA EMMPRESA: '.$nemp.'<BR>
	CONDICION DE IVA: '.$civa.'<BR>
	CANTIDAD DE DISPOSITIVOS MOBILES QUE INGRESAN EN SIMULTANEO: '.$cpc.'<BR>
	DIVERSIDAD DE SISTEMAS OPERATIVOS: '.$sop.'<BR>
	QUE PROCEDIMIENTO DESEA CONTROLAR O AUTOMATIZAR: '.$pact.'<BR>
	COMO LO HACE HABITUALMENTE: '.$mact.'<BR>
	EN QUE TIEMPO LO DESEA TERMINADO: '.$tiempo.'<BR>
	
	Consulta: '.$extra.' 
	
	Estaremos comunicandonos a la brevedad. Muchas gracias por su cunsulta.-
	</body>
	</html>
	
	';

		mail($email, $título, $mensaje, $cabeceras);

	
		
?>

             <H2><img src="../images/cargando2.gif" alt=""/>Redireccionando al inicio.!!</H2>  		 
		</div>
        
        
</body>

</html>
