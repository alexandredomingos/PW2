<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header>
        <?php include '../../includes/navbar.php';
        ?>
    </header>
    <section class="pontoturistic">
        <div class="container">
          <div class="row row-cols-2">
            <div class="col-md-5" id="imageprin">
              <div class="imageturistico">
                <img class="imageponto" src="../../assets/images/turistico/antiga-casa-da-camara.jpg" alt="Castelo">
              </div>
            </div>
            <div class="col-md-7" id="defin">
                <div class="tituristico">
                    <h2 style="font-family: courier,arial,helvetica" class="tituloturistic">Campo Militar da Batalha de Trancoso</h2>
                    <div style="border-bottom: 5px solid black; margin-bottom: 20px;"></div>
                </div>
                <div class="textodescr">
                    <div class="topico">
                      <i class="fa-sharp fa-solid fa-phone-volume fa-xl" style="color: #d91212;"></i>
                      <p>+351 271 829 120 (Contanto Geral)</p>
                  </div>
                  <div class="topico">
                    <i class="fa-sharp fa-solid fa-earth-americas fa-xl" style="color: #d91212;"></i>
                    <a href="http://www.cm-trancoso.pt/"><p>www.cm-trancoso.pt/</p> </a>
                </div>
                <div class="topico">
                  <i class="fa-solid fa-location-dot fa-xl" style="color: #d91212;"></i>
                  <p>Rua Eduarda Lapa
                    6420-055 Trancoso</p>
              </div>
                  
                </div>

                </div>
            </div>

          </div>
        </div>
      </section>  
      <section class="pt-5">
        <div class="col-md-12">
        <div class="container">
          <div class="title">
            <h1 style="font-family: courier,arial,helvetica">Descrição da Antiga Casa da Camara</h1>
          </div>
          <div class="texto">Apesar de ser um edifício muito simples, no qual sobressai
apenas o brasão régio da fachada, detém um grande
simbolismo por ser o local das antigas Casas da Câmara,
Audiência e Cadeia, que estavam em construção no ano de
mil quatrocentos e noventa e oito. O imóvel actual decorre,
grosso modo, da reconstrução promovida em mil oitocentos e
oitenta e seis - oitenta e sete, para aí se instalaram os
mesmos serviços e outras repartições públicas. Cerca de
quarenta anos depois, na sequência da edificação dos novos
Paços do Concelho (mil novecentos e vinte), foi
profundamente remodelado, passando a alojar somente o
tribunal e a cadeia, até à inauguração do Palácio da Justiça,
em mil novecentos e setenta e um.
</div>
        </div>
      </section>   
        
      <footer class="text-white text-center text-lg-start" style="background-color: #23242a;">
        <?php
          include '../../includes/footer.php';
        ?>
      </footer>  
    
</body>
</html>