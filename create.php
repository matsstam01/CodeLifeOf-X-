<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Life of -X- | Create post</title>
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
          <div class="col-md-1 col-lg-1 col-xl-1 side_border"></div>
          <div class="col-md-10 col-lg-10 col-xl-10" id="mainC">
            <form action="./uploadPost.php" method="post" enctype="multipart/form-data">
              <center><h2>Create post</h2></center>
              <hr>
              <div class="row">
                <div id="blur0" class="col-md-4 col-lg-4 col-xl-4">
                  Post info:
                  <hr class="closeHr">
                  <div style="margin-left:5px;" class="form-floating noTop">
                    <input name="Post_Name" class="noTop form-control" id="postName" type="text" placeholder="Enter your post name..." />
                    <label for="postName">Post name</label>
                  </div>
                  <div style="margin-left:5px;" class="form-floating">
                    <input name="Post_Descr" type="text" class="form-control" id="postDescr" placeholder="Post descriotpion">
                    <label for="postDescr">Post Descrioption</label>
                  </div>
                  <br>
                </div>
                <div id="blur1" class="col-md-4 col-lg-4 col-xl-4 blur">
                  Select a cover image for your post:
                  <hr>
                  <center><img id="blah" src="./img/nothing.png" alt="your image" /></center>
	                <input class="form-control form-control-sm closeHr" name="Post_Cover" id="imgInp" type="file">
                  <a for="imgInp" class="SmallTxt noTop">Max image size: 1200px * 800px</a>
                  <br>
                </div>
                <div id="blur2" class="col-md-4 col-lg-3 col-xl-3 blur">
                  Post pictures:
                  <hr> 
                  <a style="font-size:18px; padding-left:5px;">Does your post have images?</a><br>
                  <input name="Post_Image" onclick="addImg()" class="form-check-input"style="margin-left:10px;"  type="radio" id="imgRadio1" value="Yes">
                  <label class="form-check-label smallerTxt" for="imgRadio1">Yes</label>
                  <input name="Post_Image" onclick="noImg()" class="form-check-input" type="radio" id="imgRadio2" value="No">
                  <label class="form-check-label smallerTxt" for="imgRadio2">No</label>
                  <div id="addImg"></div>
                </div>
                <hr>
              </div> 
              <div class="row">
                <div class="col-md-1 col-lg-2 col-xl-2"></div>
                <div class="col-md-10 col-lg-8 col-xl-8" id="imgSlct">
                  <a id="image1"></a>
                  <a id="image2"></a>
                  <a id="image3"></a>
                </div>
                <div class="col-md-1 col-lg-2 col-xl-2"></div>
              </div>
              <div class="row">
                <div class="col-md-4 col-lg-4 col-xl-4">
                  <div id="colum1">
                  </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4">
                  <div id="colum2">
                    <p> </p>
                  </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4">
                  <div id="colum3">
                    <button class="btn btn-primary text-uppercase" style="width:100%; margin-bottom:15px" onclick="next(blur='#blur0' , unblur='#blur1' , chngBtn='#colum3' , addBtn='#colum2')">Next</button>
                  </div>
                </div>
                <hr>
              </div>
              <div class="row">
                <div class="col-md-0 col-lg-1 col-xl-1"></div>
                <div class="col-md-12 col-lg-10 col-xl-10">
                  <label for="postText">Post text:</label><br>
                  <textarea id="postText" name="Post_Text"></textarea>
                  <br>
                  <input class="btn btn-success text-uppercase" name="submit" type="submit" value="Save">
                <div class="col-md-3 col-lg-4 col-xl-4"></div>
              </div>
            </form>
          <hr class="my-5">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
        <div class="col-md-1 col-lg-2 col-xl-2 side_border"></div>
        </div>
        </main>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
