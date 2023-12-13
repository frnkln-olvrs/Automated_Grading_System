<!DOCTYPE html>
<html lang="en">
<?php 
	$title = 'Signup';
	include_once './includes/head.php'
?>
<body class="signup">
  <main>
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
      <div class="signup-page">
        <p class="text-center">
          <img src="./img/wmsu_logo.png" alt="wmsu-logo" class="img-fluid">
        </p>
        <h1 class="fs-1 fw-bold my-3 mb-4 text-white text-center brand-color">MyWMSU</h1>
        <form>
          <div class="field-box">
            <div class="field">
              <label for="id">Employee ID</label>
              <input type="text" name="id" required>
            </div>
            <div class="field">
              <label for="email">Email</label>
              <input type="email" name="email" required>
            </div>
            <div class="field">
              <label for="fname">First Name</label>
              <input type="text" name="fname" required>
            </div>
            <div class="field">
              <label for="lname">Last Name</label>
              <input type="text" name="lname" required>
            </div>
            <div class="field">
              <label for="mname">Middle Name</label>
              <input type="text" name="mname">
            </div>
            <div class="field">
              <label for="acadrank">Academic Rank</label>
              <select name="acadrank" id="acadrank">
                <option value="regularlecturer">Regular Lecturer</option>
                <option value="visitinglecture">Visiting Lecturer</option>
              </select>
            </div>
          </div>
            <button type="submit" class="btn d-flex p-3 justify-content-center">SINGUP</button>
            <div id="emailHelp" class="form-text d-flex justify-content-center">Already have an account? <a href="login.php"> Login</a></div>
        </form>    
      </div>
    </div>
  </main>
</body>
</html>