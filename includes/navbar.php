<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="topnav" id="myTopnav">
    <a href="http://localhost/PW1/">Página Principal</a>
    <a href="http://localhost/PW1/sobre">Sobre</a>
    <a href="http://localhost/PW1/pontos-turisticos/">Pontos Turísticos</a>
    <a href="#about">Cultura</a>
    <a href="javascript:void(0);" class="icon" onclick="navbarrsponsive()">
      <i class="fa fa-bars"></i>
    </a>
  </div> 
  
  <script>
    function navbarrsponsive() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    </script>

</body>
</html>