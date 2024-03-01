<?php 

session_start();

if (!isset($_SESSION['user_role']) || (isset($_SESSION['user_role']) && $_SESSION['user_role'] != 2)) {
  header('location: ../login.php');
}

require_once '../classes/curr_year.class.php';

$currYear = new Curr_year();
if (isset($_GET['keyword'])) {
  $keyword = $_GET['keyword'];
  $results = $currYear->searchByYearStart($keyword);
} else {
  // If no keyword is set, display all curriculum items
  $curr_yearArray = $currYear->show();
}
?>

<!DOCTYPE html>
<html lang="en">
<?php 
	$title = 'ADMIN';
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
      
      <div class="flex-md-nowrap p-1 title_page shadow sticky-top" style="background-color: whitesmoke;" >
        <div class="d-flex align-items-center">
          <div class="container-fluid d-flex justify-content-center">
            <span class="fs-2 fw-bold h1 m-0 brand-color">CURRICULUM</span>
          </div>
        </div>
      </div>

      <div class="m-4">
        <div class="search-keyword col-12 flex-lg-grow-0 d-flex mb-3">
          <form class="input-group">
            <input type="text" name="keyword" id="keyword" placeholder="Search" class="form-control">
            <button class="btn btn-outline-secondary brand-bg-color" type="button" name="keyword" onclick="searchYearStart()"><i class='bx bx-search' aria-hidden="true"></i></button>
          </form>          

          <a href="./add_curri" class="btn btn-outline-secondary btn-add ms-3 brand-bg-color" type="button"><i class='bx bx-plus-circle'></i></a>
        </div>

        <div class="curriculum row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
          <?php 
            require_once '../classes/curr_year.class.php';
            $curr_year = new Curr_year();
            $curr_yearArray = $curr_year->show();

            if ($curr_yearArray) {
              foreach($curr_yearArray as $item) {
                // Check if keyword is set and if the item matches the keyword
                $displayItem = true;
                if (isset($_GET['keyword'])) {
                  $keyword = strtolower($_GET['keyword']);
                  if (strtolower($item['year_start']) != $keyword) {
                    $displayItem = false;
                  }
                }

                if ($displayItem) {
          ?>

          <div class="col">
            <a href="./course_select?year_id=<?= $item['curr_year_id'] ?>">
              <div class="d-flex align-items-center justify-content-between brand-bg-color p-4 fs-4 rounded">
                <i class='bx bxs-folder-open opacity-50' ></i>
                <div class="d-flex flex-column justify-content-start">
                  <span>curriculum</span>
                  <span><?= $item['year_start'] ?> - <?= $item['year_end'] ?></span>
                </div>
              </div>
            </a>
          </div>

          <?php 
                }
              }
            }
          ?>

        </div>
      </div>


    </main>
  </div>

  <script src="./js/main.js"></script>
  <script>
    function searchYearStart() {
      var keyword = document.getElementById('keyword').value.trim();
      if (keyword !== '') {
        fetch('search.php?keyword=' + encodeURIComponent(keyword))
          .then(response => {
            if (response.ok) {
              return response.text();
            }
            throw new Error('Network response was not ok.');
          })
          .then(data => {
            document.getElementById('searchResult').textContent = data;
          })
          .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
          });
      }
    }
  </script>

</body>
</html>
