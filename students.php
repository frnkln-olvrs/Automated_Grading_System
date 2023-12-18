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
        <div class="table-responsive overflow-hidden">
          <div class="row g-2 mb-2 m-0">
            <div class="col-3">
              <button type="button" class="btn border border-danger dropdown-toggle form-select" data-bs-toggle="dropdown">
                Semester
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Midterm</a></li>
                <li><a class="dropdown-item" href="#">Finalterm</a></li>
              </ul>
            </div>
            <div class="search-keyword col-12 flex-lg-grow-0 d-flex">
              <div id="MyButtons" class="d-flex me-4 mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
              <div class="input-group">
                <input type="text" name="keyword" id="keyword" placeholder="Search Product" class="form-control">
                <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class='bx bx-search' aria-hidden="true" ></i></button>
              </div>
              <button class="btn btn-outline-secondary btn-add ms-3" type="button"><i class='bx bx-plus-circle'></i></button>
            </div>
          </div>
          <?php
            $student_array = array(
              array(
                'Last Name' => 'Burnt',
                'First Name' => 'Pizza',
                'Middle Name' => 'Here',
                'Extension' => 'Extensd',
                'Student ID' => '2021-00123',
                'Email' => 'example@email.com',
              ),
              array(
                'Last Name' => 'Olive',
                'First Name' => 'Frank',
                'Middle Name' => 'Itur',
                'Extension' => 'Extensd',
                'Student ID' => '2021-03214',
                'Email' => 'sample@email.com',
              ),
            );
          ?>
          <table id="product" class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Extension</th>
                <th scope="col">Student ID</th>
                <th scope="col">Email</th>
                <th scope="col" width="5%">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $counter = 1;
                foreach ($student_array as $item){
              ?>
                <tr>
                  <td><?= $counter ?></td>
                  <td><?= $item['Last Name'] ?></td>
                  <td><?= $item['First Name'] ?></td>
                  <td><?= $item['Middle Name'] ?></td>
                  <td><?= $item['Extension'] ?></td>
                  <td><?= $item['Student ID'] ?></td>
                  <td><?= $item['Email'] ?></td>
                  <td class="text-center">
                    <a href="# "><i class='bx bx-edit' ></i></a>
                    <i class='bx bx-trash-alt' ></i>
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
  <script src="./js/student_table.js"></script>
  
</body>
</html>