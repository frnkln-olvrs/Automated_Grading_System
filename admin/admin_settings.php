<?php 

session_start();

if (!isset($_SESSION['user_role']) || (isset($_SESSION['user_role']) && $_SESSION['user_role'] != 2)) {
  header('location: ../login.php');
}

require_once '../tools/functions.php';
require_once '../classes/user.class.php';

if (isset($_POST['saveimage'])) {
  $user = new User();

  $uploaddir = '../img/profile-img/';
  $fileName = basename($_FILES['profile']['name']);
  $uploadfile = $uploaddir . $fileName;
  if (move_uploaded_file($_FILES[htmlentities('profile')]['tmp_name'], $uploadfile)) {
    if (isset($_POST['addimage']) && isset($message)) {
      echo "<script> alert('File is valid, and was successfully uploaded.')</script>";
    }
  } else {
    echo "<script> alert('Failed Upload')</script>";
  }

  $user->user_id = $_SESSION['user_id'];
  $user->profile_image = $_FILES['profile']['name'];

  if (
    validate_field($user->profile_image)
  ) {

    if ($user->edit_profile()) {
      $_SESSION['profile_image'] = $user->profile_image;
      $message = 'image is successfuly added Image.';
    } else {
      $message = 'Something went wrong adding Image.';
    }
  }
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
        <form action="">
          <div class="container-fluid d-flex justify-content-start">
            <span class="fs-2 fw-bold h1 m-0 brand-color mb-3">Change Password</span>
          </div>
          <div class="row row-cols-1 row-cols-md-2">
            <div class="col-md-4">
              <div class="border shadow p-3 mb-5 bg-body rounded">

                <div class="user">
                  <form action="" method="post" enctype="multipart/form-data">
                    <div class="profile-pic">
                      <label class="label brand-border-color d-flex flex-column" for="file" style="border-width: 4px !important;">
                        <i class='bx bxs-camera-plus'></i>
                        <span>Change Image</span>
                      </label>
                      <img src="../img/profile-img/<?= $_SESSION['profile_image'] ?>" id="output"/>
                      <input id="file" type="file" name="profile" accept="image/png, image/jpeg" onchange="validateFile(event)" />
                    </div>
                    <div class="d-flex justify-content-center align-items-center mb-2">
                      <button type="submit" name="saveimage" class="btn brand-bg-color">Save Image</button>
                    </div>
                    <div class="name d-flex justify-content-center align-items-center">
                      <p class="username fw-bold"><?= ucwords($_SESSION['name']) ?></p>
                    </div>
                  </form>
                </div>

              </div>
            </div>
            <div class="col-md-8">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="username">
              </div>
              <div class="mb-2">
                <button type="button" class="btn btn-toggle link-dark d-flex align-items-center nav-link p-0" data-bs-toggle="collapse" data-bs-target="#pw_input_toggle" aria-expanded="false">
                  <i class='bx bxs-key me-2'></i>
                  <span>Change password</span>
                </button>
              </div>

              <div class="collapse" id="pw_input_toggle">
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
          </div>
          <div class="d-flex justify-content-end gap-2">
            <button type="submit" class="btn brand-bg-color">Change</button>
          </div>
        </form>
        
      </div>

    </main>
  </div>

  <script src="./js/main.js"></script>

  <script>
    var validateFile = function(event) {
      var fileInput = event.target;
      var filePath = fileInput.value;
      var allowedExtensions = /(\.png|\.jpeg|\.jpg)$/i;
    
      if (!allowedExtensions.exec(filePath)) {
        alert('Invalid file type. Only PNG and JPEG files are allowed.');
        fileInput.value = '';
        return false;
      }
    
      var image = document.getElementById("output");
      image.src = URL.createObjectURL(event.target.files[0]);
    };
  </script>
  
</body>
</html>