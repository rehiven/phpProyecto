<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, name, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recicraft</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mansalva|Turret+Road|Underdog&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/animate.css">
   <script src="js/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/eskju.jquery.scrollflow.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
        </script>
   <style>
       a:hover(){
           transition: 1s;
           transform: rotate(35deg);
       }
   </style>

</head>
<body>
    <section class="home col-12 col-md-8 ">
        <nav class="container navbar navbar-expand-lg fixed-top">
            <a class="navbar-brand col-md-2" href="#" style="position:absolute; top:10; left:10;">
                <img src="images/logo.png" alt="logo-recicraft" height="80" width="80">
                <h2 class=" wow wobble"data-wow-duration="3s"data-wow-delay="2s">Recicraft</h2>
            </a>
            <div class="col-md-4 offset-md-5"></div>
            <div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse col-md-7" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class='zoomIt nav-link' href="#contaminacion"style="color:white">Contaminación</a>
                        </li>
                        <li class="nav-item">
                            <a class='zoomIt nav-link' href="#que-hacemos"style="color:white">¿Qué hacemos?</a>
                        </li>
                        <li class="nav-item">
                            <a class='zoomIt nav-link' href="#equipo"style="color:white">Equipo</a>
                        </li>
                        <li class="nav-item">
                            <a class='zoomIt nav-link' href="#publicaciones"style="color:white">Manualidades</a>
                        </li>
                        <li>
                        <?php if(!empty($user)): ?>
                            <a class='zoomIt nav-link' href="login.php"style="color:white"><?= $user['name']; ?> </a>
                            <a class='zoomIt nav-link' href="logout.php"style="color:white">Logout</a>
                            <a class='zoomIt nav-link' href="adminImages.php"style="color:white">adminI</a>
                            <?php else: ?>
                             <li class="nav-item">
                            <a class='zoomIt nav-link' href="login.php"style="color:white">Logeo</a>
                             </li>
                            <?php endif; ?>
                        </li>
                          

                       

                    </ul>
                   
                </div>
            </div>
        </nav>
        <section class=" container main">
            <img class=" wow  zoomIn " data-wow-duration="3s" src="images/basura1.png  " alt="basura">
        </section>
        
    </section> 
   
    <section class=" container contamination scrollflow -slide-top -opacity  scrollflow -slide-bottom-opacity">
          
        <aside>
                <a name="contaminacion"style="color: black"></a>  
            <div class="imagen2 col-md-2 scrollflow -slide-top -opacity  scrollflow -slide-bottom-opacity">
                <img src="images/botella-2.png " onmouseover="this.width=100;this.height=370;" onmouseout="this.width=120;this.height=390;" alt="" height="400">
            </div>
        </aside>
        
        <article class="col-md-5 scrollflow -slide-top -opacity  scrollflow -slide-bottom-opacity">
            <h2 class="scrollflow -slide-top -opacity  scrollflow -slide-bottom-opacity wow rubberBand"data-wow-duration="3s"data-wow-delay="8s">Contaminación</h2>
            <p>Una de las principales consecuencias de la contaminación ambiental es el calentamiento global, también conocido como cambio climático, por el cual la temperatura del planeta va aumentando de manera progresiva, tanto la temperatura atmosférica como la de mares y océanos.
               La contaminación ambiental supone un riesgo para la salud de los seres vivos que habitan los ecosistemas contaminados, incluyendo a los seres humanos. Además, la tala indiscriminada, la explotación excesiva de los recursos naturales y la emisión de contaminantes al medio ambiente provoca la destrucción de ecosistemas. De esta forma, muchas especies de animales y plantas ven cómo su hábitat natural se va reduciendo cada vez más, pudiendo llegar a provocar incluso su extinción.
            </p>
            <a name="que-hacemos"style="color: black"></a>
        </article>
    </section>
    
    <div class="separador uno scrollflow -slide-top -opacity  scrollflow -slide-bottom-opacity wow shake" data-wow-duration="5s"data-wow-delay="3s"data-wow-iteration="3">
        <img  src="images/separador-1.png">
    </div>
   
    <section class="container info scrollflow -slide-top -opacity  scrollflow -slide-bottom-opacity">
        <article class="col-md-5 scrollflow -slide-top -opacity  scrollflow -slide-bottom-opacity">
            
            <h2 class="scrollflow -slide-top -opacity  scrollflow -slide-bottom-opacity  wow rubberBand"data-wow-duration="3s">¿Quiénes somos?</h2>
            <p> Recicraft es una empresa que apoya el medio ambiente y es aliada a los ecosistemas por lo que hoy día esta dedicada a la gestión integral de los residuos, en este caso las botellas plásticas, dándoles una disposición
                ambientalmente adecuada por medio de la creación de manualidades realizadas con este material, asi haciendo buen uso de la reutilización.
                Esta empresa se enfoca en brindar soluciones a los clientes basado en los principios de la excelencia, la responsabilidad social, calidad y mejora continua, los cuales se enfocan en la ética empresarial, el cumplimiento normativo, el cuidado del medio ambiente y la seguridad y salud de las personas.
            </p>
        </article>
        <aside>
            <div class="imagen2 col-md-2 scrollflow -slide-top -opacity  scrollflow -slide-bottom-opacity">
                <img src="images/botella-3.png" onmouseover="this.width=100;this.height=370;" onmouseout="this.width=120;this.height=390;" alt="" height="400">
            </div>
        </aside>
    </section>
    <div class="separador dos scrollflow -slide-top -opacity  scrollflow -slide-bottom-opacity wow shake"data-wow-duration="5s"data-wow-delay="5s"data-wow-iteration="3">
        <img src="images/separador-2.png">
    </div>
    <a name="equipo"style="color: black"></a>  

    <section class="container Equipo">
        <h2 class="scrollflow -slide-top -opacity  scrollflow -slide-bottom-opacity wow rubberBand"data-wow-duration="3s"data-wow-delay="2s">Nuestro Equipo</h2>
        <div class=" container usuarios scrollflow -slide-top -opacity  scrollflow -slide-bottom-opacity wow bounceInDown"data-wow-duration="2s">
            <div class="user uno">
                <img src="images/usuario1.png">
                <p>Felipe Puentes</p>
                <a href="#"><span>@Felipe</span></a>
            </div>
            <div class="user dos">
                <img src="images/usuario2.png">
                <p>Maira Diaz</p>
                <a href="#"><span>@MairaD</span></a>
            </div>
            <div class="user tres">
                <img src="images/usuario3.png">
                <p>Juan Linares</p>
                <a href="#"><span>@JJLinares</span></a>
            </div>
        </div>
        
    <a name="publicaciones"style="color: black"></a>  
    </section>

    <!-- Swiper -->
    <h2 class=" container scrollflow -slide-top -opacity  scrollflow -slide-bottom-opacity  wow rubberBand"data-wow-duration="3s" data-wow-delay="4s">Publicaciones</h2>
    <div class="swiper-container scrollflow -slide-top -opacity  scrollflow -slide-bottom-opacity">
        <div class="swiper-wrapper">

                            
            <?php 
                    $mysqli = new mysqli("localhost", "root", "", "php_proyecto");
                    if ($mysqli->connect_errno) {
                        printf("Conexión fallida: %s\n", $mysqli->connect_error);
                        exit();
                    }

                    $sql = "SELECT * FROM images";
                    $result = $mysqli->query($sql);
                     while($row = $result->fetch_assoc()){
                ?>
            
                <div class="swiper-slide"><img src="data:image/jpg;base64, <?php echo base64_encode($row['image']); ?>" alt=""><div><p></p></div></div>
            <?php
            }
            ?>
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

  <!-- Swiper JS -->
     <script src="js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
    <script>
         var sliderN=1;
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: sliderN,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
    </script>

    <section class=" container formulario scrollflow -slide-top -opacity  scrollflow -slide-bottom-opacity wow lightSpeedIn"data-wow-duration="3s" data-wow-delay="2s">
      <p><b>Envíanos tus imagenes!</b></p>

        <form class="col-md-8" action="uploadImages.php" method="POST" enctype="multipart/form-data">
        <input type="text" max-length="20" placeholder="Nombre" name="name">
        <input type="file" name="image" id="image">
        <button type="submit" name="submit"><b>Enviar</b></button>

      </form>
      
    </section>

    <footer>
        <div class="container foot">
                <section class="links wow  tada "data-wow-duration="5s" data-wow-interactive="100">
                        <a href="#"><img src="images/facebook.png" alt="" width="40"></a>
                        <a href="#"><img src="images/twitter.png" alt="" width="40"></a>
                        <a href="#"><img src="images/youtube.png" alt="" width="40"></a>
                    </section>
            
                    <div class="social">
                        <p>Copyright © Todos los Derechos Reservados</p>
                    </div>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>