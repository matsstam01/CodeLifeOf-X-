<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Life of -X- | Home</title>
        <link rel="icon" type="image/x-icon" href="img/Clogo.png" />
        <!-- Font Awesome icons (free version)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body  onload="onLoadP();">
        <!-- Navbar -->
        <?php
            include 'nav.php';
            include 'connect.php';

            $posts = "SELECT * FROM `posts`";
            $query = $conn->query($posts);
            $postData = mysqli_fetch_all ($query, MYSQLI_ASSOC);

            $postC = count($postData);
            // echo json_encode($postData);
        ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('img/BG.png')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1></h1>
                            <span class="subheading">A Blog Theme by The life of -X-</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="row">
          <div class="col-1 side_border"></div>
          <div class="col-10">
            <div class="alert alert-primary alert-dismissible fade show collapse" role="alert">
              <div class="row">
                  <div class="col-1"></div>
                  <div class="col-10">
                    <a id="alertText"></a>
                  </div>
                  <div class="col-1">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-1 side_border"></div>
        </div>
        <!-- Main Content-->
        <div class="row">
          <div class="col-md-0 col-lg-1 col-xl-1 side_border"></div>
          <div class="col-md-12 col-lg-10 col-xl-10">
            <div class="row gx-4 gx-lg-5 justify-content-center">
              <?php 
                for($x=0; $x<$postC; $x++){
                    if($x <= 2){   
                        echo('
                          <div class="col-md-5 col-lg-4 col-xl-4"
                            <!-- Post preview-->
                            <div class="post-preview">
                              <a href="post.php?id=' . $postData[$x]['ID'] . ' ">
                                <h2 class="post-title">' . $postData[$x]['Post_name'] . '</h2>
                                <h3 class="post-subtitle">' . $postData[$x]['Post_Descr'] . '</h3>
                              </a>
                              <p class="post-meta">
                                Posted by
                                <a href="#!">' . $postData[$x]['User'] . '</a>
                                on ' . $postData[$x]['Date'] . '
                              </p>
                            </div>
                          </div> 
                        ');
                    }
                    else{
                        echo('
                          <hr class="my-4">
                          <!-- Post preview-->
                          <div class="post-preview">
                            <a href="post.php?id=' . $postData[$x]['ID'] . ' ">
                              <h2 class="post-title">' . $postData[$x]['Post_name'] . '</h2>
                              <h3 class="post-subtitle">' . $postData[$x]['Post_Descr'] . '</h3>
                            </a>
                            <p class="post-meta">
                              Posted by
                              <a href="#!">' . $postData[$x]['User'] . '</a>
                              on ' . $postData[$x]['Date'] . '
                            </p>
                          </div>  
                        ');
                    }
                }
              ?>
              </div>
              <!-- Divider-->
              <hr class="my-4" />
              <!-- Pager-->
              <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
              </div>
          <div class="col-1 side_border"></div>
          </div>
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Mats Stam 2021</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
