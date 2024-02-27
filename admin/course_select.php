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
            <?php 
            require_once '../classes/curr_year.class.php';

            $curr_year = new Curr_year();
            $year_id = $_GET['year_id'] ?? ''; // Assuming you're passing curr_year_id in the URL

            $yearRange = $curr_year->getYearRangeById($year_id);
            ?>
            <span class='fs-2 fw-bold h1 m-0 brand-color'>
              <?php
              if ($yearRange) {
                echo "CURRICULUM {$yearRange['year_start']}-{$yearRange['year_end']}";
              } else {
                echo "Invalid Curriculum Year";
              }
              ?>
            </span>
            <!-- <span class="fs-2 fw-bold h1 m-0 brand-color">CURRICULUM 2023-2024</span> -->
          </div>
        </div>
      </div>

      <div class="m-4">
        <div class="search-keyword col-12 flex-lg-grow-0 d-flex mb-3">
          <div class="input-group">
            <input type="text" name="keyword" id="keyword" placeholder="Search" class="form-control">
            <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class='bx bx-search' aria-hidden="true" ></i></button>
          </div>
        </div>

        <div class="curriculum row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
          <?php
          require_once '../classes/course_select.class.php';
          $course_curr = new Course_curr();
          $course_currArray = $course_curr->show();
          if ($course_currArray) {
            foreach($course_currArray as $item) {
          ?>
          <div class="col">
            <a href="./course_time_select?year_id=<?= $_GET['year_id'].'&course_id='.$item['college_course_id'] ?>">
              <div class="d-flex align-items-center justify-content-center brand-bg-color p-4 fs-4 h-100 rounded">
                <span><?= $item['name'] ?></span>
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