<?php 

session_start();

if (!isset($_SESSION['user_role']) || (isset($_SESSION['user_role']) && $_SESSION['user_role'] != 2)) {
  header('location: ../login.php');
}

?>

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

          <div class="search-keyword col-12 flex-lg-grow-0 d-flex mb-2">
            
            <div class="form-group col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0 ms-lg-auto">
              <select name="faculty-academic_rank" id="faculty-academic_rank" class="form-select me-md-2">
                <option value="">Academic Rank</option>
                <option value="?">?</option>
                <option value="2">2</option>
              </select>
            </div>

            <div class="form-group mx-4 col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0">
              <select name="faculty_type" id="faculty_type" class="form-select me-md-2">
                <option value="">Faculty Type</option>
                <option value="">?</option>
              </select>
            </div>

            <div class="input-group">
              <input type="text" name="keyword" id="keyword" placeholder="Search" class="form-control">
              <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class='bx bx-search' aria-hidden="true" ></i></button>
            </div>
            <a href="./add_faculty.php" class="btn btn-outline-secondary btn-add ms-3 brand-bg-color" type="button"><i class='bx bx-plus-circle'></i></a>
          </div>
          
          <?php
            require_once '../classes/profiling.class.php';
            require_once '../tools/functions.php';

            $profiling = new Profiling();

            $department_id = $_GET['department_id'] ?? '';
            $profiling_array = $profiling->show($department_id);
            $counter = 1;
          ?>
          <table id="main_profiling" class="table table-striped table-sm" style="width:110%">
            <thead>
              <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Academic Rank</th>
                <th>Designation</th>
                <th>Deapartment</th>
                <th>Faculty Type</th>
                <th>Start Service</th>
                <th>End Service</th>
                <th width="5%">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $counter = 1;
                foreach ($profiling_array as $item){
              ?>
                <tr>
                  <td><?= $counter ?></td>
                  <td><?= $item['l_name'] ?>, <?= $item['f_name']?> <?= substr($item['m_name'], 0, 1) ?>.</td>
                  <td><?= $item['email'] ?></td>
                  <td><?= $item['acad_type'] ?></td>
                  <td><?= $item['designation'] ?></td>
                  <td><?= $item['department'] ?></td>
                  <td><?= $item['faculty_type'] ?></td>
                  <td><?= $item['start_service'] ?></td>
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
  <script src="./js/profiling_table.js"></script>
</body>
</html>