<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Music-Frank</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>Music-Frank<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/inicio">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog">Blog</a>
              </li>
              @yield('Barra')
              <li class="nav-item">
                <a class="nav-link" href="contacto">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout">Cerrar Secion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Detalles del Post</h4>
                <h2>¡Bienvenido!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      @yield('Imagen')
                    </div>
                    <div class="down-content">
                      @yield('Titulo')
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item comments">
                    <div class="sidebar-heading">
                      <h2>3 comentarios</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li>
                          <div class="author-thumb">
                            <img src="assets/images/comment-author-01.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>Charles Kate<span>May 16, 2020</span></h4>
                            <p>Excelente contenido de información.</p>
                          </div>
                        </li>
                        <li class="replied">
                          <div class="author-thumb">
                            <img src="assets/images/comment-author-02.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>Thirteen Man<span>May 22, 2020</span></h4>
                            <p>La información es clara sobre el tema muy bien.</p>
                          </div>
                        </li>
                        <li>
                          <div class="author-thumb">
                            <img src="assets/images/comment-author-03.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>Belisimo Mama<span>May 16, 2020</span></h4>
                            <p>Tener el conocimiento de esta información podria servirme en un futuro, gracias.</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Ultimos Comentarios</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a>
                          <h5>Interesante tu blog como portafolio de Evidencias, muy bueno y muy interesante</h5>
                          <span>Ene 28, 2022</span>
                        </a></li>
                        <li><a>
                          <h5>Buena información y un gran blog el que hiciste, mucha suerte y gracias por la información</h5>
                          <span>Ene 18, 2022</span>
                        </a></li>
                        <li><a>
                          <h5>Me gusto el diseño de tu blog, es muy bueno y muy interesante excelente trabajo</h5>
                          <span>Ene 10, 2022</span>
                        </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Trabajos Realizados</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">- Hobbies/F</a></li>
                        <li><a href="#">- Uso Orientado a Objetos</a></li>
                        <li><a href="#">- Juego Clasico</a></li>
                        <li><a href="#">- QSMN/F</a></li>
                        <li><a href="#">- Batalla Naval</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Lenguajes de Programación</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">Java</a></li>
                        <li><a href="#">JavaScript</a></li>
                        <li><a href="#">Php</a></li>
                        <li><a href="#">C++</a></li>
                        <li><a href="#">C#</a></li>
                        <li><a href="#">Laravel</a></li>
                        <li><a href="#">C</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="https://www.facebook.com/profile.php?id=100064101466027">Facebook</a></li>
              <li><a href="https://mobile.twitter.com/arlc29">Twitter</a></li>
              <li><a href="https://instagram.com/frankrosfo?utm_medium=copy_link">Instagram</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
                <p>Desarrollada sin fines lucrativos & con fines estudiantiles.| Music-Frank: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
