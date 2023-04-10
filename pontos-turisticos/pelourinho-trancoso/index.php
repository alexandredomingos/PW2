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
                <img class="imageponto" src="../../assets/images/turistico/Pelourinho_Trancoso.jpg" alt="Castelo">
              </div>
            </div>
            <div class="col-md-7" id="defin">
                <div class="tituristico">
                    <h2 style="font-family: courier,arial,helvetica" class="tituloturistic">Pelourinho de Trancoso</h2>
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
            <h1 style="font-family: courier,arial,helvetica">Descrição do Pelourinho de Trancoso</h1>
          </div>
          <div class="texto">
          Monumento manuelino, contemporâneo do foral novo. O fuste é facetado, sobre quatro degraus e remata com colunelos que formam a gaiola, em número cinco. A cimeira é cónica e remata com uma esfera armilar. Considerado Monumento Nacional. <br>
          O Pelourinho de Trancoso localiza-se em frente à antiga Câmara Municipal, no largo de Trancoso, no centro da freguesia de Alvarenga, no município de Arouca, Distrito de Aveiro, Área Metropolitana do Porto, Região do Norte. <br>
          O Pelourinho de Trancoso (Alvarenga) encontra-se classificado como Imóvel de Interesse Público desde 11 de outubro de 1933 pelo Decreto nº 23.122. <br>
          Na época da sua construção, 1580 (ou 1590), conforme data nele inscrita, a freguesia de Alvarenga era sede de um pequeno concelho, composto por Alvarenga, Canelas e Janarde que seriam integradas no concelho de Arouca aquando da reforma administrativa de Passos Manuel em 1836.O foral, assinado por D. Manuel I deste concelho extinto data de 1514,de 2 de maio. <br>
          Monumento quinhentista, assente sobre uma base circular com três degraus, é constituído por uma coluna de fuste cilíndrico e liso, encimado por uma estrutura com gola, onde se inscreve o escudo nacional, datado de 1580 <br>
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