<?php  
if(isset($_POST["submit"])){
    include 'connect.php';// Check connection

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
  
if(!empty($_POST['email']) && !empty($_POST['ww'])) {  
    $user=$_POST['email'];  
    $pass=$_POST['ww'];  
  
    $sql = "SELECT * FROM users WHERE email='".$user."'";

    $result = $conn->query($sql);
           
    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
         $dbemail=$row['Email'];  
         $dbpassword=$row['pass'];  
         $dbusername=$row['User_name'];
       }
    } else {
       printf('No record found.<br />');
    }
  
    if($user == $dbemail && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$dbusername;
    $_SESSION['Email']=$dbemail;    
    /* Redirect browser */  
    header("Location: index.php?" . $dbusername. "");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}    
?>                             

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Life of -X- | Login</title>
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
      <!-- Navbar -->
      <?php 
        include 'nav.php';
      ?>
      <!-- Main Content-->
        <main>
        <div class="row">
          <div class="col-md-1 col-lg-2 col-xl-2 side_border"></div>
          <div class="col-md-10 col-lg-8 col-xl-8" id="mainC">
            <center><h2>Login</h2></center>
            <hr>
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="my-3">
                  <form action="" method="POST">
                    <div class="form-floating">
                      <input name="email" class="form-control" id="inputEmail" type="email" placeholder="Enter your email..." />
                      <label for="inputEmail">Email address</label>
                    </div>
                    <div class="form-floating">
                      <input name="ww" class="form-control" id="inputPassword" type="password" placeholder="Enter your email..." />
                      <label for="inputPassword">password</label>
                    </div>
                    <br>
                    <input class="btn btn-primary text-uppercase" name="submit" type="submit" value="Login">
                  </form>
                </div>
              </div>
          </div>
          <hr class="my-5">
           <center><h3>Register</h3>
           <p>Want to create a account? <a href="register.php">Click here</a></center></p>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
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
