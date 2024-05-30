<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="stem.css"/>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/codigo.js"></script>
    <script>
        function calcula_masa(){
            var constante = 6.67430E-11;
            var distancia = 3.84E8;
            var periodo = 2360448;
            var primeraParteA = 4 * (Math.PI * Math.PI);
            var segundaParteA = distancia * distancia * distancia;
            var parteA = primeraParteA * segundaParteA;
            var segundaParteB = periodo * periodo;
            var parteB = constante * segundaParteB;
            var masa = parteA / parteB;
            var d = document.getElementById("resultadoA");
            d.innerHTML = "La tierra tiene una masa de: " + masa + " kg";
        }
    </script>
</head>
<body>
  <section class="wrapper">
    <section id="contenedor">
      <section class="problema">
        <h2>Problema: Calcular la masa de la Tierra</h2>
        <p>Descripción:</p>
        <p>El período orbital de la Luna sobre la Tierra es 27.32 días y la distancia entre ambos es de 3.84×10^8 metros<br></p>
      </section>
      <section class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/tierra.png">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        G = Constante Gravitacional <br>
        T = Periodo Orbital <br>
        r = Distancia <br>
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        Periodo Orbital T = 27.32 días o 2360448 segundos. <br> 
        Distancia = 3.84x10^8 metros. <br>
        Constante Gravitacional = 6.67430×10^−11 m³ kg⁻¹ s⁻².
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>La masa de la Tierra es:<br>
        Masa de la tierra = (4π^2 / G) * (r^3 / T^2)
        <button onclick="calcula_masa();">Presiona para calcular</button>
      </section>
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"></div>
      </section>
    </section>
  </section>
</body>
</html>
