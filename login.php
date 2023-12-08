<!DOCTYPE html>
<html lang="en">
<?php 
	$title = 'Login';
	include 'head.php';
?>
<body>
  <main>
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
      <div class="login-page p4">
        <p class="text-center">
          <img src="./img/wmsu_logo.png" alt="wmsu-logo" class="img-fluid">
        </p>
        <h1 class="h2 my-3 mb-4 text-center brand-color">MyWMSU</h1>
        <form action="" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
            <a href="#" id="forgot-pass" class="form-text d-flex justify-content-end">Forgot your password?</a>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
          <div id="emailHelp" class="form-text d-flex justify-content-center">Don't have an account?<a href="signup.php">Sign up</a></div>
        </form>
      </div>
    </div>
  </main>
</body>
</html>