<h2>Créer un compte</h2>
<div class="container">
  <div class="d-flex justify-content-center vh-100 align-items-center">
    <form class="w-50" method="post" action="">

      <label for="firstname" class="form-label">firstname</label>
      <input type="text" class="form-control" id="firstname" name="firstname" required />

      <label for="name" class="form-label">name</label>
      <input type="text" class="form-control" id="name" name="name" required />

      <div class="mb-3">
        <label for="roleSelect" class="form-label">Choisissez un rôle :</label>
        <select id="roleSelect" name="role" class="form-select">
          <option value="" disabled selected>-- Sélectionnez un rôle --</option>
          <option value="ROLE_DEV">Développeur</option>
          <option value="ROLE_ADMIN">Administrateur</option>
          <option value="ROLE_CHEF">Chef de Projet</option>
        </select>
      </div>

      <label for="login" class="form-label">email</label>
      <input type="email" class="form-control" id="login" name="email" required />
      <h4 class="text-danger"><?php echo $message; ?></h4>

      <label for="pwd" class="form-label">password</label>
      <input type="password" class="form-control" id="pwd" name="password" required />
      <label for="pwd" class="form-label">confirm password</label>
      <input type="password" class="form-control" id="pwd" name="confirm_password" required />

      <button type="submit" class="btn btn-success mt-3">Envoyer</button>
    </form>
  </div>