<?php 

session_start();

if (!isset($_SESSION['user_role']) || (isset($_SESSION['user_role']) && $_SESSION['user_role'] != 2)) {
  header('location: ../login.php');
}

if (!isset($_GET['year_id']) || !isset($_GET['course_id']) || !isset($_GET['time_id'])) {
  header('Location: ./index');
  exit;
} 

if (empty($_GET['year_id']) || empty($_GET['course_id']) || empty($_GET['time_id'])) {
  header('Location: ./index');
  exit;
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
          <button onclick="history.back()" class="bg-none d-flex align-items-center" ><i class='bx bx-chevron-left fs-2 brand-color'></i></button>
          <div class="container-fluid d-flex justify-content-center">
            <span class="fs-2 fw-bold h1 m-0 brand-color">
              <?php 
              require_once '../classes/course_select.class.php';

              $course_curr = new Course_curr();
              $course_id = $_GET['course_id'] ?? ''; // Assuming you're passing curr_year_id in the URL

              $courseName = $course_curr->getCourseNameById($course_id);
              ?>
              <span class='fs-2 fw-bold h1 m-0 brand-color'>
                <?php
                if ($courseName) {
                  echo "{$courseName['name']}";
                } else {
                  echo "Invalid Curriculum Year";
                }
                ?>  
            
              Curriculum
            </span>
          </div>
        </div>
      </div>

      <div class="m-4">
        
        <div class="row row-cols-1 row-cols-md-2 d-flex justify-content-between">
          <div class="col">
            <select type="button" class="btn border dropdown-toggle form-select border-danger mb-4" data-bs-toggle="dropdown">
              <option>1st year</option>
              <option>2nd year</option>
              <option>3rd year</option>
              <option>4th year</option>
            </select>
          </div>
          <div class="col">
            <select type="button" class="btn border dropdown-toggle form-select border-danger mb-4" data-bs-toggle="dropdown">
              <option>1st Semester</option>
              <option>2nd Semester</option>
              <option>Summer</option>
            </select>
          </div>
        </div>

        <div class="content container-fluid mw-100 border rounded shadow p-3">
          <div class="d-flex flex-column align-items-center mb-2">
            <h3> 
              <?php 
              require_once '../classes/curr_year.class.php';

              $curr_year = new Curr_year();
              $year_id = $_GET['year_id'] ?? ''; // Assuming you're passing curr_year_id in the URL

              $yearRange = $curr_year->getYearRangeById($year_id);
              if ($yearRange) {
                echo "S.Y {$yearRange['year_start']}-{$yearRange['year_end']}";
              } else {
                echo "Invalid Curriculum Year";
              }
              ?>
            </h3>
            <h4>First Semester</h4>
          </div>  

          <div class="search-keyword col-12 flex-lg-grow-0 d-flex">
            <div id="MyButtons" class="d-flex me-4 mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
            <div class="input-group">
              <input type="text" name="keyword" id="keyword" placeholder="Search Product" class="form-control">
              <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class='bx bx-search' aria-hidden="true" ></i></button>
            </div>
            <a href="./curri_add_sub?year_id=<?= $_GET['year_id'] ?>&course_id=<?= $_GET['course_id']  ?>&time_id=<?= $_GET['time_id'] ?>" class="btn btn-outline-secondary btn-add ms-3 brand-bg-color" type="button"><i class='bx bx-plus-circle'></i></a>
          </div>
          
          <?php
            require_once '../classes/curri_page.class.php';
            require_once '../tools/functions.php';

            $curr_table = new Curr_table();

            // Fetch and display table data
            $year_id = $_GET['year_id'] ?? '';
            $course_id = $_GET['course_id'] ?? '';
            $time_id = $_GET['time_id'] ?? '';
            $curr_tableArray = $curr_table->show($year_id, $course_id, $time_id);
            $counter = 1;   
          ?>
          
          <table id="curriculum" class="table table-striped table-sm" style="width:100%">
            <thead>
              <tr>
                <th rowspan="2" class="align-middle">#</th>
                <th rowspan="2" class="align-middle">Subject</th> <!--Code & description-->
                <th rowspan="2" class="align-middle">Prequisite</th>
                <th colspan="3" class="text-center">Unit</th>
                <th rowspan="2" class="align-middle text-center" width="8%">Action</th>
              </tr>
              <tr>
                <th width="10%">lec</th>
                <th width="10%">lab</th>
                <th width="10%">total</th>
              </tr>
            </thead>
            <tbody>
              <?php
                if ($curr_tableArray) {
                  foreach ($curr_tableArray as $item) {
              ?>
                <tr>
                  <td><?= $counter ?></td>
                  <td><?= $item['sub_code'] ?> - <?= $item['sub_name']?></td>
                  <td><?= $item['sub_prerequisite'] ?></td>
                  <td><?= $item['lec'] ?></td>
                  <td><?= $item['lab'] ?></td>
                  <td><?= $item['lec'] + $item['lab'] ?></td>
                  <td class="text-center">  
                    <a href="# "><i class='bx bx-edit text-success' ></i></a>
                    <i class='bx bx-trash-alt text-danger' ></i>
                  </td>
                </tr>
              <?php
                  $counter++;
                  }
                }
              ?>
            </tbody>
          </table>

        </div>
      </div>

    </main>
  </div>

  <script src="./js/main.js"></script>
  <script src="./js/curriculum-table.js"></script>
  
</body>
</html>