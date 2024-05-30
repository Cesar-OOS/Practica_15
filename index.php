<?php
function calcula_masa() {
    $pi = 3.141592;
    $constante = 6.67430E-11;
    $distancia = 3.84E8;
    $periodo = 2360448;
    $primeraParteA = 4 * ($pi * $pi);
    $segundaParteA = $distancia * $distancia * $distancia;
    $parteA = $primeraParteA * $segundaParteA;
    $segundaParteB = $periodo * $periodo;
    $parteB = $constante * $segundaParteB;
    $masa = $parteA / $parteB;
    return $masa;
}

$masa_tierra = calcula_masa();
?>

<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/stem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.html">Evaluación</a></h1>
    </header>
    <section id="contenedor">
      <section class="problema">
        <h2>Problema: Calcular la masa de la Tierra</h2>
        <p>Descripción:</p>
        <p>El período orbital de la Luna sobre la Tierra es 27.32 días y la distancia entre ambos es de 3.84×10^8 metros<br></p>
      </section>
      <section class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
          <img class="imgProblema" src="images/tierra.png" alt="Esquema del problema">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        <p>G = Constante Gravitacional</p>
        <p>T = Periodo Orbital</p>
        <p>r = Distancia</p>
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        <p>Periodo Orbital T = 27.32 días o 2360448 segundos.</p>
        <p>Distancia = 3.84×10^8 metros.</p>
        <p>Constante Gravitacional = 6.67430×10^−11 m³ kg⁻¹ s⁻².</p>
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>La masa de la Tierra es:</p>
        <p>Masa de la tierra = (4π² / G) * (r³ / T²)</p>
      </section>
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA">
            <?php
            echo "La tierra tiene una masa de: " . number_format($masa_tierra, 2, '.', '') . " kg";
            ?>
        </div>
      </section>
    </section>
    <footer class="pie">
    </footer>
  </section>
</body>
</html>
