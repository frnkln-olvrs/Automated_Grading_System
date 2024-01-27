<?php 

session_start();

if (!isset($_SESSION['user_role']) || (isset($_SESSION['user_role']) && $_SESSION['user_role'] != 2)) {
  header('location: ../login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<?php 
	$title = 'Profiling';
  $setting_page = 'active';
	include '../includes/admin_head.php';
?>
<body>
  <div class="home">
    <div class="side">
      <?php
        require_once('../includes/admin_sidepanel.php')
      ?> 
    </div>
    <main>
      <div class="header" >
      <?php
        require_once('../includes/admin_header.php')
      ?>
      </div>
      
      <div class="flex-md-nowrap p-1 title_page shadow" style="background-color: whitesmoke;" >
        <div class="d-flex align-items-center">
          <div class="container-fluid d-flex justify-content-center">
            <span class="fs-2 fw-bold h1 m-0 brand-color">Settings</span>
          </div>
        </div>
      </div>

      <div class="m-4">
      <form action="./curri_page.php">
          <div class="row row-cols-1">
            <div class="container-fluid d-flex justify-content-start">
              <span class="fs-2 fw-bold h1 m-0 brand-color mb-3">Change Password</span>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="current_pw" class="form-label">Current Password</label>
                <input type="text" class="form-control" id="current_pw" aria-describedby="current_pw">
              </div>
              <div class="mb-3">
                <label for="new_pw" class="form-label">New Password</label>
                <input type="text" class="form-control" id="new_pw" aria-describedby="new_pw">
              </div>
              <div class="mb-3">
                <label for="confirm_pw" class="form-label">Confirm Password</label>
                <input type="text" class="form-control" id="confirm_pw" aria-describedby="confirm_pw">
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-end gap-2">
            <button type="submit" class="btn brand-bg-color">Change</button>
          </div>
        </form>
        
      </div>

    </main>
  </div>

  <script src="./js/main.js"></script>
  <script src="./js/profiling_table.js"></script>
</body>
</html>