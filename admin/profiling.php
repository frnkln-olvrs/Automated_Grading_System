<!DOCTYPE html>
<html lang="en">
<?php 
	$title = 'Grade Posted';
  $profiling_page = 'active';
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
            <span class="fs-2 fw-bold h1 m-0 brand-color">PROFILING</span>
          </div>
        </div>
      </div>

      <div class="m-4">
        
      </div>

    </main>
  </div>

  <script src="./js/main.js"></script>
  
</body>
</html>