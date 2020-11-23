<?php  
  $conexion=mysqli_connect('localhost','root','','covid');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Guanajuato</title>
	<link rel="stylesheet" href="stylos.css">
    <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>
<body>
	<nav>
        <h3>COVID-19</h3>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Estados <i class="icon ion-md-arrow-dropdown"></i></a>
            	<ul>
                    <li><a href="Aguascalientes.php">Aguacalientes</a></li>
                    <li><a href="Zacatecas.php">Zacatecas</a></li>
                    <li><a href="SanLuisPotosi.php">San Luis Potosi</a></li>
                    <li><a href="Jalisco.php">Jalisco</a></li>
                    <li><a href="Michoacan.php">Michoacan</a></li>
                    <li><a href="Guanajuato.php">Guanajuato</a></li>
                    <li><a href="Queretaro.php">Queretaro</a></li>
                </ul>
            </li>
            <li><a href="#">Servicios <i class="icon ion-md-arrow-dropdown"></i></a>
                <ul>
                    <li><a href="#">Diseño web</a></li>
                    <li><a href="#">Desarrollo web</a></li>
                    <li><a href="#">Aplicaciones nativas</a></li>
                </ul>
            </li>
            <li><a href="Contacto.html">Contacto</a></li>
        </ul>
    </nav>
     <div style="background-color: #1096c7; height: 200px;">
        <br>
        <br>
        <h2 style="color:white" class="borde">COVID en Guanajuato</h2>
        
    

	<section class="borde">
		<a href="SemaforoG.php"><img align="right" src="img/naranja.png" width="100px"></a>
	</section>
	</div>
    <br>
    <br>
		<section class="borde">
		<h2>¿Dónde puedo realizarme una prueba si no tengo sintomas</h2>
		<br>
		<ul>
			<li>El sector salud actualmente no realiza pruebas a las personas que no tienen sintomas por la posobilidad de falsos negativos al no haber en este momento suficiente conentración de virus, para que provoque síntomas</li>
			<li>La primera recomendación es permanecer aisaldo en casa, siguiendo las medidas de higiene respiratoria y sana distancia. Así evitaremos que los casos de los portadores asintomáticos, puedan contagiar a alguien más</li>
		</ul>
    	<br>
		<h2>Estamos contigo</h2>
    	<br>
    	<p>El reto que enfrentamos por el COVID 19 es primordialmente en la salud, pero también se ha convertido en un desafío para la economía de todos.<br>

		En el Gobierno del Estado de Guanajuato reconocemos que los guanajuatenses son comprometidos y solidarios, por eso, ponemos a su disposición un proyecto que suma el deseo de la sociedad para apoyar a los más vulnerables y las capacidades del Estado para llegar a todos los municipios.<br>

		Aquí encontraras la información sobre cómo puedes sumarte mediante tu donación.<br>

		Guanajuato, ha demostrado siempre que lo mejor está en nuestra gente. Unidos Somos Grandeza.</p>
		<br>
		<h2>¿Como apoyar?</h2>
		<br>
		<p>El objetivo general es unir esfuerzos con la sociedad para brindar asistencia social a aquellas personas que, como consecuencia de la pandemia originada por el COVID-19 (SARS-CoV2), se encuentran en situación de pobreza, desprotección social o vulnerabilidad en general.<br>

		Entre estas estrategias se encuentra la relativa a la RECAUDACIÓN DE FONDOS PARA COMPLEMENTAR LA OFERTA DE APOYOS Y SERVICIOS A PERSONAS Y GRUPOS EN SITUACIÓN DE VULNERABILIDAD AFECTADAS POR EL COVID-19 (SARS-CoV2).</p>
		<br>
			<div align="center" STYLE=" height: 35rem; overflow: auto;">
				<h2>Estadisticas por municipio</h2>
				<br>
			    <table FRAME="void" RULES="rows"> 
			        <tr>
			            <td STYLE="padding:2px;">Municipio</td>
			            <td STYLE="padding:2px;">Confirmados</td>
			            <td STYLE="padding:2px;">Recuperados</td>
			            <td STYLE="padding:2px;">Defunciones</td>
			            <td STYLE="padding:2px;">Sospechosos</td>
			        </tr>
			        <?php  
			        $sql="SELECT municipio, confirmados, recuperados, defunciones, sospechosos FROM guanajuato";
			        $result=mysqli_query($conexion, $sql);

			        while ($mostrar=mysqli_fetch_array($result)) {
			        ?>
			        <tr>
			            <td STYLE="padding:2px;"><?php echo $mostrar['municipio']; ?></td>
			            <td align="center"><?php echo $mostrar['confirmados']; ?></td>
			            <td align="center"><?php echo $mostrar['recuperados']; ?></td>
			            <td align="center"><?php echo $mostrar['defunciones']; ?></td>
			            <td align="center"><?php echo $mostrar['sospechosos']; ?></td>
			        </tr>
			     <?php 
			 	}
			     ?>
			    </table>
			</div>
		</section>
	</section>
</body>
</html>