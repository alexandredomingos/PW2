<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Trancoso</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .carousel-indicators .active {
      background-color: red;
    }
      </style>
</head>
<body>
    <header>
    <?php
    include 'includes/navbar.php';
    ?>

    </header>

    <section class="slider">
        <div class="col-md-12 title">
            <h3 class="titulo">Algumas fotos de Trancoso</h3>
        </div>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide slider1" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/trancoso1.webp" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/trancoso2.webp" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/trancoso3.webp" alt="Third slide">
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section class="about-section pt-130 pb-80">
      <div class="container">
          <div class="row align-items-center introd">
            <div class="col-md-12 title">
              <h3 class="titulo">Uma pequena Introdução</h3>
            </div>
              <div class="col-md-6">
                  <div class="intro-image">
                      <img class="inicialimg" style="max-width:400px;" src="assets/images/mapa.webp" alt="Mapa">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="introtext">
                     
                      <p>Trancoso atualmente é uma cidade, mas até 2004 era uma aldeia. Trancoso fica localizado no distrito da Guarda, no Norte de Portugal. Trancoso tem 21 freguesias</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <footer class="text-white text-center text-lg-start" style="background-color: #23242a;">
<?php
include 'includes/footer.php';
?>
</footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>