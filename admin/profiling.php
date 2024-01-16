<!DOCTYPE html>
<html lang="en">
<?php 
	$title = 'Profiling';
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

        <div class="content container-fluid mw-100 border rounded shadow p-3">

          <div class="search-keyword col-12 flex-lg-grow-0 d-flex">
            <div id="MyButtons" class="d-flex me-4 mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
            <div class="input-group">
              <input type="text" name="keyword" id="keyword" placeholder="Search Product" class="form-control">
              <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class='bx bx-search' aria-hidden="true" ></i></button>
            </div>
            <a href="./curri_add_sub.php" class="btn btn-outline-secondary btn-add ms-3 brand-bg-color" type="button"><i class='bx bx-plus-circle'></i></a>
          </div>
          
          <?php
            $student_array = array(
              array(
                'full_name' => 'Oliveros, Franklin I',
                'email' => 'olivefrank@email.com',
                'academic_rank' => '2',
                'designation' => '3',
                'faculty_type' => '5',
                'start_of_service' => '5',
                'end_service' => '5',
              ),
            );
          ?>
          <table id="main_profiling" class="table table-striped table-sm" style="width:100%">
            <thead>
              <tr>
                <th>#</th>
                <th>Full Name</th> <!--Code & description-->
                <th>Email</th>
                <th>Academic Rank</th>
                <th>Designation</th>
                <th>Faculty Type</th>
                <th>Start of Service</th>
                <th>End of Service</th>
                <th width="5%">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $counter = 1;
                foreach ($student_array as $item){
              ?>
                <tr>
                  <td><?= $counter ?></td>
                  <td><?= $item['full_name'] ?></td>
                  <td><?= $item['email'] ?></td>
                  <td><?= $item['academic_rank'] ?></td>
                  <td><?= $item['designation'] ?></td>
                  <td><?= $item['faculty_type'] ?></td>
                  <td><?= $item['start_of_service'] ?></td>
                  <td><?= $item['end_service'] ?></td>
                  <td class="text-center">
                    <a href="# "><i class='bx bx-edit text-success' ></i></a>
                    <i class='bx bx-trash-alt text-danger' ></i>
                  </td>
                </tr>
              <?php
                $counter++;
                }
              ?>
            </tbody>
          </table>

        </div>
      </div>

    </main>
  </div>

  <script src="./js/main.js"></script>
  
</body>
</html>