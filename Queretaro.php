<?php  
  $conexion=mysqli_connect('localhost','root','','covid');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Queretaro</title>
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
        <h2 style="color:white" class="borde"></h2>
        <section class="borde">
            <img align="right" src="img/naranja.png" width="100px">
            <img align="left" src="img/le.jpg" width="400px">
        </section>
    </div>
    
        
    <section class="borde">
        <br>
         <h1>¿Que es el coronavirus?</h1>
        <p>Los coronavirus son una familia de virus que causan enfermedades que van desde el resfriado común hasta enfermedades respiratorias más graves, circulan entre humanos y animales.
         Los más conocidos son el Síndrome Respiratorio Agudo Severo (SARS), y el Síndrome Respiratorio de Oriente Medio (MERS-CoV).
         El nuevo coronavirus SARS-CoV-2 causa la enfermedad COVD-19, que puede generar padecimientos leves a graves en personas de todo el mundo.</p><br>
     <h1>Sintomás</h1>
        <p>Los síntomas más comunes de la COVID-19 son fiebre, cansancio y tos seca. Algunos pacientes pueden presentar dolores, congestión nasal, rinorrea, dolor de garganta o diarrea.</p>    
           <div align="center"><img src="img/le.jpg" width="900"></div>
    	<section class="borde">
            <div align="center" STYLE=" height: 27rem; overflow: auto;">
                <table> 
                    <tr>
                        <td>Municipio</td>
                        <td>Casos</td>
                    </tr>
                    <?php  
                    $sql="SELECT municipio, casos FROM queretaro";
                    $result=mysqli_query($conexion, $sql);

                    while ($mostrar=mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $mostrar['municipio']; ?></td>
                        <td align="center"><?php echo $mostrar['casos']; ?></td>
                    </tr>
                 <?php 
                }
                 ?>
                </table>
            </div>
        </section>
         <center>
        <video autoplay="autoplay" loop=""> 

        <source src="https://www.queretaro.gob.mx/covid19/assets/base/media/video/vac.mp4"> </video><br><br>
            <section style="background-color:#1096c7;"><h1 class="titular-title font-weight-bold center font-primary font-normal" style="color:#fff;">ACTIVIDADES PERMITIDAS</h1>
            <p class="titular-sub-title text-white font-weight-bold center mb-5">A PARTIR DEL 28 DE SEPTIEMBRE</p>
            <p class="center text-white">Para ver las actividades da clic en los iconos o números. <a href="https://queretaro.gob.mx/covid19/transPDF/disposicionesAdmin.pdf" target="_blank" class="button button-mini button-border button-rounded button-pink"><span> DESCARGAR</span></a></p> </section><br>
             <div align="center"><img src="img/quere.jpg" width="1200"></div><br>



            
    </center>
    <table>
        <tr>
            <td> <img src="img/mas.jpg" width="900"></td>
            <td><h1>INFORMACIÓN COMPLEMENTARIA</h1><br>
                <h2>Panorama Epidemiológico</h2>
               El panorama epidemiológico permite identificar el comportamiento de la COVID-19 en el estado en las variables de tiempo, cuando inició la transmisión y como se va comportando principalmente representado en la curva epidémica; lugar, como se distribuye en los municipios del Estado; persona, los casos y defunciones</td>

        </tr>
    </table>
    </section>
    <br>
<div style="background-color: #1096c7; height: 200px;">
        <div class="borde">
            <table>
                <tr><td><img align="left" src="img/le.jpg" width="400px"></td></tr>
                <tr><td><h4>Oficinas:
             Luis Pasteur Nte. Esquina 5 de Mayo S/N
              Col. Centro Histórico, C.P. 76000</h4><br>
            <h4>LÍNEA DE ATENCIÓN:(442)1015205</h4><br>
            <h4>COVID19 © 2020 PODER EJECUTIVO DEL ESTADO DE QUERÉTARO .</h4></td></tr>
            </table>
        
        
        </div>
    </div>
</body>
</html>