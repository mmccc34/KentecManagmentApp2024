</head>
<body>
  <header>
    <nav class="container d-flex align-items-center justify-content-between">
      <a href="/" class="">Accueil</a>
      <div>
        <a href="#about">À propos</a>
        <a href="#services">Services</a>
        <?php
        if(isset($_SESSION["IS_AUTHENTICATED"]) && $_SESSION["IS_AUTHENTICATED"]===true){
          echo '<a href="/logout">log-out</a>';
        }
        else {
          echo '<a href="/login">login</a>';
        }
        ?>
      </div>
    </nav>
  </header>