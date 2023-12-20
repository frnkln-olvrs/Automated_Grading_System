<!DOCTYPE html>
<html lang="en">
<?php 
	$title = 'Grade Posted';
  $grade_page = 'active';
	include './includes/head.php';
?>
<body>
  <div class="home">
    <div class="side">
      <?php
        require_once('./includes/sidepanel.php')
      ?> 
    </div>
    <main>
      <div class="header" >
      <?php
        require_once('./includes/header.php')
      ?>
      </div>
      
      <div class="flex-md-nowrap p-1 title_page shadow" style="background-color: whitesmoke;" >
        <div class="d-flex align-items-center">
          <button onclick="history.back()" class="bg-none" ><i class='bx bx-chevron-left fs-2 brand-color'></i></button>
          <div class="container-fluid d-flex justify-content-center">
            <span class="fs-2 h1 m-0">CS 137</span>
          </div>
        </div>
      </div>

      <div class="m-4">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4">
          <div class="col">
            <select type="button" class="btn border dropdown-toggle form-select border-danger mb-4" data-bs-toggle="dropdown">
              <option>1st Semester</option>
              <option>2nd Semester</option>
            </select>
          </div>
        </div>

        <div class="year_select">
          <a href="#">
            <div class="brand-bg-color p-4 px-5 fs-3 rounded">
              <span>CS 137</span>
            </div>
          </a>
          <a href="#">
            <div class="brand-bg-color p-4 px-5 fs-3 rounded">
              <span>CS 139</span>
            </div>
          </a>
          <a href="#">
            <div class="brand-bg-color p-4 px-5 fs-3 rounded">
              <span>CS 140</span>
            </div>
          </a>
          <a href="#">
            <div class="brand-bg-color p-4 px-5 fs-3 rounded">
              <span>CS 131</span>
            </div>
          </a>
          <a href="#">
            <div class="brand-bg-color p-4 px-5 fs-3 rounded">
              <span>CS 105</span>
            </div>
          </a>
          <a href="#">
            <div class="brand-bg-color p-4 px-5 fs-3 rounded">
              <span>CS 133</span>
            </div>
          </a>
        </div>
      </div>

    </main>
  </div>

  <script src="./js/main.js"></script>
  <script src="./js/student_table.js"></script>
  
</body>
</html>