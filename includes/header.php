<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sistema de Gerenciamento de Produtos</title>
    <!-- Material Icon CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Your custom styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Used as an example only to position the footer at the end of the page.
    You can delete these styles or move it to your custom css file -->
    <style>
      body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        }
      main {
        flex: 1 0 auto;
      }
    </style>
  </head>
  <body>
    <header>
      <nav class="cyan">
        <div class="nav-wrapper">
          <div class="container">
            <a href="../index.php" class="brand-logo">SISGen</a>
            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#">Sair</a></li>
            </ul>
            <ul class="side-nav" id="mobile-menu">
              <li>
                <div class="userView">
                  <div class="background">
                    <img src="https://image.freepik.com/vetores-gratis/linhas-abstratas-formando-o-fundo-de-forma-tunner_1017-12765.jpg" alt="Background Sidenav">
                  </div>
                  <a href="#!user"><img class="circle" src="https://image.freepik.com/vetores-gratis/perfil-de-avatar-de-homem-no-icone-redondo_24640-14044.jpg" alt="User Image Sidenav"></a>
                  <a href="#!name"><span class="white-text name">Denison Ferreira</span></a>
                  <a href="#!email"><span class="white-text email">denison.shenry@gmail.com</span></a>
                </div>
              </li>
              <li><a href="#">Sair</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>