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
                <img class="imageponto" src="../../assets/images/turistico/campo-militar-batalha-trancoso.jpg" alt="Castelo">
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
            <h1 style="font-family: courier,arial,helvetica">Descrição do Campo Militar</h1>
          </div>
          <div class="texto">Situado a 2 km do Centro Histórico, junto à ermida de São Marcos, corresponde ao espaço onde, a 29 de Maio de 1385, teve lugar a Batalha de Trancoso. Este confronto, que culminou com a vitória do exército liderado por Gonçalo Vasques Coutinho, alcaide de Trancoso, sobre o poderoso exército castelhano, constitui um dos episódios mais gloriosos e marcantes da História de Portugal, não só pela vitória alcançada, mas também pelo significado militar, político e simbólico que a mesma adquiriu no contexto da afirmação da Independência do Reino. Ainda que os estudos realizados permitam conhecer vários aspetos da batalha, tais como: a zona de posicionamento dos exércitos e a área onde se deu o confronto, até ao momento, as únicas marcas deste acontecimento visíveis no terreno, são as ruínas da capela medieval que D. João de Castela, como ato de vingança pela derrota sofrida, mandou incendiar, no decurso de outra invasão ao Reino Português.
              </div>
        </div>
      </section>   
      <section>
        <div class="col-md-12">
        <div class="container">
          <div class="title">
            <h1 style="font-family: courier,arial,helvetica">Sobre a Batalha de Trancoso</h1>
          </div>
          <div class="texto">A Batalha de Trancoso ocorreu no dia 29 de Maio de 1385,[1] entre forças Portuguesas e Castelhanas.

No contexto da crise de 1383-1385, ao final da Primavera de 1385, ao mesmo tempo em que D. João I de Castela invadia o país ao Sul, pela fronteira de Elvas, forças castelhanas invadiam a Beira por Almeida, passavam por Trancoso, cujos arrabaldes saquearam, até atingir Viseu, cidade aberta, também na ocasião saqueada e incendiada.

Ao retornarem da incursão com o esbulho, saiu-lhes ao encontro o Alcaide do Castelo de Trancoso, Gonçalo Vasques Coutinho, com as forças do Alcaide do Castelo de Linhares, Martim Vasques da Cunha e as do Alcaide do Castelo de Celorico, João Fernandes Pacheco. Estando os dois primeiros fidalgos desavindos à época, o terceiro promoveu a reconciliação de ambos, e assim concertados, com os respectivos homens de armas e as forças que conseguiram arregimentar, fizeram os arranjos para o combate.

De acordo com estudos que levaram a afixar o feriado municipal em 29 de Maio, ocorreu o encontro entre as forças de Castela e as de Portugal, no alto da Capela de São Marcos, em Trancoso. A sorte das armas sorriu para os nacionais, que desse modo recuperaram as posses, alcançando a liberdade dos cativos.

No mês seguinte, uma nova invasão de tropas castelhanas, sob o comando de D. João I de Castela em pessoa, voltou a cruzar a fronteira por Almeida e, de passagem pelo alto de São Marcos, incendiaram-lhe a Capela em represália. Passando por Celorico, a caminho de Lisboa, essas tropas foram derrotadas na batalha de Aljubarrota.

Reza a lenda local, registrada pela historiografia portuguesa seiscentista, que o próprio São Marcos apareceu por milagre como um cavaleiro na batalha, incitando os combatentes portugueses. Como testemunho do feito, teria ficado gravada, na rocha, uma das ferraduras de sua montaria.</div>
        </div>
      </section> 
      <footer class="text-white text-center text-lg-start footer" style="background-color: #23242a; position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;">
        <?php
          include '../../includes/footer.php';
        ?>
      </footer>  
    
</body>
</html>