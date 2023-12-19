<!DOCTYPE html>
<html lang="en">
<?php 
	$title = 'Student list';
  $student_page = 'active';
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
        <div class="d-none d-md-block">
          <div class="container-fluid d-flex justify-content-center">
            <span class="fs-2 h1 m-0">Students list</span>
          </div>
        </div>
      </div>

      <div class="m-4">
        <div class="row">
          <div class="col-4">
            <button type="button" class="btn border border-danger dropdown-toggle form-select mb-4" data-bs-toggle="dropdown">
              Subject Code
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">CS140</a></li>
              <li><a class="dropdown-item" href="#">CS137</a></li>
            </ul>
          </div>
        </div>
        <form>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="fname" aria-describedby="fname" >
              </div>
              <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" aria-describedby="fname">
              </div>
              <div class="mb-3">
                <label for="mname" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="fname" aria-describedby="fname">
              </div>
            </div>

            <div class="col-6">
              <div class="mb-3">
                <label for="extension" class="form-label">Extension</label>
                <select type="button" class="btn border dropdown-toggle form-select" data-bs-toggle="dropdown">
                  <option>Jr</option>
                  <option>Junior</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="studentid" class="form-label">Student ID</label>
                <input type="text" class="form-control" id="fname" aria-describedby="fname">
              </div>
              <div class="mb-3">
                <label for="studentemail" class="form-label">Student Email</label>
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

  <script src="./js/main.js"></script>
  <script src="./js/student_table.js"></script>
  
</body>
</html>