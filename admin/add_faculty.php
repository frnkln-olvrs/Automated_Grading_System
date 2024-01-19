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
          <button onclick="history.back()" class="bg-none d-flex align-items-center" ><i class='bx bx-chevron-left fs-2 brand-color'></i></button>
          <div class="container-fluid d-flex justify-content-center">
            <span class="fs-2 fw-bold h1 m-0 brand-color">Add Faculty</span>
          </div>
        </div>
      </div>

      <div class="m-4">
        <form action="./curri_page.php">
          <div class="row row-cols-1 row-cols-md-2">
            <div class="col">
              <div class="mb-3">
                <label for="emp_id" class="form-label">Employee ID</label>
                <input type="text" class="form-control" id="emp_id" aria-describedby="emp_id" >
              </div>
              <div class="mb-3">
                <label for="f_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="f_name" aria-describedby="f_name">
              </div>
              <div class="mb-3">
                <label for="l_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="l_name" aria-describedby="l_name">
              </div>
              <div class="mb-3">
                <label for="m_name" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="m_name" aria-describedby="m_name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email">
              </div>
            </div>

            <div class="col">
              <div class="mb-3">
                <label for="start_service" class="form-label">Start Of Service</label>
                <input type="number" class="form-control" id="start_service" aria-describedby="start_service">
              </div>
              <div class="mb-3">
                <label for="end_service" class="form-label">End Of Service</label>
                <input type="number" class="form-control" id="end_service" aria-describedby="end_service">
              </div>
              <div class="mb-3">
                <label for="acad_rank" class="form-label">Academic Rank</label>
                <select type="button" class="btn border dropdown-toggle form-select" data-bs-toggle="dropdown" id="acad_rank">
                  <option>???</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="faculty_type" class="form-label">Faculty Type</label>
                <select type="button" class="btn border dropdown-toggle form-select" data-bs-toggle="dropdown" id="faculty_type">
                  <option>???</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <select type="button" class="btn border dropdown-toggle form-select" data-bs-toggle="dropdown" id="designation">
                  <option>???</option>
                </select>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-end gap-2">
            <button type="button" class="btn btn-secondary">Cancel</button>
            <button type="submit" class="btn brand-bg-color">Submit</button>
          </div>
        </form>
      </div>

    </main>
  </div>
  
  <script src="./js/main.js"></script>
  <script src="./js/curriculum-table.js"></script>
  
</body>
</html>