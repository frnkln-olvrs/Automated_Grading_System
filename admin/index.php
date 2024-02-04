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
          <div class="container-fluid d-flex justify-content-center">
            <span class="fs-2 fw-bold h1 m-0 brand-color">CURRICULUM</span>
          </div>
        </div>
      </div>

      <div class="m-4">
        <div class="search-keyword col-12 flex-lg-grow-0 d-flex mb-3">
          <div class="input-group">
            <input type="text" name="keyword" id="keyword" placeholder="Search" class="form-control">
            <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class='bx bx-search' aria-hidden="true" ></i></button>
          </div>
          <a href="./add_curri.php" class="btn btn-outline-secondary btn-add ms-3 brand-bg-color" type="button"><i class='bx bx-plus-circle'></i></a>
        </div>

        <div class="curriculum row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
          <?php 
          require_once '../classes/curr_year.class.php';
          $curr_year = new Curr_year();
          $curr_yearArray = $curr_year->show();
          if ($curr_yearArray) {
            foreach($curr_yearArray as $item) {
              $year_start = strtotime($item['year_start']);
              $start = date('Y', $year_start);
              $year_end = strtotime($item['year_end']);
              $end = date('Y', $year_end);
          ?>

          <div class="col">    
            <a href="./course_select.php?=<?= $item['curr_year_id'] ?>">
              <div class="d-flex align-items-center justify-content-between brand-bg-color p-4 fs-4 rounded">
                <i class='bx bxs-folder-open opacity-50' ></i>
                <div class="d-flex flex-column justify-content-start">
                  <span>curriculum</span>
                  <span><?= $start ?>-<?= $end ?></span>
                </div>
              </div>
            </a>
          </div>

          <?php 
            }
          }
          ?>

        </div>
      </div>

    </main>
  </div>

  <script src="./js/main.js"></script>
  
</body>
</html>