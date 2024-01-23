<!DOCTYPE html>
<html lang="en">
<?php 
	$title = 'Profiling';
  $acc_setup = 'active';
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
      <div class="header">
        <?php
          require_once('../includes/admin_header.php')
        ?>
        </div>

        <div class="flex-md-nowrap p-1 title_page shadow" style="background-color: whitesmoke;" >
          <div class="d-flex align-items-center">
            <div class="container-fluid d-flex justify-content-center">
              <span class="fs-2 fw-bold h1 m-0 brand-color">Account Setup</span>
            </div>
          </div>
        </div>

        <div class="m-4">
          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4">
            <div class="col">
              <select type="button" class="btn border dropdown-toggle form-select border-danger mb-4" data-bs-toggle="dropdown">
                <option>Apply to all</option>
                <option>CS140</option>
                <option>CS137</option>
              </select>
            </div>
          </div>

          <div class="content brand-border-color mw-100 rounded shadow py-3">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link text-dark active" id="nav-midterm-tab" data-bs-toggle="tab" data-bs-target="#nav-midterm" type="button" role="tab" aria-controls="nav-midterm" aria-selected="true">Midterm</button>
                <button class="nav-link text-dark" id="nav-finalterm-tab" data-bs-toggle="tab" data-bs-target="#nav-finalterm" type="button" role="tab" aria-controls="nav-finalterm" aria-selected="false">Final Term</button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-midterm" role="tabpanel" aria-labelledby="nav-midterm-tab">
                <div class="search-keyword col-12 flex-lg-grow-0 d-flex my-2">

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
                        <a href="# "><i class='bx bx-edit text-success' ></i></a>
                        <i class='bx bx-trash-alt text-danger' ></i>
                      </td>
                    </tr>
                    <tr>
                      <td>Quiz</td>
                      <td>30% </td>
                      <td class="text-center">
                        <a href="# "><i class='bx bx-edit text-success' ></i></a>
                        <i class='bx bx-trash-alt text-danger' ></i>
                      </td>
                    </tr>
                    <tr>
                      <td>Activity</td>
                      <td>15% </td>
                      <td class="text-center">
                        <a href="# "><i class='bx bx-edit text-success' ></i></a>
                        <i class='bx bx-trash-alt text-danger' ></i>
                      </td>
                    </tr>
                    <tr>
                      <td>Major Exam</td>
                      <td>50% </td>
                      <td class="text-center">
                        <a href="# "><i class='bx bx-edit text-success' ></i></a>
                        <i class='bx bx-trash-alt text-danger' ></i>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="nav-finalterm" role="tabpanel" aria-labelledby="nav-finalterm-tab">
              <div class="tab-pane fade show active" id="nav-midterm" role="tabpanel" aria-labelledby="nav-midterm-tab">
                <div class="row m-2 row-cols-1 row-cols-md-2 d-flex justify-content-between">
                  <form class="d-flex justify-content-start align-items-center">
                    <label class="me-2">Number of absences:</label>
                    <input class="border-bottom px-2" id="disabledTextInput2" type="number" title="3" disabled>
                    <i class='bx bx-edit ms-2' id="edit_att_req2"></i>
                  </form>
                  <div class="col-3 d-flex justify-content-end">
                    <a href="./add_standard-setting.php" class="btn btn-outline-secondary btn-add ms-3 brand-bg-color" type="button"><i class='bx bx-plus-circle'></i></a>
                  </div>
                </div>

                <div class="d-flex justify-content-end">
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
                      <td>10% </td>
                      <td class="text-center">
                        <a href="# "><i class='bx bx-edit text-success' ></i></a>
                        <i class='bx bx-trash-alt text-danger' ></i>
                      </td>
                    </tr>
                    <tr>
                      <td>Quiz</td>
                      <td>20% </td>
                      <td class="text-center">
                        <a href="# "><i class='bx bx-edit text-success' ></i></a>
                        <i class='bx bx-trash-alt text-danger' ></i>
                      </td>
                    </tr>
                    <tr>
                      <td>Activity</td>
                      <td>20% </td>
                      <td class="text-center">
                        <a href="# "><i class='bx bx-edit text-success' ></i></a>
                        <i class='bx bx-trash-alt text-danger' ></i>
                      </td>
                    </tr>
                    <tr>
                      <td>Major Exam</td>
                      <td>50% </td>
                      <td class="text-center">
                        <a href="# "><i class='bx bx-edit text-success' ></i></a>
                        <i class='bx bx-trash-alt text-danger' ></i>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script src="./js/main.js"></script>
  <script src="./js/profiling_table.js"></script>
</body>
</html>