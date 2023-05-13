<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sobre Trancoso</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="container"  style="background-image: url('../assets/images/trancoso1.webp'); background-size:cover; background-repeat: no-repeat;">
    <div id="containerlogin" class="wraplogin p-t-30 p-b-50">
        <span class="logintitle p-b-41">
        Iniciar Sessão
        </span>
            <div class="col-sm-12">
                <form class="login100-form validate-form p-b-33 p-t-5" id="login-form" action="javascript:void(0)" method="POST">
                    <div class="wrap-inputform validate-input" data-validate="Enter username">
                        <input class="inputform" id="email" type="text" name="email" placeholder="E-mail" autocomplete="off">
                        <span class="focusinput" data-placeholder="@"></span>
                    </div>
                    <div class="wrap-inputform validate-input" data-validate="Enter password">
                        <input class="inputform" id="password" type="password" name="pass" placeholder="Password" autocomplete="off">
                        <span class="focusinput" data-placeholder="*"></span>
                    </div>
                    <div class="formbtn m-t-32">
                        <button class="loginbtn">
                        Login
                        </button>
                    </div>
            </form>
        </div>
    </div>

    <script>
        // seleciona o formulário de login
const loginForm = document.getElementById('login-form');

// adiciona um manipulador de evento para o envio do formulário
loginForm.addEventListener('submit', function(event) {
  // impede o comportamento padrão do envio do formulário
  event.preventDefault();

  // recupera os valores dos campos de nome de usuário e senha
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  // faz uma requisição AJAX para o arquivo PHP de validação
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'validar.php');
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onload = function() {
    if (xhr.status === 200) {
      // verifica se o login foi válido
      const response = JSON.parse(xhr.response);
      if (response.success) {
        // redireciona o usuário para a página principal
       alert("Dados corretos");
      } else {
        // exibe uma mensagem de erro
        alert('Nome de usuário ou senha inválidos!');
      }
    } else {
      // exibe uma mensagem de erro
      alert('Erro ao validar login!');
    }
  };
  xhr.send(`email=${email}&password=${password}`);
});
    </script>

    
</body>
</html>