<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['senha']);
        // print_r('<br>');
      

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['telefone'];
        $telefone = $_POST['senha'];
       

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone) 
        VALUES ('$nome','$senha','$email','$telefone')");

        header('Location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style-prefix.css">
    <title>Document</title>
</head>
<body>
    <header>

        <div class="header-top">
    
          <div class="container">
    
            <ul class="header-social-container">
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>
    
            </ul>
    
            <div class="header-alert-news">
              <p>
                <b>FRETE GRÁTIS</b>
                A PARTIR DE R$189,00
              </p>
            </div>
    
          </div>
    
        </div>
    
        <div class="header-main">
    
          <div class="container">
    
            <a href="#" class="header-logo">
              <img src="./assets/images/nome.png" alt="Logo Divine" width="125" height="125">
            </a>
    
            <div class="header-search-container">
    
              <input type="search" name="search" class="search-field" placeholder="Pesquise...">
    
              <button class="search-btn">
                <ion-icon name="search-outline"></ion-icon>
              </button>
    
            </div>
    
            <div class="header-user-actions">
    
              <button class="action-btn">
                <ion-icon name="person-outline"></ion-icon>
              </button>
    
              <button class="action-btn">
                <ion-icon name="heart-outline"></ion-icon>
                <span class="count">0</span>
              </button>
    
              <button class="action-btn">
                <ion-icon name="bag-handle-outline"></ion-icon>
                <span class="count">0</span>
              </button>
    
            </div>
    
          </div>
    
        </div>
    
        <nav class="desktop-navigation-menu">
    
          <div class="container">
    
            <ul class="desktop-menu-category-list">
    
              <li class="menu-category">
                <a href="#" class="menu-title">Home</a>
              </li>
    
              <li class="menu-category">
                <a href="#" class="menu-title">Anéis</a>
    
                <div class="dropdown-panel">
    
                  <ul class="dropdown-panel-list">
    
                    <li class="panel-list-item">
                        <a href="#">Anéis de Namoro</a>
                      </li>
    
                    <li class="panel-list-item">
                      <a href="#">Anéis de Noivado</a>
                    </li>
    
                    <li class="panel-list-item">
                      <a href="#">Anéis de Formatura</a>
                    </li>
    
                    <li class="panel-list-item">
                      <a href="#">Anéis de Debutante</a>
                    </li>
    
                    <li class="panel-list-item">
                      <a href="#">Anéis de Prata</a>
                    </li>
                  </ul>
    
                  <ul class="dropdown-panel-list">
    
                    <li class="panel-list-item">
                      <a href="#">Anéis Femininos</a>
                    </li>
    
                    <li class="panel-list-item">
                      <a href="#">Anéis Masculinos</a>
                    </li>
    
                    <li class="panel-list-item">
                      <a href="#">Anéis Meia Aliança</a>
                    </li>
    
                    <li class="panel-list-item">
                      <a href="#">Anéis Infantis</a>
                    </li>
    
                    <li class="panel-list-item">
                      <a href="#">Anéis de Ouro</a>
                    </li>
                  </ul>
    
              <li class="menu-category">
                <a href="#" class="menu-title">Pulseiras</a>
    
                <ul class="dropdown-list">
    
                  <li class="dropdown-item">
                    <a href="#">Pulseiras Femininas</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#">Pulseiras Masculinas</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#">Pulseiras de Ouro</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#">Pulseiras de Prata</a>
                  </li>
    
                    <li class="dropdown-item">
                      <a href="#">Pulseiras Infantis</a>
                  </li>
    
                </ul>
              </li>
    
              <li class="menu-category">
                <a href="#" class="menu-title">Berloques</a>
    
                <ul class="dropdown-list">
    
                  <li class="dropdown-item">
                    <a href="#"> Berloques Ouro</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#"> Berloques Prata</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#"> Berloques Familia</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#"> Berloques Formatura</a>   
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#">Berloques Personalizados</a>
                  </li>
                </ul>
              </li>
    
              <li class="menu-category">
                <a href="#" class="menu-title">Colares</a>
    
                <ul class="dropdown-list">
    
                  <li class="dropdown-item">
                    <a href="#">Colares Femininos</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#">Colares Masculinos</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#">Colares de Ouro</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#">Colares de Prata</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#">Chokers</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#">Escapulários</a>
                  </li>
    
                </ul>
              </li>
    
              <li class="menu-category">
                <a href="#" class="menu-title">Alianças</a>
    
                <ul class="dropdown-list">
    
                  <li class="dropdown-item">
                    <a href="#">Alianças de Namoro</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#">Alianças de Compromisso</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#">Alianças de Casamento</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#">Alianças de Bodas</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#">Alianças de Ouro 10K</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#">Alianças de Ouro e Prata</a>
                  </li>
    
                </ul>
              </li>
    
              <li class="menu-category">
                <a href="#" class="menu-title">Personalize</a>
              </li>
    
            </ul>
    
          </div>
    
        </nav>
    
        <div class="mobile-bottom-navigation">
    
          <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>
    
          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
    
            <span class="count">0</span>
          </button>
    
          <button class="action-btn">
            <ion-icon name="home-outline"></ion-icon>
          </button>
    
          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
    
            <span class="count">0</span>
          </button>
    
          <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="grid-outline"></ion-icon>
          </button>
    
        </div>
    
        <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>
    
          <div class="menu-top">
            <h2 class="menu-title">Menu</h2>
    
            <button class="menu-close-btn" data-mobile-menu-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>
          </div>
    
    
            <ul class="menu-social-container">
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>
    
            </ul>
    
          </div>
    
        </nav>
    
      </header>
      <div class="formulario1">
        <form action="/processar" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>
        
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br>
        
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" required><br>
        
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br>
        
          
        
            <input type="submit" value="Enviar">
        </form>
        
      </div>
</body>
</html>