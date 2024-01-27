<?php 

session_start();

if (!isset($_SESSION['user_role']) || (isset($_SESSION['user_role']) && $_SESSION['user_role'] != 2)) {
  header('location: ../login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<?php 
	$title = 'Grade Posted';
  $curriculum_page = 'active';
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
        <button onclick="history.back()" class="bg-none" ><i class='bx bx-chevron-left fs-2 brand-color'></i></button>
          <div class="container-fluid d-flex justify-content-center">
            <span class="fs-2 fw-bold h1 m-0 brand-color">Computer Science</span>
          </div>
        </div>
      </div>

      <div class="m-4">
        <div class="curriculum row row-cols-1 row-cols-md-2 g-3">
          <div class="col">    
            <a href="./curri_page.php">
              <div class="d-flex align-items-center brand-bg-color p-4 fs-4 rounded">
                <i class='bx bx-clipboard me-3' ></i>
                <div class="d-flex flex-column justify-content-start">
                  <span>Present</span>
                </div>
              </div>
            </a>
          </div>

          <div class="col">    
            <a href="#">
              <div class="d-flex align-items-center brand-bg-color p-4 fs-4 rounded">
                <i class='bx bx-clipboard me-3' ></i>
                <div class="d-flex flex-column justify-content-start">
                  <span>Former</span>
                </div>
              </div>
            </a>
          </div>

        </div>
      </div>

    </main>
  </div>

  <script src="./js/main.js"></script>
  
</body>
</html>