<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>

    <!----- CSS ------>
    <link rel="stylesheet" href="style/style.css">

    <!----- Font Awesome ----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
</head>
<body>

  <!---------- S BACKGROUND ------------->
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
    <defs>
        <linearGradient id="bg">
            <stop offset="0%" style="stop-color:rgba(14, 186, 230, 0.459)"></stop>
            <stop offset="50%" style="stop-color:rgba(12, 223, 238, 0.877)"></stop>
            <stop offset="100%" style="stop-color:rgba(10, 226, 241, 0.466)"></stop>
        </linearGradient>
        <path id="wave" fill="url(#bg)"
            d="M-363.852,502.589c0,0,236.988-41.997,505.475,0s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
    </defs>
    <defs>
        <linearGradient id="bg2">
            <stop offset="0%" style="stop-color:rgba(255, 255, 255, 0.356)"></stop>
            <stop offset="50%" style="stop-color:rgba(255, 255, 255, 0.808)"></stop>
            <stop offset="100%" style="stop-color:rgba(255, 255, 255, 0.562)"></stop>
        </linearGradient>
        <path id="wave2" fill="url(#bg2)"
            d="M-363.852,502.589c0,0,236.988-41.997,505.475,0s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
    </defs>
    <g>
        <use xlink:href='#wave' opacity=".3">
            <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="10s" calcMode="spline"
            values="270 230; -334 180; 270 230" keyTimes="0; .5; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
            repeatCount="indefinite" />
        </use>
        <use xlink:href='#wave' opacity=".6">
            <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="8s" calcMode="spline"
            values="-270 230;243 220;-270 230" keyTimes="0; .6; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
            repeatCount="indefinite" />
        </use>
        <use xlink:href='#wave2' opacity=".9">
            <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="6s" calcMode="spline"
            values="0 230;-140 200;0 230" keyTimes="0; .4; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
            repeatCount="indefinite" />
        </use>
    </g>
</svg>

  <!---------- E BACKGROUND ------------->


    <!-------S Nav bar------>
    <header class="header">
        <div class="logo">
            <h3>My Page</h3>
        </div>
    <nav>
        <div class="nav-links">
            <li><a href="pages/blog.html">Blog</a></li>
            <li><a href="pages/portfolio.html">Cases</a></li>
        </div>
    </nav>
        <a href="#content2" class="btn"><button>Contact</button></a>

        <a onclick="openNav()" class="menu" href="#" ><button>Menu</button></a>

        <div class="overlay" id="mobile-menu">
            <a onclick="closeNav()" href="" class="close">&times;</a>
            <div class="overlay-content">
                <a href="pages/blog.html">Blog</a>
                <a href="pages/portfolio.html">Cases</a>
                <a href="#content2">Contact</a>
            </div>
        </div>
    </header>
    <!-------E Nav bar------>

    <!-- About -->
  <section id="content1">
    <main class="about">
            <img src="img/francisco.jpeg" class="photo-profile" alt="">
        <div class="name">
            <h1>Francisco Gómez</h1>
        </div>
        <div class="introduction">
            <p>I am Francisco Gómez a ambientalist lawyer with more than a decade of experience in the defense of environmental rights. Graduated from Universidad de Los Andes, I have dedicated my career to fight for environmental justice and advising organizations on the implementation of sustainable practices. My work focuses on creating policies that balance economic development with environmental preservation.</p>
        </div>
    </main>
    <!-- About -->

    <!-- S Circles -->
    <main class="circles" download="Reporte">
        <a href="pdf/chamba.pdf">
        <div class="serch">
            <i class="fa fa-download"></i>
            <b><p>unload</p></b>
        </div>
        </a>
        <a href="#content3">
        <div class="map">
            <i class="fa fa-map"></i>
            <b><p>map</p></b>
        </div>
        </a>
        <a href="pages/portfolio.html">
        <div class="portfolio">
            <i class="fa fa-briefcase"></i>
            <b><p>portfolio</p></b>
        </div>
        </a>
    </main>
  </section>  
    <!-- E Circles --> 
  
    <!-- S Contacto -->
    <section id="content2" class="content2">
      <div class="contenedor">
        <div class="formulario">
          <form action="index.php" method="post">
            <h2>Contactame</h2>

            <div class="input-contenedor">
              <i class="fa-solid fa-user"></i>
              <input type="text" name="name" required>
              <label for="#">Nombre</label>
            </div>

            <div class="input-contenedor">
              <i class="fa-solid fa-envelope"></i>
              <input type="email" name="email" required>
              <label for="#">Email</label>
            </div>

            <div class="input-contenedor">
              <i class="fa-solid fa-message"></i>
              <input type="text" name="mensaje" required>
              <label for="#">Mensaje</label>
            </div>

            <button type="submit">Enviar</button>

          </form>
      </div>
    </section>

  <?php include("config/mail.php"); ?>

    <!-- FOOTER -->
    <footer class="pie-pagina">
      <div class="grupo-1">
          <div class="box">
            <section>
              <figure id="content3">
                  <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6047649054462!2d-74.1302794191981!3d4.664346950274804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9c7c183b5caf%3A0xac7d29a15cf82ed1!2sHayuelos%20Centro%20Comercial!5e0!3m2!1ses-419!2sco!4v1702943999972!5m2!1ses-419!2sco"
                  width="400" height="300" style="border: 0" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </figure>
            </section>
          </div>
          <div class="box">
              <h2>DIRECCION</h2>
              <h2>TELEFONO</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, beatae.</p>
          </div>
          <div class="box">
              <h2>SÍGUEME</h2>
              <div class="red-social">
                  <a href="#" class="fab fa-facebook-square"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-github"></a>
              </div>
          </div>
      </div>
          <div class="grupo-2">
              <small>&copy; 2024 <b>Abogado</b> - Todos los Derechos Reservados.</small>
          </div>
    </footer>



    <!-- <main class="contacto_main"> -->
        <!-- <div class="custom-shape-divider-top-1703100869">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
              d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
              class="shape-fill"></path>
          </svg>
        </div> -->
        <!-- <div class="contacto">
        <section id="content2">
          <div class="formulario">
            <form action="http://localhost:3000/enviar-correo" method="post" id="form">
              <div class="form">
                <h1>Formulario de contacto</h1>
                <div class="grupo">
                  <input type="text" name="" id="name" required /><span class="barra"></span>
                  <label for="">Nombre</label>
                </div>
                <div class="grupo">
                  <input type="email" name="" id="email" required /><span class="barra"></span>
                  <label for="">Email</label>
                </div>
                <div class="grupo">
                  <input type="text" name="" id="subject" required /><span class="barra"></span>
                  <label for="">Asunto</label>
                </div>
                <div class="grupo">
                  <textarea name="message" id="message" rows="8" required></textarea><label for="">Mensaje</label>
                </div>
                <button type="button" onclick="mostrarPopup()">Enviar</button>
              </div>
            </form>
          </div>
        </section>
    
          <div class="popup inactive" id="popup">
            <div class="popup-content">
              <span class="cerrar-popup" onclick="cerrarPopup()">&times;</span>
              <p>¡Formulario enviado con éxito!</p>
            </div>
          </div>
    
          <section id="content3">
            <div class="contacto_info">
                <div class="maps">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6047649054462!2d-74.1302794191981!3d4.664346950274804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9c7c183b5caf%3A0xac7d29a15cf82ed1!2sHayuelos%20Centro%20Comercial!5e0!3m2!1ses-419!2sco!4v1702943999972!5m2!1ses-419!2sco"
                    width="400" height="300" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="textContacto">
                    <ul>
                      <li>Direccion</li>
                      <li>Telefono</li>
                      <li>Horario</li>
                    </ul>
                </div>
            </div>
          </section>
    </main> -->
    <!-- E Contacto -->

    <script type="text/javascript" src="style/nav.js"></script>
</body>
</html>