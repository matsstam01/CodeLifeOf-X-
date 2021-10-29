<?php
    $targetDir = "D:/wamp64/www/CrewBlog/imgUpload/";
    $targetFile = $targetDir . basename($_FILES["Post_Cover"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
    $uploadChecked = 1;

    // if (file_exists($targetFile)) {
    //     echo "Sorry, file already exists.";
    //     $uploadOk = 0;
    // }

    $pcover = $_FILES['Post_Cover']['name'];
    $pname  = $_POST['Post_Name'];
    $pdecr  = $_POST['Post_Descr'];
    $pimg   = $_POST['Post_Image'];
    $ptext  = $_POST['Post_Text'];

    if(isset($_POST['Img_Count'])){
        $imgC = $_POST['Img_Count'];
        if($imgC == 1){
            $img = array(
                "img1" => $_FILES['image1']['name']
            );
        }
        elseif($imgC == 2){
            $img = array(
                "img1" => $_FILES['image1']['name'],
                "img2" => $_FILES['image2']['name']
            );
        }
        else{
            $img = array(
                "img1" => $_FILES['image1']['name'],
                "img2" => $_FILES['image2']['name'],
                "img3" => $_FILES['image3']['name']
            );
        }
        $imgDB = implode('|' , $img);
        for ($x = 1; $x <= $imgC; $x++) {
            $targetUpload = $targetDir . basename($_FILES["image$x"]['name']);
            move_uploaded_file($_FILES["image$x"]["tmp_name"], $targetUpload);
        }
    }
    else{
        $imgC = 0;
        $img = '';
    }

    if ($uploadChecked == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["Post_Cover"]["tmp_name"], $targetFile)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["Post_Cover"]["name"])). " has been uploaded.";

          include 'connect.php';
          include 'nav.php';

          $id = $_SESSION['sess_user'];

          $userID = "SELECT * FROM `users` WHERE `User_Name` = '$id'";
          $query = $conn->query($userID);

          $res = mysqli_fetch_array($query);

          echo($res['ID']);

          $sql = "INSERT INTO `posts`(
                    `User_ID`, 
                    `User`, 
                    `Post`, 
                    `Post_name`, 
                    `Post_Descr`, 
                    `Date`, 
                    `CoverImg`, 
                    `OtherImg`) 
                  VALUES (
                    '" . $res['ID'] . "',
                    '" . $_SESSION['sess_user'] . "',
                    '" . $ptext . "',
                    '" . $pname . "',
                    '" . $pdecr . "',
                    '" . date("Y/m/d") . "',
                    '" . $pcover . "',
                    '" . $imgDB . "')";
      
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }      
          if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
?>