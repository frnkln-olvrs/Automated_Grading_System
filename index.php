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

    </main>
  </div>
</html>