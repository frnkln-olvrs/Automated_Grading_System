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
            <span class="fs-2 h1 m-0 text-uppercase">midterm</span>
          </div>
        </div>
      </div>

      <div class="m-4">
        <span class="fs-2 h1 m-0 fw-bold brand-color">CS 137</span>

        <div class="content container-fluid mw-100 border rounded shadow p-3">
          
          

          <table id="home_table" class="table table-striped" style="width:125%">
            <thead>
              <tr>
                <th rowspan="2">#</th>
                <th rowspan="2">Subject</th> <!-- Code & Description -->
                <th rowspan="2">Subject ID</th>
                <th rowspan="2">Prerequisite</th>
                <th rowspan="2">Year/ Section</th>
                <th rowspan="2"># of Students</th>
                <th colspan="2">Room</th>
                <th colspan="2">Schedules</th>
                <th colspan="3">Units</th>
              </tr>
              <tr>
                <th>Lecture</th>
                <th>Laboratory</th>
                <th>Lecture</th>
                <th>Laboratory</th>
                <th>Lec</th>
                <th>Lab</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><a href="./subject-info.php">CS137 - Software Engineering 1</a></td>
                <td>BSCS123456</td>
                <td>CS121, CS104</td>
                <td>BSCS 3B</td>
                <td>36</td>
                <td>lr1</td>
                <td>lab1</td>
                <td>MWF - 10:00-12:00</td>
                <td>TTH - 1:00-4:00</td>
                <td>2</td>
                <td>3</td>
                <td>5</td>
              </tr>
              <tr>
                <td>2</td>
                <td><a href="#">CS140 - CS Elective 2</a></td>
                <td>BSCS654321</td>
                <td>CS128</td>
                <td>BSCS 3A</td>
                <td>23</td>
                <td>lr4</td>
                <td>lab2</td>
                <td>MWTH - 7:00-8:30</td>
                <td>TFS - 2:00-5:00</td>
                <td>3</td>
                <td>4</td>
                <td>7</td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>

    </main>
  </div>

  <script src="./js/main.js"></script>
  <script src="./js/index_table.js"></script>
  
</body>
</html>