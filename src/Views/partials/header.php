<header>
    <nav class="container d-flex align-items-center justify-content-between">
      <a href="/" class="">Accueil</a>
        <?php if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == true): ?>
        <p class="text-white">
            <?= htmlspecialchars($_SESSION['USER']->getFirstName()); ?>
            <?= htmlspecialchars($_SESSION['USER']->getName()); ?> &rarr;
            <?php
            $role = $_SESSION['ROLE'];
            // Vérification des rôles et affichage en clair
            echo htmlspecialchars(
                $role === 'ROLE_ADMIN' ? 'Administrateur' :
                    ($role === 'ROLE_DEV' ? 'Développeur' :
                        ($role === 'ROLE_CHEF' ? 'Chef de projet' : $role))
            );
            ?>
        </p>
        <?php endif; ?>
      <div class="btn">
        <a href="/planning">Planning</a>
        
        <a href="/users/list">Utilisateurs</a>

        <a href="/client/list">Clients</a> <!-- Lien vers la liste des clients -->


        <a href="/project/list">Projets</a>

        <?php
        if (isset($_SESSION["IS_AUTHENTICATED"]) && $_SESSION["IS_AUTHENTICATED"] === true) {
          echo '<a href="/logout">Log-out</a>';
        } else {
          echo '<a href="/login">Login</a>';
        }
        ?>
      </div>
    </nav>
  </header>
