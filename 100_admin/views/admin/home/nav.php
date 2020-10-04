<nav class="navbar fixed-top navbar-expand-lg" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="home.php">
                <i class="material-icons">home</i> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="home.php" class="nav-link">
              <i class="material-icons">home</i> Home
            </a>
          </li>
          <?php
            if(!isset($_SESSION['name']))
            {
              echo' <li class="nav-item">
              <a href="index.php" class="nav-link">
              <i class="material-icons">navigation</i>Login</a></li>';
            }
            else
            {
              echo' <li class="nav-item">
              <a href="profile-page.php" class="nav-link">
              <i class="material-icons">navigation</i>';
                echo $auser.'  
                </a>
                </li>
                <li class="nav-item">
                <a href="team.php" class="nav-link">
                <i class="material-icons">group</i> Team
                </a>
            </li>
            <li class="nav-item">
              <a href="team.php" class="nav-link">
              <i class="material-icons">apps</i> More
              </a>
          </li>';
              
            }
            ?>
          
            
        </ul>
      </div>
    </div>
  </nav>