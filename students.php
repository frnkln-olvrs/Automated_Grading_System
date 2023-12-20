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
                Subject Code
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">CS140</a></li>
                <li><a class="dropdown-item" href="#">CS137</a></li>
              </ul>
            </div>

            <div class="col-3">
              <!-- Button trigger modal -->
              <button type="button" class="btn brand-bg-color" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Import
              </button>
  
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">import file</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">Add</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="search-keyword col-12 flex-lg-grow-0 d-flex">
              <div id="MyButtons" class="d-flex me-4 mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
              <div class="input-group">
                <input type="text" name="keyword" id="keyword" placeholder="Search Product" class="form-control">
                <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class='bx bx-search' aria-hidden="true" ></i></button>
              </div>
              <a href="./add_student.php" class="btn btn-outline-secondary btn-add ms-3 brand-bg-color" type="button"><i class='bx bx-plus-circle'></i></a>
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
          <table id="students" class="table table-striped table-sm" style="width:100%">
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

  <?php
    require_once('./includes/js.php');
  ?>
  <script src="./js/student_table.js"></script>
  
</body>
</html>