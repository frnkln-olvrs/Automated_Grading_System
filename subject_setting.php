<?php 

session_start();

if (!isset($_SESSION['user_role']) || (isset($_SESSION['user_role']) && $_SESSION['user_role'] != 1)) {
  header('location: ./login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<?php 
	$title = 'Home';
  $home_page = 'active';
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
            <span class="fs-2 h1 m-0 text-uppercase">finalterm</span>
          </div>
        </div>
      </div>

      <div class="m-4">
        <div class="row row-cols-1 row-cols-md-2 d-flex justify-content-between">
          <div class="col">
            <div class="sub-name d-flex align-items-center mb-2">
              <span class="fs-2 h1 m-0 fw-bold brand-color">CS137</span>
              <span class="fs-3 h1 m-0 brand-color">-Software Engineering 1</span>
            </div>
          </div>
        </div>
        
        <div class="content container-fluid mw-100 border rounded shadow p-3 px-5">
          <div class="container-fluid d-flex justify-content-center">
            <span class="fs-4 h1 m-0">Subject Setting</span>
          </div>

          <div class="d-flex justify-content-end">
            <a href="./add_standard-setting.php" class="btn btn-outline-secondary btn-add ms-3 brand-bg-color" type="button"><i class='bx bx-plus-circle'></i></a>
          </div>

          <table id="subject_setting" class="table table-striped cell-border" style="width:100%">
            <thead>
              <tr>
                <th>Criteria</th>
                <th>Weight</th>
                <th width="5%">action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Attendance</td>
                <td>5% </td>
                <td class="text-center">
                  <a href="# "><i class='bx bx-edit' ></i></a>
                  <i class='bx bx-trash-alt' ></i>
                </td>
              </tr>
              <tr>
                <td>Quiz</td>
                <td>30% </td>
                <td class="text-center">
                  <a href="# "><i class='bx bx-edit' ></i></a>
                  <i class='bx bx-trash-alt' ></i>
                </td>
              </tr>
              <tr>
                <td>Activity</td>
                <td>15% </td>
                <td class="text-center">
                  <a href="# "><i class='bx bx-edit' ></i></a>
                  <i class='bx bx-trash-alt' ></i>
                </td>
              </tr>
              <tr>
                <td>Major Exam</td>
                <td>50% </td>
                <td class="text-center">
                  <a href="# "><i class='bx bx-edit' ></i></a>
                  <i class='bx bx-trash-alt' ></i>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </main>
  </div>

  <?php
    require_once('./includes/js.php');
  ?>
  <script src="./js/subject_setting-table.js"></script>
  
</body>
</html>