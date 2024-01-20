<div class="d-flex flex-column flex-shrink-0 p-3 border-end border-dark position-fixed" style="max-width: 215px; height: 100%; background-color: white;">
  <a href="./index.php" class="d-flex align-items-center justify-content-center mb-md-0 link-dark text-decoration-none">
    <img src="../img/wmsu_logo.png" class="me-2" alt="" width="50px" height="50px">
    <span class="fs-2 h1 m-0 brand-color ">Admin</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="./index.php" class="nav-link link-dark d-flex align-items-center mb-2 <?= $curriculum_page ?>" aria-current="page">
        <i class='bx bxs-graduation fs-4'></i>
        <span class="fs-6 ms-2">Curriculum</span>
      </a>
    </li>

    <li class="nav-item">
      <div class="btn-group d-flex flex-column">
        <div class="link-grp d-flex justify-content-between">
          <a href="./profiling.php" class="nav-link link-dark d-flex align-items-center mb-2 w-100 border-end border-3 border-white <?= $profiling_page ?>" type="button">
            <i class='bx bxs-dashboard fs-4'></i>
            <span class="fs-6 ms-2">Profiling</span>
          </a>
          <button class="btn btn-toggle link-dark d-flex align-items-center mb-2 nav-link <?= $profiling_page ?> " data-bs-toggle="collapse" data-bs-target="#profiling_toggle" aria-expanded="false">
            <i class='bx bx-chevron-down'></i>
          </button>
        </div>

        <div class="collapse" id="profiling_toggle" style="">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="./profiling.php" class="link-dark nav-link <?= $profiling_page ?>">
              <i class='bx bx-git-commit'></i>
              <span class="fs-6 ms-2">Profiling</span>
            </a></li>
            <li><a href="#" class="link-dark nav-link <?= $comci_page ?>">
              <i class='bx bx-git-commit'></i>
              <span class="fs-6 ms-2">Department of Computer Science</span>
            </a></li>
            <li><a href="#" class="link-dark nav-link <?= $it_page ?>">
              <i class='bx bx-git-commit'></i>
              <span class="fs-6 ms-2">Department of Information Technology</span>
            </a></li>
          </ul>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <div class="btn-group d-flex flex-column">
        <div class="link-grp d-flex justify-content-between">
          <a href="./manage_acc.php" class="nav-link link-dark d-flex align-items-center mb-2 w-100 border-end border-3 border-white <?= $manage_acc ?>" type="button">
            <i class='bx bx-user fs-4'></i>
            <span class="fs-6 ms-2">Manage Account</span>
          </a>
          <button class="btn btn-toggle link-dark d-flex align-items-center mb-2 nav-link <?= $manage_acc ?> " data-bs-toggle="collapse" data-bs-target="#mnge_acc_toggle" aria-expanded="false">
            <i class='bx bx-chevron-down'></i>
          </button>
        </div>

        <div class="collapse" id="mnge_acc_toggle" style="">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark nav-link <?= $acc_setup ?>">
              <i class='bx bx-git-commit'></i>
              <span class="fs-6 ms-2">Account Setup</span>
            </a></li>
            <li><a href="#" class="link-dark nav-link <?= $user_acc ?>">
              <i class='bx bx-git-commit'></i>
              <span class="fs-6 ms-2">User Account</span>
            </a></li>
          </ul>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a href="./main-subject_setting.php" class="nav-link link-dark d-flex align-items-center mb-2  <?= $faculty_page ?>">
        <i class='bx bxs-user-circle fs-4' ></i>
        <span class="fs-6 ms-2">Faculty</span>          
      </a>
    </li>
    <li class="nav-item">
      <a href="./main-subject_setting.php" class="nav-link link-dark d-flex align-items-center mb-2  <?= $grade_page ?>">
        <i class='bx bx-library fs-4'></i>
        <span class="fs-6 ms-2">Grade</span>          
      </a>
    </li>
    <li class="nav-item">
      <a href="./admin_settings.php" class="nav-link link-dark d-flex align-items-center mb-2  <?= $setting_page ?>">
        <i class='bx bx-cog fs-4'></i>
        <span class="fs-6 ms-2">Setting</span>          
      </a>
    </li>
  </ul>
  <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="../img/profile-img/profile.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>UserName</strong>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
        <li><a class="dropdown-item" href="../login.php">Sign out</a></li>
      </ul>
    </div>
</div>