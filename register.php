<?php
include 'path.php';
include(ROOT_PATH . "/app/controlers/users.php");
include(ROOT_PATH . "/app/includes/head.php");
include(ROOT_PATH . "/app/includes/header.php");
?>

  <div class="auth-content">

    <form action="register.php" method="post">
      <h2 class="form-title">Register</h2>

      <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

      <div>
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username ?>" class="text-input">
      </div>
      <div>
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email ?>" class="text-input">
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password" value="<?php echo $password ?>" class="text-input">
      </div>
      <div>
        <label>Password Confirmation</label>
        <input type="password" name="password-conf" value="<?php echo $passwordConf ?>" class="text-input">
      </div>
      <div>
        <button type="submit" name="register-btn" class="btn btn-big">Register</button>
      </div>
      <p>Or <a href="<?php echo BASE_URL . "/login.php"?>">Sign In</a></p>
    </form>

  </div>

<?php
include(ROOT_PATH . "/app/includes/footer.php");
?>

  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Custom Script -->
  <script src="js/scripts.js"></script>

</body>

</html>