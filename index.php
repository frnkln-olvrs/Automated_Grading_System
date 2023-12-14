<!DOCTYPE html>
<html lang="en">
<?php 
	$title = 'Home';
	include './includes/head.php';
?>
<body>
  <div class="navigation sticky-top">
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
        <nav class="d-none d-md-block">
          <div class="container-fluid d-flex justify-content-center">
            <span class="fs-2 h1 m-0">Subject Assigned</span>
          </div>
        </nav>
      </div>

      <div class="m-4">
        <div class="details">
          <p>Name: <span>lastname, firstname mi</span></p>
          <p>Desgnation: <span>Desgnation</span></p>
          <p>Academic Rank: <span>Academic Rank</span></p>
          <p>Release Time: <span>Release Time</span></p>
        </div>

        <div class="content border rounded shadow p-3">
          <div class="d-flex flex-column align-items-center">
            <h3>S.Y 2023 - 2024</h3>
            <h4>First Semester</h4>
          </div>

          <table id="example" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>#</th>
                <th>Subject</th> <!--Code & Description-->
                <th>Subject ID</th>
                <th>Prerequisite</th>
                <th>Year/ Section</th>
                <th># of Students</th>
                <th>Room</th>
                <th>Schedules</th>
                <th>units</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>count</td>
                <td><a href="#">CS</a></td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>

    </main>
  </div>

  <script src="./js/main.js"></script>
  
</body>
</html>