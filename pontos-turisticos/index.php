<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <header>
        <?php
        include '../includes/navbar.php';
        ?>
    </header>
    <section class="gallery-section"> 
        <!-- <div class="btn-group">
            <button type="button" class="btn btn-primary" data-filter="1">Filtro 1</button>
            <button type="button" class="btn btn-primary" data-filter="2">Filtro 2</button>
            <button type="button" class="btn btn-primary" data-filter="*">Todos</button>
          </div> -->
          <div class="container">
            <div class="col">
              <div class='row row-cols-1 row-cols-md-3 g-4'>
                <div class="card topic" style=" width: 20rem;">
                  <img src="../assets/images/turistico/antiga-casa-da-camara.jpg" class="card-img-top" alt="Casa Da Camara" style="width: 320px;height: 320px;">
                  <div class="card-body">
                    <h5 class="card-title">Antiga Casa da Camara</h5>
                    
                   <a href='antiga-casa-da-camara' class='btn btn-success'>Ver Mais</a>
                  </div>
                </div>
                <div class="card topic" style=" width: 20rem;">
                  <img src="../assets/images/turistico/campo-militar-batalha-trancoso.jpg" class="card-img-top" alt="Campo Batalha Trancoso" style="width: 320px;height: 320px;">
                  <div class="card-body">
                    <h5 class="card-title">Campo Militar da Batalha de Trancoso</h5>
                    
                   <a href='campo-militar-trancoso' class='btn btn-success'>Ver Mais</a>
                  </div>
                </div>
                <div class="card topic" style=" width: 20rem;">
                  <img src="../assets/images/turistico/castelo.jpg" class="card-img-top" alt="Castelo Trancoso" style="width: 320px;height: 320px;">
                  <div class="card-body">
                    <h5 class="card-title">Castelo</h5>
                   <a href='castelo' class='btn btn-success'>Ver Mais</a>
                  </div>
                </div>
                <div class="card topic" style=" width: 20rem;">
                  <img src="" class="card-img-top" alt="foto perfil" style="width: 320px;height: 320px;">
                  <div class="card-body">
                    <h5 class="card-title">Nome</h5>
                    <p class="card-text">Descr</p>
                   <a href='#' class='btn btn-success'>Ver</a>
                  </div>
                </div>

              </div>
            </div>
          </div>

    </section>

    <script>
        $(document).ready(function() {
  $('[data-filter]').on('click', function() {
    const filterValue = $(this).attr('data-filter');
    $('[data-filter-item]').hide();
     $('[data-filter-item]').css('display', 'none');
    if (filterValue === '*') {
      $('[data-filter-item]').show();

    } else {
      $('[data-filter-item="' + filterValue + '"]').show();
      $('[data-filter-item="' + filterValue + '"]').css('display', 'block');
    }
  });
});
    </script>
</body>
</html>