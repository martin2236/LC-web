
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
		$Domicilio=$_POST['Domicilio'];
		$ciupropa=$_POST['ciupropa'];
		$cci=$_POST['cci'];
		$cce=$_POST['cce'];
		$dec=$_POST['dec'];
		$hyd=$_POST['hyd'];
		$actper=$_POST['actper'];
		$limpieza=$_POST['limpieza'];
		$domos=$_POST['domos'];
		$visnoct=$_POST['visnoct'];
		$Audio=$_POST['Audio'];
		$calidad=$_POST['calidad'];
		$Zoom=$_POST['Zoom'];
		$Antivandalicas=$_POST['Antivandalicas'];
		$decoracion=$_POST['decoracion'];
		$Ocultas=$_POST['Ocultas'];
		$Prevencioncc=$_POST['Prevencioncc'];
		$Eventos=$_POST['Eventos'];
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
	DATOS DOMICILIARIOS: '.$ciupropa.' - '.$Domicilio.'<BR>
	Cantidad de camaras Internas: '.$cci.'<BR>
	Cantidad de camaras Externas: '.$cce.'<BR>
	Distancia aprox entre un punto central y las camaras (Metros): '.$dec.'<BR>
	Dispositivos con Grabacios: '.$hyd.'<BR>
	Con Visualizacion desde el Celular: '.$actper.'<BR>
	Mantenimiento y Limpieza Mensual: '.$limpieza.'<BR>
	Con Domos: '.$domos.'<BR>
	Vision Nocturna: '.$visnoct.'<BR>
	Con Audio: '.$Audio.'<BR>
	Maxima calidad de Vision: '.$calidad.'<BR>
	Con Zoom: '.$Zoom.'<BR>
	Antivandalicas: '.$Antivandalicas.'<BR>
	Instalacion deco (Con decoracion): '.$decoracion.'<BR>
	Camaras Ocultas: '.$Ocultas.'<BR>
	Prevencion ante un corte de Luz: '.$Prevencioncc.'<BR>
	Configuracion de Eventos: '.$Eventos.'<BR>
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
	<title>Consulta a LC EQUIPMENT & SOFTWARE DESIGN</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>
	<body>
	Sr/a: '.$name.'- Su E-Mail es: '.$email.'<BR>
	CELULAR DE CONTACTO: '.$cel.'<BR>
	DATOS DOMICILIARIOS: '.$ciupropa.' - '.$Domicilio.'<BR>
	Cantidad de camaras Internas: '.$cci.'<BR>
	Cantidad de camaras Externas: '.$cce.'<BR>
	Distancia aprox entre un punto central y las camaras (Metros): '.$dec.'<BR>
	Dispositivos con Grabacios: '.$hyd.'<BR>
	Con Visualizacion desde el Celular: '.$actper.'<BR>
	Mantenimiento y Limpieza Mensual: '.$limpieza.'<BR>
	Con Domos: '.$domos.'<BR>
	Vision Nocturna: '.$visnoct.'<BR>
	Con Audio: '.$Audio.'<BR>
	Maxima calidad de Vision: '.$calidad.'<BR>
	Con Zoom: '.$Zoom.'<BR>
	Antivandalicas: '.$Antivandalicas.'<BR>
	Instalacion deco (Con decoracion): '.$decoracion.'<BR>
	Camaras Ocultas: '.$Ocultas.'<BR>
	Prevencion ante un corte de Luz: '.$Prevencioncc.'<BR>
	Configuracion de Eventos: '.$Eventos.'<BR>
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
