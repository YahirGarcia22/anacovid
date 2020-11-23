<?php  
  $conexion=mysqli_connect('localhost','root','','covid');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aguascalientes</title>
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
        <h2 style="color:white" class="borde">COVID en Aguascalientes</h2>
    </div>

     <br>
    <br>
    <section class="borde">
    <div align="center">
        <table>
            <tr>
                <td><p class="borde-arriba">El virus que causa la COVID‑19 se transmite principalmente a través de las gotículas generadas cuando una persona infectada tose, estornuda o espira. Estas gotículas son demasiado pesadas para permanecer suspendidas en el aire y caen rápidamente sobre el suelo o las superficies.
                Usted puede infectarse al inhalar el virus si está cerca de una persona con COVID‑19 o si, tras tocar una superficie contaminada, se toca los ojos, la nariz o la boca.
            Aquí te dejamos unos números de atención que te pueden ayudar en caso de presentar algún síntoma.</p></td>
                <td><a href="telefonoayuda.php"><img src="img/telefono.PNG" height="135px" width="140px"></a></td>
            </tr>
    </table>
    </div>
    </section>
<br>


    <div align="center">
        <h3 class="borde-arriba centrar-texto grist">¿Como usar el cubrebocas correctamente?</h3>

        <br>
        <table class="centrar-texto" cellspacing="15" cellpadding="10" >
            <tr>
                <td width="300px" valign="top">
                    <p>Es importante LAVAR tus manos antes de colocar el cubrebocas correctamente.</p>
                </td>
                <td width="300px" valign="top">
                    <p>Cubrir nariz y boca correctamente asegurandose de que NO queden espacios entre la cara y el cubrebocas.</p>
                </td>
                <td width="300px" valign="top">
                    <p>Mientras estes usando el cubrebocas NO LO TOQUES</p>
                </td>
                <td width="300px" valign="top">
                    <p>CÁMBIALO cuando se humedezca ya que este puede ser un método de transporde para los virus y bacterias.</p>
                </td>
                <td width="300px" valign="top">
                    <p>NO lo reutilices.</p>
                </td>
                <td width="300px" valign="top">
                    <p>Cuando te lo estes quitando, EVITA tomarlo de la tela, mejor usa las ligas.</p>
                </td>
                <td width="300px" valign="top">
                    <p>Depositalo/Tiralo en un bote de basura con tapa.</p>
                </td>
                <td width="300px" valign="top">
                    <p>Lávate las manos o usa alcohol gel al 70%.</p>
                </td>
            </tr>
        </table>
    </div>
    
<br>
<br>    
    
    <section class="borde">
    <div align="center">
        <table >
            <tr>
                <td><img src="https://www.aguascalientes.gob.mx/coronavirus/img/mapa.svg"></td>
                <td><img src="https://www.aguascalientes.gob.mx/coronavirus/img/datos.svg"></td>
                <td><img src="img/naranja.png"></td>
            </tr>
        </table>
        <br>
        <br>
    </div>
    </section>
    <div align="center">
        <table>
            <tr>
                <td><img src="img/criterios.PNG"></td>
            </tr>
        </table>
<br>
    </div>
        <section class="borde">
            <div align="center" STYLE=" height: 50% ; overflow: auto;">
                <h2>Estadisticas por municipio</h2>
                <br>
                <table FRAME="void" RULES="rows"> 
                    <tr width="50%">
                        <td>Municipio</td>
                        <td>Casos</td>
                    </tr>
                    <?php  
                    $sql="SELECT municipio, casos FROM aguascalientes";
                    $result=mysqli_query($conexion, $sql);

                    while ($mostrar=mysqli_fetch_array($result)) {
                    ?>
                    <tr style="width: 50%">
                        <td><?php echo $mostrar['municipio']; ?></td>
                        <td align="center"><?php echo $mostrar['casos']; ?></td>
                    </tr>
                 <?php 
                }
                 ?>
                </table>
            </div>
            <br>
            <br>
            <div align="center">
                <font size="4">Es muy importante mantener la calma, y cuidarnos entre todos, cumplir con las recomendaciones sanitarias para evitar contagios, pero es igual de importante mantener la salud mental, poder estar bien con respecto a la cuarentena, te dejamos varias recomendaciones para cuidar tu salud mental</font>
            </div>
            <br>
            <table>
                <tr>
                    <td><ul type="square">
                        <li>Establece una dieta NUTRTIVA y SALUDABLE
                        <li>NO fumes
                        <li>Escucha música, lee un libro o juega
                        <li>APOYA a otras personas, se SOLIDARIO y EMPÁTICO
                    </ul></td>
                    <td class="borde-izq"><ul type="square">
                        <li>Haz ejercicio (Adultos 30 y 150 min y niños 1 hora)
                        <li>ACEPTA tus emociones y respira profundo hasta sentir calma
                        <li>LIMITA el consumo de alcohol y bebidas azucaradas
                        <li>Si estas e clases, no te estreces y mejor
                    </ul></td>
                </tr>
            </table>
            <br>
            <br>

        </section>
    </section>
</body>
</html>