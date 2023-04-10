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
                <img class="imageponto" src="../../assets/images/turistico/castelo.jpg" alt="Castelo">
              </div>
            </div>
            <div class="col-md-7" id="defin">
                <div class="tituristico">
                    <h2 style="font-family: courier,arial,helvetica" class="tituloturistic">Castelo de Trancoso</h2>
                    <div style="border-bottom: 5px solid black; margin-bottom: 20px;"></div>
                </div>
                <div class="textodescr">
                    <div class="topico">
                      <i class="fa-sharp fa-solid fa-phone-volume fa-xl" style="color: #d91212;"></i>
                      <p>+351 271 829 120</p>
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
            <h1 style="font-family: courier,arial,helvetica">Descrição do Castelo</h1>
          </div>
          <div class="texto">Trata-se de um castelo medieval que foi construído sobre as ruinas de um castro pré-romano. Foi importante para a defesa dos ataques muçulmanos em 1140 e 1155, e castelhanos em 1384.

            Esta edificação militar é formada por uma forte linha de muralhas ao longo das quais se encontram distribuídos cinco torreões, tendo uma das torres servido de capela aos defensores, tendo por orago Santa Bárbara. Em 1160 foi alvo de uma reedificação da responsabilidade de D. Afonso Henriques e mais tarde restaurada, respectivamente, em 1282, 1377 e 1530. É classificado desde 1921 como Monumento Nacional e viu as suas torres reconstituídas em 1940.
            
            A sua Torre de Menagem de origem provavelmente árabe é invulgar pela sua forma piramidal.
            
            A muralha medieval, edificada por D. Dinis, no ano de 1282, está coroada por merlões que terminam em lancetas. As torres de planta quadrangular, que as defendiam colocadas ao longo destas muralhas eram em número de quinze. Das quatro portas existentes salientam-se as de El Rei e as do Prado encimadas por pedra de armas com as cinco quinas. No Séc. XIX os arcos destas portas foram cortados para melhorar o acesso das carruagens apresentando actualmente a forma de arcos abatidos. As muralhas incluem ainda três postigos destacando-se o "Olhinho de Sol" e o "Boeirinho".</div>
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