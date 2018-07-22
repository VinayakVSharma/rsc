<?php 

require_once("./include/db_config.php");
require_once("./include/acm_membership_config.php");

if(isset($_POST['submit']))
            {
                $post_title = mysqli_real_escape_string($conn, $_POST['post_title']);
                $post_desc = mysqli_real_escape_string($conn, $_POST['post_description']);
                $post_content = mysqli_real_escape_string($conn, $_POST['post_content']);
                $category_id = mysqli_real_escape_string($conn, $_POST['post_content']);
                $img_status = mysqli_real_escape_string($conn, $_POST['img_status']);
                $userid = $acm->User_Id();
                // attempt insert query execution
                if($img_status == "1")
                {
                    $target_dir = "../images/blog/";
                    $target_file = $target_dir.basename($_FILES["file"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                    $check = getimagesize($_FILES["file"]["tmp_name"]);
                    if($check !== false)
                    {
                      $uploadOk = 1;
                    }
                    else
                    {
                      $uploadOk = 0;
                    }
                    if(file_exists($target_file))
                    {
                      $uploadOk=0;
                    }
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
                    {
                      $uploadOk =0;
                    }  
                    if($uploadOk == 1)
                    {
                      if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file))
                      {
                        $sql = "INSERT INTO post (post_title,post_description,post_content,author_id,category_id,view_count,image_status,image_link) VALUES ('$post_title','$post_desc','$post_content','$userid','$category_id',1,'$target_file')";
                        if(mysqli_query($conn, $sql)){
                        ?>
                        <div class="row">
            <div class="col-sm-12">
              <div class="alert alert-success alert-dismissible">
                <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                <strong>You Have Logged Out Successfully!</strong>
              </div>
                </div>
            </div>
            <?php
                          } else{
                 ?>
                       <div class="row">
            <div class="col-sm-12">
              <div class="alert alert-danger alert-dismissible">
                <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                <strong>Something Went Wrong! Please Try Again!</strong>
              </div>
                </div>
            </div>
                 <?php
                        }

                      }
                      else
                      {
                        ?>
                             <div class="row">
            <div class="col-sm-12">
              <div class="alert alert-danger alert-dismissible">
                <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                <strong>Something Went Wrong! Please Try Again!</strong>
              </div>
                </div>
            </div>
                        <?php
                      }
                    }
                    else
                    {

                      ?>
                           <div class="row">
            <div class="col-sm-12">
              <div class="alert alert-danger alert-dismissible">
                <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                <strong>There is some error with your file!</strong>
              </div>
                </div>
            </div>
                   <?php }

                    
 
                }
                else
                {
                      $sql = "INSERT INTO post (post_title,post_description,post_content,author_id,category_id,view_count,image_status,image_link) VALUES ('$post_title','$post_desc','$post_content','$acm->User_Id()','$category_id',1,'$target_file')";
                        if(mysqli_query($conn, $sql)){
                        ?>
                        <div class="row">
            <div class="col-sm-12">
              <div class="alert alert-success alert-dismissible">
                <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                <strong>You Have Logged Out Successfully!</strong>
              </div>
                </div>
            </div>
            <?php
                          } else{
                 ?>
                       <div class="row">
            <div class="col-sm-12">
              <div class="alert alert-danger alert-dismissible">
                <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                <strong>Something Went Wrong! Please Try Again!</strong>
              </div>
                </div>
            </div>
                 <?php
                        }
                }
              }
            ?>