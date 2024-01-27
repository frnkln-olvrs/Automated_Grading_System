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
            <span class="fs-2 fw-bold h1 m-0 brand-color">Add Curriculum</span>
          </div>
        </div>
      </div>

      <div class="m-4">
        <form action="./index.php">
          <div class="row row-cols-1 row-cols-md-2">
            <div class="col">
              <div class="mb-3">
                <label for="CY_start" class="form-label">Curriculum Year Start</label>
                <input type="number" class="form-control" placeholder="yyyy" min="1999" max="2024" id="CY_start" aria-describedby="CY_start"> <!-- max = Current year -->
              </div>
              <div class="mb-3">
                <label for="CY_end" class="form-label">Curriculum Year End</label>
                <input type="number" class="form-control" placeholder="yyyy" min="1999" max="2024" id="CY_end" aria-describedby="CY_end" > <!-- max = Current year + 1 -->
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-secondary">Cancel</button>
          <button type="submit" class="btn brand-bg-color">Add</button>
        </form>
      </div>

    </main>
  </div>

  <script src="./js/main.js"></script>
  
</body>
</html>