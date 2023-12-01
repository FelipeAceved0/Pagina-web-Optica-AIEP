<html>

<head>

    <title>VisionOptica</title>
    <link rel="stylesheet" href="miestilo.css">
    <script src="https://kit.fontawesome.com/ae4f7efdcd.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="interior">
        <header>

            <a href="" class="logo"><img src="images\logo2.png"></a>

    </div>
    </header>
    <nav class="navegacion">
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="reservadehora.html">reserva de horas</a></li>
            <li><a href="Productos.html">Productos</a></li>
            <li><a href="sustentabilidad.html">Sustentabilidad</a></li>
            <li><a href="sucursale.html">Sucursales</a></li>
            <li><a href="Contacto.html">Contactanos</a></li>
        </ul>
    </nav>
    <main class="main">
        <section class="section">
            <div class="contacto">
    
            <h1>Reserva de hora</h1>


   
    <form class="cont"method="post" action="enviarHora.php" autocomplete="on"> 
       <label> Nombre: </label><br>
        <input type="text" name="nombre" id="nombre" placeholder="Ingrese su(s) nombre(s)" maxlength="50" required autofocus/><br><br>
        <label> Su numero de telefono:</label><br>
        <input type="tel" name="telefono" id="telefono" placeholder="912345678" maxlength="13" pattern="[0-9]{1}[0-9]{4}[0-9]{4}" required ><br><br>
        <label> Email:</label><br>
        <input type="email" name="correo" id="correo" size="40" maxlength="40" placeholder="Ingrese su correo" required/><br><br>
        <label> Dia de atencion: </label><br>
        <input type="date" name="fecha" id="fecha" min="2023-01-01" max="2024-12-31"  /><br><br>
        <label for="sucursal">Sucursal</label><br>
        <select name="sucursal" id="sucursal"name="sucursal" required>
        <option value="Av. Las Parcelas 5722">Av. Las Parcelas 5722</option>
        <option value="Ureta Cox 497">Ureta Cox 497</option>
        <option value="Av. Departamental 961-975">Av. Departamental 961-975</option>
        <option value="La florida">La florida</option>
        </select required><br><br>
        <div class="mostrarprecio">
        <input type="checkbox" id="checkbox" name="checkbox" onchange="mostrarPrecio()">
        <label for="checkbox">Agendar hora con lente optico incluido?</label><br>
         <p id="mensaje" class="mensaje" name="mensaje">El precio es de $7000.</p>
        </div>
        <input type="submit" name="submit" value="ENVIAR"/><br><br><br><br><br><br><br><br><br><br><br>
       
      </form>
      <script>
        function mostrarPrecio() {
          var checkbox = document.getElementById("checkbox");
          var mensaje = document.getElementById("mensaje");
          
          if (checkbox.checked) {
            mensaje.innerHTML = "El producto es gratuito.";
          } else {
            mensaje.innerHTML = "El precio es de $7000.";
          }
        }
      </script>
            </div>
       
      
     
      <?php
      error_reporting(0);
include("enviarHora.php")
?>
</section>

    </main>
    <br><br><br><br><br> <br><br><br><br><br> <br><br><br><br><br> <br><br><br><br><br>
    <footer class="footer">
        <div class="grupo1">
            
                <div class="box">
                    <h3>Síguenos</h3>
                    <div class="red-social">
                        <h3><a href="#" class="fa fa-whatsapp"></a></h3>
                        <h3><a href="#" class="fa fa-facebook"></a></h3>
                        <h3><a href="#" class="fa fa-instagram"></a></h3>
                        <h3><a href="#" class="fa fa-twitter"></a></h3>
                    </div>
                </div>
                <div class="box">
                    <h3>Servicios</h3>
                    <p>Visitas a domicilio</p>
                    <p>Convenios con empresas</p>
                    <p>Garantia de 3 meses</p>
                    <p>Operativos oftalmológicos</p>
                </div>
                <div class="box">
                    <h3>Contactos</h3>
                    <p><a href="#" class="fa fa-whatsapp"></a>+569 72406659 Av. Las Parcelas 5722</p>
                    <p><a href="#" class="fa fa-whatsapp"></a>+569 97082823 Ureta Cox 497</p>
                    <p><a href="#" class="fa fa-whatsapp"></a>+569 66708261 Av. Departamental 961-975</p>
                    <p><a href="#" class="fa fa-whatsapp"></a>+569 32433547 La florida</p>
                </div>


            

        </div>

        <div class="grupo2">
            <small>&copy; 2023 <b>VisionOptima</b> - Todos los Derechos Reservados.</small>


    </footer>
</body>

</html>r