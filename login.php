<!DOCTYPE html>
<html lang="en">
<?php 
	$title = 'Login';
	include 'head.php';
?>
<body class="login">
  <main>
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
      <div class="login-page p-4">
        <p class="text-center">
          <img src="./img/wmsu_logo.png" alt="wmsu-logo" class="img-fluid">
        </p>
        <h1 class="fs-1 fw-bold my-3 mb-4 text-white text-center brand-color">MyWMSU</h1>
        <form>
            <div class="field">
              <input type="text" name="email" required>
              <label for="email">School ID</label>
            </div>
            <div class="field">
              <input type="password" name="password" required>
              <label for="password">Password</label>
              <a href="#" id="forgot-pass" class="form-text d-flex justify-content-end">Forgot your password?</a>
            </div>
            <button type="submit" class="btn d-flex p-3 justify-content-center">Submit</button>
            <div id="emailHelp" class="form-text d-flex justify-content-center">Don't have an account? <a href="signup.php"> Sign up</a></div>
        </form>    
      </div>
    </div>
  </main>
</body>
</html>