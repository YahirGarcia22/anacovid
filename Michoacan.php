<?php  
  $conexion=mysqli_connect('localhost','root','','covid');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Michoacan</title>
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
        <h2 style="color:white" class="borde">COVID en Michoacan</h2>
    </div>
    <section class="borde">
    	<div align="center">
    <div class="centrar-texto" style="background-color: #FBFBFB;">
<h2 style="margin-bottom: 0 !important;">Concientización<br>
Trabajando juntos por Michoacán.</h2>
<small style="font-size: 15px; color: #c40e91; margin-bottom: 66px;">Evaluaremos el comportamiento de la epidemia y determinaremos el nivel de contagio en los municipios.</small></div></div></div>
<table cellspacing="20" cellpadding="20">
	<td width="320px" height="40px"><img src="img/roja.gif" style="max-width: 80%;" alt="" >
	<br>
	<h4>Riesgo <br>máximo</h4>
	</td>
	<td width="320px" height="80px"><div class="do-btn"><img src="img/amarilla.gif" class="img-fluid" style="max-width: 80%;" alt="" >
	<br>
	<h4>Riesgo <br>alto </h4></td>
	<td width="320px" height="80px"><div class="do-btn"><img src="img/verde.gif" class="img-fluid" style="max-width: 80%;" alt="" >
	<br>
	<h4>Riesgo <br>intermedio</h4>
	</td>
	<td width="320px" height="80px"><div class="do-btn"><img src="img/blanca.gif" class="img-fluid" style="max-width: 80%;" alt="" >
	<br>
	<h4>Riesgo <br>controlado</h4>
	</td>
	<td width="320px" height="80px"><div class="do-btn">
	</div></td>
<br>
<br>
<table style="">
  <td><div class="centrar-texto">
    <a href="https://covid19.srs.care/#/municipios" target="_blank"><img src="img/nivel-municipios.jpeg" class="img-fluid" alt="riesgo covid municpios michoacan" width="870px"></a>
  </div></td>
</div></table></table></div></div></section>
</div>
		<section class="borde">
			<div align="center" STYLE=" height: 35rem; overflow: auto;">
			    <table FRAME="void" RULES="rows"> 
			        <tr>
			            <td STYLE="padding:2px;">Municipio</td>
			            <td STYLE="padding:2px;">Confirmados</td>
			            <td STYLE="padding:2px;">Recuperados</td>
			            <td STYLE="padding:2px;">Defunciones</td>
			            <td STYLE="padding:2px;">Sospechosos</td>
			        </tr>
			        <?php  
			        $sql="SELECT municipio, confirmados, recuperados, defunciones, sospechosos FROM michoacan";
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
		
	<br>
	<br>
<table cellspacing="20" cellpadding="20" style="background-color: #DA70D6">
	<td><a class="textoRosa" target="_blank" href="https://michoacan.gob.mx/"><img src="https://michoacan.gob.mx/corry/logos/mich.png" style="max-width: 480px;" class="img-fluid" alt="gobierno de michoacan">
		<p style="padding-top: 40px;">Gobierno de Michoacán</p></a>
	</td>
	<td><a class="textoRosa" target="_blank" href="http://salud.michoacan.gob.mx/"><img src="https://michoacan.gob.mx/corry/logos/sub/salud.png" style="max-width: 480px;" class="img-fluid">
		<p>Secretaría de Salud de Michoacán</p></a>
	</td>
	<br>
		<td><a class="textoRosa" target="_blank" href="http://michoacancoronavirus.com/"><img src="img/covid.jpg" style="max-width: 120px;" class="img-fluid" alt="secretaria de salud michoacan">
		<p>Sitio oficial Coronavirus en Michoacán</p></a>
	</div></td>
</div>
<div class="clearfix"></div>
<br><br><br><br>

</section>
</div>

         
</body>
</html>