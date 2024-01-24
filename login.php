<?php 
session_start();

if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 1) {
  header('location: ./index.php');
} 
else if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 2) {
  header('location: ./admin/index.php');
}

require_once './tools/functions.php';
require_once './classes/signin.class.php';

if(isset($_POST['login'])) {
  $user = new Account();
  //sanitize
  $user->emp_id = htmlentities($_POST['emp_id']);
  $user->password = htmlentities($_POST['password']);

  if($user->sign_in_user()) {
    $_SESSION['user_role'] = $user->user_role;
    $_SESSION['email'] = $user->email;
    $_SESSION['f_name'] = $user->f_name;
    $_SESSION['l_name'] = $user->l_name;
    $_SESSION['m_name'] = $user->m_name;
    $_SESSION['acad_rank'] = $user->acad_rank;

    if($_SESSION['user_role'] == 2) {
      header('location: ./admin/index.php');
    }
    else if($_SESSION['user_role'] == 1) {
      header('location: ./index.php');
    }
  }
  else {
    $error = 'Invaliid email/password';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<?php 
	$title = 'Login';
  include_once './includes/head.php'
?>
<body class="login">
  <main>
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
      <div class="login-page p-4">
        <p class="text-center">
          <img src="./img/wmsu_logo.png" alt="wmsu-logo" class="img-fluid">
        </p>
        <h1 class="fs-1 fw-bold my-3 mb-4 text-white text-center brand-color">MyWMSU</h1>
        <form action="#" method="post" onSubmit="return validate()">
            <div class="field">
              <i class='bx bxs-user'></i>
              <input type="text" name="school_id" id="school_id" required value="<?php if(isset($_POST['email'])) { 
                                                                                echo $_POST['email'];
                                                                              } ?>">
              <?php 
              if (isset($_POST['email']) && !validate_field($_POST['email'])) {
              ?>
              <span>Enter your email</span>
              <?php 
              }
              ?>

              <label for="id">School ID</label>
            </div>

            <div class="field">
              <i class='bx bxs-lock-alt'></i>
              <input type="password" name="password" id="password" required required value="<?php if (isset($_POST['password'])) {
																												                                          	echo $_POST['password'];
																												                                          } ?>">
              <?php
					    if (isset($_POST['password']) && !validate_field($_POST['password'])) {
					    ?>
					    	Enter your Password
					    <?php
					    }
					    ?>
					    <?php
					    if (isset($_POST['login']) && isset($error)) {
					    ?>
					    	<p>
					    		<?= $error ?>
					    	</p>
					    <?php
					    }
					    ?>
              <label for="password">Password</label>
            </div>
            <a href="#" id="forgot-pass" class="forgot-pass form-text d-flex justify-content-end">Forgot your password?</a>
            <button type="submit" class="btn d-flex p-3 justify-content-center">LOGIN</button>
            <div id="emailHelp" class="form-text d-flex justify-content-center">Don't have an account? <a href="signup.php"> Sign up</a></div>
        </form>    
      </div>
    </div>
  </main>
</body>
</html>