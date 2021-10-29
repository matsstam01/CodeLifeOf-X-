
<?php 
  include 'nav.php';
        
  if(isset($_POST["submit"])){
    include 'connect.php';// Check connection
          
    if(!empty($_POST['Email']) && !empty($_POST['Ww']) && !empty($_POST['UserN'])) {  
      $sql = "INSERT INTO `users`(`User_name`, `Email`, `Rechten`, `pass`) VALUES ('" . $_POST['UserN'] . "','" . $_POST['Email'] . "','user','" . $_POST['Ww'] . "')";
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }      
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      header("Location: index.php?" . $_POST["UserN"]); 
    }
  }
?>
<!DOCTYPE html>
  <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Life of -X- | Register</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
      <!-- Main Content-->
        <main>
        <div class="row">
          <div class="col-md-1 col-lg-2 col-xl-2 side_border"></div>
          <div class="col-md-10 col-lg-8 col-xl-8" id="mainC">
            <hr>
            <center><h2>Register</h2></center>
            <hr>
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8 col-xl-7">
                <p></p>          
                <div class="my-3">
                  <form action="" method="POST">
                      <div class="form-floating">
                        <input class="form-control" id="inputName" type="text" name="UserN" placeholder="Enter your name..." />
                        <label for="inputName">User name</label>
                    </div>
                      <div class="form-floating">
                        <input class="form-control" id="inputEmail" type="email" name="Email" placeholder="Enter your email..." />
                        <label for="inputEmail">Email address</label>
                    <div>
                    <div class="form-floating">
                      <input class="form-control" id="inputPassword" type="password" name="Ww" placeholder="Enter your password..." />
                      <label for="inputPassword">Password</label>
                    </div>
                    <br>
                    <input class="btn btn-primary text-uppercase" name="submit" type="submit" value="Register">
                  </form>
                  <br>
                  <br>
                </div>
                  <hr>
                  <center>
                    <h3>Login</h3>
                    <p>Already have a account <a href="login.php">Click here</a> to login</p>
                  </center>
                  <br>
                  <br>
              </div>
            </div>
          </div>
    </div>
            </div>
          <div class="col-md-1 col-lg-2 col-xl-2 side_border"></div>
        </main>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>