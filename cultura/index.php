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
     <!-- About section one-->
  
</header>
<section class="py-5 bg-light" id="scroll-target"> <!-- bg-light-->
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6" id="img"><img class="img-fluid rounded mb-5 mb-lg-0" src="../assets/images/cultura/gastronomia.webp" alt="..." /></div>
            <div class="col-lg-6" id="tit">
                <div class="tit">
                <h2 class="fw-bolder">Gastronomia de Trancoso</h2>
                </div>
                <div class="texto1">
                <p class="lead fw-normal text-muted mb-0">Trancoso é uma cidade portuguesa pertencente ao distrito da Guarda, na província da Beira Alta, região do Centro (Região das Beiras) e sub-região da Beira Interior Norte, com cerca de 3 420 habitantes (2011), situada num planalto em que o ponto mais alto tem 939 m de altitude.

                Através da gastronomia de uma região revelam-se sabedorias seculares, usos, costumes e, sobretudo, imaginação que, as mais das vezes, nos fazem sentir o pulsar de uma vida, de uma família, de uma região, de um país…

E se uma região fosse apenas famosa pela culinária, certamente o Concelho de Trancoso ocuparia um lugar relevante, pois a sua gastronomia é extremamente variada. A geografia e as condições naturais influenciaram directamente o tipo de alimentação, da qual se destacam algumas especialidades regionais.
                   <ol>
                    <li>Bola de Carne</li>
                    <li>Bacalhau à S.Marcos</li>
                    <li>Sardinhas Doces de Trancoso</li>
                    <li>Bola de Ovos(Folar)</li>
                   </ol>
                    </div> 
                    
        </div>
    </div>
</section>
<!-- About section two-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="../assets/images/cultura/centrocultural.webp" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Centro Cultural</h2>
                <p class="lead fw-normal text-muted mb-0">O Centro Cultural de Trancoso abriu oficialmente em Junho de 2005 aos seus utilizadores. Este espaço dispõe de biblioteca (sala de adultos, sala infanto-juvenil, 6 computadores com ligação Internet de acesso livre), um espaço multi-funções (para reuniões e animação infantil) e uma área de exposições. Futuramente contará com uma fonoteca e um bar. O Centro Cultural tem os seguintes horários.</p>
                <b>Segunda a Sexta</b>
                <p>09h00 às 12h30 <br>

13h30 às 17h30</p>
                
               
            </div>
        </div>
    </div>
</section>
<section class="py-5 bg-light" id="scroll-target"> <!-- bg-light-->
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="../assets/images/cultura/centrocultural.webp" alt="..." /></div>
            <div class="col-lg-6">
                <h2 style="text-align: center;" class="fw-bolder">Algumas Festas e Romarias</h2>
                 
                <p class="lead fw-normal text-muted mb-0"><b>Aldeia Nova </b> <br>
                    Festa em Honra de Nossa Senhora dos Aflitos (Segunda Feira depois da Páscoa) <br>
                    Festa do Emigrante dias 10,11 de Agosto <br><br>

                    
                   <b> Ameal </b><br>
                    Festa em Honra de Nossa Senhora da Saúde (segunda feira depois da Páscoa) <br><br>
                    
                   <b> Avelal</b><br>
                    Festa em Honra de Santa Rita dia 22 de Maio<br><br>
                    
                   <b> Barrocal</b><br>
                    Festa em Honra de Nossa Senhora dos Remédios (2º fim de semana de Agosto)<br><br>
                    
                   <b>Carnicães</b><br>
                    Festa em Honra de Santo António dias 8,9 de Junho<br>
                    Festa do Pão, primeiro domingo de Agosto.<br><br>
        </div>
    </div>
</section>
<footer class="text-white text-center text-lg-start" style="background-color: #23242a;">
    <?php
      include '../includes/footer.php';
    ?>
  </footer> 
</body>
</html>