<div class="row">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav">
    <div class="col-2">
      <a class="navbar-brand">
        <img src="img/logo.jpg" id="nav_logo" width="30" height="30" class="align-top" alt="">
        The life of -x-
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="col-7">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="posts.php">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create.php">Create post</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Account
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php 
                session_start();
                
                if (isset($_SESSION['sess_user'])) {
                  echo('
                    <a class="dropdown-item" href="logout.php">Logout</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="settings.php">Settings</a>
                  ');
                }else{
                    echo('
                      <a class="dropdown-item" href="login.php">Login</a>
                      <a class="dropdown-item" href="register.php">Register</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="settings.php">Settings</a>
                    ');
                }
              ?>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="col-2"></div>

    <div class="col-1"></div>
  </div>
</nav>