
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
		$seje=$_POST['seje'];
		$cseje=$_POST['cseje'];
		$tiempo=$_POST['tiempo'];
		$fotos=$_POST['fotos'];
		$paginas=$_POST['paginas'];
		$hyd=$_POST['hyd'];
		$actper=$_POST['actper'];
		$Presentacion=$_POST['Presentacion'];
		$Vista=$_POST['Vista'];
		$anfl=$_POST['anfl'];
		$an3d=$_POST['an3d'];
		$catprod=$_POST['catprod'];
		$Foros=$_POST['Foros'];
		$Buscador=$_POST['Buscador'];
		$cc=$_POST['cc'];
		$bd=$_POST['bd'];
		$pol=$_POST['pol'];
		$vstk=$_POST['vstk'];
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
	SITIO WEB DE EJEMPLO: '.$seje.'<BR>
	Comentarios del sitio de ejemplo: '.$cseje.'<BR>
	Tiempo de Realizacion: '.$tiempo.'<BR>
	Cantidad Aprox de Fotos: '.$fotos.'<BR>
	Cantidad Aprox de Paginas: '.$paginas.'<BR>
	Tiene Hosting y Dominio: '.$hyd.'<BR>
	Necesita Actualizaciones Periodicamente: '.$actper.'<BR>
	Presentacion: '.$Presentacion.'<BR>
	Vista 360°: '.$Vista.'<BR>
	Animaciones con Flash: '.$anfl.'<BR>
	Animaciones 3D: '.$an3d.'<BR>
	Catalogo de Productos: '.$catprod.'<BR>
	Foros: '.$Foros.'<BR>
	Buscador: '.$Buscador.'<BR>
	Carrito de Compras: '.$cc.'<BR>
	Bases de Datos: '.$bd.'<BR>
	Pedidos On-Line: '.$pol.'<BR>
	Validacion de Formulario con Stock: '.$vstk.'<BR>
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
	SITIO WEB DE EJEMPLO: '.$seje.'<BR>
	Comentarios del sitio de ejemplo: '.$cseje.'<BR>
	Tiempo de Realizacion: '.$tiempo.'<BR>
	Cantidad Aprox de Fotos: '.$fotos.'<BR>
	Cantidad Aprox de Paginas: '.$paginas.'<BR>
	Tiene Hosting y Dominio: '.$hyd.'<BR>
	Necesita Actualizaciones Periodicamente: '.$actper.'<BR>
	Presentacion: '.$Presentacion.'<BR>
	Vista 360°: '.$Vista.'<BR>
	Animaciones con Flash: '.$anfl.'<BR>
	Animaciones 3D: '.$an3d.'<BR>
	Catalogo de Productos: '.$catprod.'<BR>
	Foros: '.$Foros.'<BR>
	Buscador: '.$Buscador.'<BR>
	Carrito de Compras: '.$cc.'<BR>
	Bases de Datos: '.$bd.'<BR>
	Pedidos On-Line: '.$pol.'<BR>
	Validacion de Formulario con Stock: '.$vstk.'<BR>
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
