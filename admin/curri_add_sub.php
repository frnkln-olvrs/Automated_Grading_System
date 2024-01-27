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
          <button onclick="history.back()" class="bg-none d-flex align-items-center" ><i class='bx bx-chevron-left fs-2 brand-color'></i></button>
          <div class="container-fluid d-flex justify-content-center">
            <span class="fs-2 fw-bold h1 m-0 brand-color">Computer Science Curriculum</span>
          </div>
        </div>
      </div>

      <div class="m-4">
        <form action="./curri_page.php">
          <div class="row row-cols-1 row-cols-md-2 align-items-end">
            <div class="col">
              <div class="mb-3">
                <label for="sub_code" class="form-label">Code</label>
                <input type="text" class="form-control" id="sub_code" aria-describedby="sub_code" >
              </div>
              <div class="mb-3">
                <label for="sub_desc" class="form-label">Description</label>
                <input type="text" class="form-control" id="sub_desc" aria-describedby="sub_desc">
              </div>
              <div class="mb-3">
                <label for="prerequisite" class="form-label">Prerequisite</label>
                <input type="text" class="form-control" id="prerequisite" aria-describedby="prerequisite">
              </div>
            </div>

            <div class="col">
              <div class="mb-3">
                <div class="row row-cols-1 row-cols-md-2 align-items-center">
                <div class="col">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="lecture" checked>
                      <label class="form-check-label" for="lecture">Lecture</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="laboratory">
                      <label class="form-check-label" for="laboratory">Laboratory</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="total_unit" class="form-label">Total Unit</label>
                <input type="number" class="form-control" id="total_unit" aria-describedby="total_unit">
              </div>
              <div class="mb-3">
                <label for="studentemail" class="form-label">???</label>
                <input type="text" class="form-control" id="fname" aria-describedby="fname">
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-secondary">Cancel</button>
          <button type="submit" class="btn brand-bg-color">Submit</button>
        </form>
      </div>

    </main>
  </div>
  
  <script src="../vendor/pdfmake-0.2.7/pdfmake.min.js"></script>
  <script src="../vendor/pdfmake-0.2.7/vfs_fonts.js"></script>
  <script src="./js/main.js"></script>
  <script src="./js/curriculum-table.js"></script>
  
</body>
</html>