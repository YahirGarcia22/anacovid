<?php  
  $conexion=mysqli_connect('localhost','root','','covid');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Zacatecas</title>
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

<section>
<div align="center">
 <table>
 	<tr>
<td><img src="https://covid19.zacatecas.gob.mx/mapa/imagen.php" width="540px"><td>
<td><img src="img/panorama.jpg" width="540px"></td>
</tr></table>
</table>
</div>
</section>
 <div style="background-color: #1096c7; height: 100px;">
        <br>
        <br>
        <h2 style="color:white" align="center">Panorama de Coronavirus por Municipio</h2>
    </div>
<br>
	<section class="borde">
		<section class="borde">
			<div align="center" STYLE=" height: 35rem; overflow: auto;">
			    <table FRAME="void" RULES="rows"> 
			        <tr>
			            <td STYLE="padding:2px;">Municipio</td>
			            <td STYLE="padding:2px;">Confirmados</td>
			            <td STYLE="padding:2px;">Recuperados</td>
			            <td STYLE="padding:2px;">Defunciones</td>
			        </tr>
			        <?php  
			        $sql="SELECT municipio, confirmados, recuperados, defunciones FROM zacatecas";
			        $result=mysqli_query($conexion, $sql);

			        while ($mostrar=mysqli_fetch_array($result)) {
			        ?>
			        <tr>
			            <td STYLE="padding:2px;"><?php echo $mostrar['municipio']; ?></td>
			            <td align="center"><?php echo $mostrar['confirmados']; ?></td>
			            <td align="center"><?php echo $mostrar['recuperados']; ?></td>
			            <td align="center"><?php echo $mostrar['defunciones']; ?></td>
			        </tr>
			     <?php 
			 	}
			     ?>
			    </table>
			</div>
		</section>
	</section>
	<br>
	<br>
	<br>
	<section>
	<div align="center">
		<table><p style="color:#1096c7">RECOMENDACIONES</p>
			<tr>
			<td><img src="img/estornudo1.jpg" width="380px"></td>
			<td><img src="img/cubrebocas.jpg" width="380px"></td>
			<td><a href="https://covid19.zacatecas.gob.mx/"><img src="img/infOficial.png" width="380px"></a></td>
		</tr></table></div></section>
	<br>
	<br>
	<div style="background-color: #1096c7; height: 100px;">
        <br>
        <br>
        <h3 style="color:white" align="center">Es de suma importancia que todos los Zacatecanos pongamos de nuestra parte para que pronto volvamos a divertirnos juntos. Ponte en acción y obedece las medidas de seguridad implementadas en el estado de Zacatecas. Te cuidas tú, nos cuidamos todos!</h3>
    </div>

</body>
</html>