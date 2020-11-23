<?php  
  $conexion=mysqli_connect('localhost','root','','covid');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jalisco</title>
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

            <br>
        <div style="background-color: #1096c7; height: 150px;">
        <br>
        <br>
            <h2 style="color:white" class="borde">México ya ha entrado en la etapa más dura de la pandemia y necesitamos redoblar esfuerzos.</h2>
        </div>
        <br>
    <section class="borde">

        <div>
            <h3>Por eso, en Jalisco, como parte del Plan Jalisco COVID - 19, debemos continuar con las medidas de aislamiento social.</h3>
        </div>
        <br>
            <ul>
               <li><font size="4">Solo salir a la calle para lo estrictamente necesario.</font></li> 
               <li><font size="4">La población considerada de riesgo: adultos mayores, personas con hipertensión o diabetes, personas con síntomas de enfermedad respiratoria, no deben salir de su casa.</font></li>
               <li><font size="4">Solo pueden funcionar las actividades económicas definidas como esenciales o siguiendo el sistema de semáforo.</li>
               <li><font size="4">No podrá haber eventos, reuniones o congregaciones de más de 50 personas.</font></li>
               <li><font size="4">Queda prohibido el uso de espacios públicos como unidades deportivas, plazas y jardines municipales, equipamiento cultural y centros barriales o comunitarios.</font></li>
               <li><font size="4">Deberán guardarse en todo momento las medidas de salubridad y de sana distancia que todos conocemos.</font></li>
            </ul>
            <br>
            <font size="4">Es muy importante mantener la calma, y cuidarnos entre todos, cumplir con las recomendaciones sanitarias para evitar contagios, pero es igual de importante mantener la salud mental, poder estar bien con respecto a la cuarentena, te dejamos varias recomendaciones para cuidar tu salud mental y en caso de presentar algún síntoma, estas son las instituciones a las que puedes acudir:</font>
            <br>
            <br>
            <ul>
                <li><font size="4">Hospital General de Occidente (Zoquipan) y su adjunto el Hospital Geriátrico</font></li>
                <li><font size="4">Hospital Civil de Guadalajara “Dr. Juan I. Menchaca” y Hospital Civil “Fray Antonio Alcalde”</font></li>
                <li><font size="4">10 Hospitales Regionales y el Hospital Comunitario de Colotlán</font></li>
            </ul>
        <br>
    </section>
        <div align="center">
        <div style="background-color: #1096c7; height: 100px;">
        <br>
            <font size="4">En caso de que presentes algún síntoma de COVID-19 puedes marcar a este número</font><br><a href="tel:4491008445"> 33 3823 3220</a><br>
        </div>
        </div>
        <br>
        <br>
    <section class="borde">
    <div align="center">
        <table>
            <tr>
            	<td><img src="img/radar.png"></td>
                <td><img src="img/semaforo rojo.png" height="150px" width="200px"></td>
            </tr>
    </table>
    </div>
    <br>
    <br>
		<section class="borde">
			<div align="center" STYLE=" height: 35rem; overflow: auto;">
                <table  FRAME="void" RULES="rows"> 
                    <tr>
                        <td>Municipio</td>
                        <td>Casos</td>
                    </tr>
                    <?php  
                    $sql="SELECT municipio, casos FROM jalisco";
                    $result=mysqli_query($conexion, $sql);

                    while ($mostrar=mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td  STYLE="padding:1px;"><?php echo $mostrar['municipio']; ?></td>
                        <td align="center"><?php echo $mostrar['casos']; ?></td>
                    </tr>
                 <?php 
                }
                 ?>
                </table>
                <br>
                <a href="tel:3338233220">Telefono</a>
            </div>
            <br>
            <br>

         <p>¿Tienes COVID-19 y deseas aislarte fuera de casa para disminuir la probabilidad de contagio?</p>
            <br>
        <p>El Centro de Aislamiento Voluntario del Hotel Villa Primavera te brinda gratuitamente:</p>
            <br>
        <ul>
            <li>Aislamiento en habitaciones cómodas con wifi, baño y regadera privados, alimentos.</li>
            <li>Atención médica</li>
            <li>Asesoría nutricional y psicológica</li>
        </ul>
          <br>
        <a href="tel:+523335403001">33-3540-3001</a>
        <a href="tel:+523338233220">33-3823-3220</a>
          <br>
        <p>O envía un correo con tus datos (nombre, teléfono, formato de resultado)  a la dirección: <a href="mailto:centroaislamientocovid@gmail.com">centroaislamientocovid@gmail.com</a> </p>
          <br>
          <img src="img/centro covid.png" height="100%" width="30%">

        </section>
	</section>
</body>
</html>