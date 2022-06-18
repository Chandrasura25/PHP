<?php
session_start();
include 'dbcredentials.php';
$userDetail =$_SESSION['user_detail'];
// $postDetail =$_SESSION['post_detail'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dchat</title>
     <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
  
        .b-example-divider {
          height: 3rem;
          background-color: rgba(0, 0, 0, .1);
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
  
        .b-example-vr {
          flex-shrink: 0;
          width: 1.5rem;
          height: 100vh;
        }
  
        .bi {
          vertical-align: -.125em;
          fill: currentColor;
        }
  
        .nav-scroller {
          position: relative;
          z-index: 2;
          height: 2.75rem;
          overflow-y: hidden;
        }
  
        .nav-scroller .nav {
          display: flex;
          flex-wrap: nowrap;
          padding-bottom: 1rem;
          margin-top: -1px;
          overflow-x: auto;
          text-align: center;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
        }
        @import url('https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&display=swap'); 
      </style>
</head>

<body>
    <div class="container">
    <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 bg-transparent text-black" href="#"style="font-family: 'Oleo Script', cursive;">Instagram</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search" id="myInput">
        <form action="signout.php" method="post">
        <div class="navbar-nav">
          <div class="nav-item text-nowrap">
            <button type="submit" class="bg-transparent" style="border: none;" name="signout"><a class="nav-link px-3" href="">Sign out</a></button>
          </div>
        </div>
      </form>
      </header>
      
      <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
            <div class="position-sticky">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">
                    <span data-feather="" class="align-text-bottom"></span>
                   <div class="card bg-transparent" style="width:130px; height:190px; border:none;">
                     <img style='height:130px;' src='<?php echo "img/{$userDetail['profile_pic']}"?>' class="card-img-top" alt="...">
                     <div class="card-body">
                      <h5 class="text-center"><?php echo $userDetail['username']?> </h5>
                     </div>
                   </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file" class="align-text-bottom">
                      <div class="row">
                        <div class="col-3">
                          <h5>2</h5>
                          <small>Posts</small>
                        </div>
                        <div class="col-4">
                          <h5>23</h5>
                          <small>Followers</small>
                        </div>
                        <div class="col-3">
                          <h5>12</h5>
                          <small>Following</small>
                        </div>
                      </div>
                    </span>
                  </a>
                </li>
              </ul>
      
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                <span><a href="#" class="link text-black" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Posts</a></span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                  <span class="align-text-bottom"></span>
                </a>
              </h6>
              <ul class="nav flex-column mb-2">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <a href="#" class="link text-decoration-none ms-3 text-black" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Change Image</a></span>
                  </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <a href="#" class="link text-decoration-none ms-3 text-black" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Post with Image</a></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Settings
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Direct
                  </a>
                </li>
              </ul>
            </div>
          </nav>
      
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap  align-items-center pt-3 pb-2 mb-3">
              <?php
              $user_id =$_SESSION['user_detail']['user_id'];
              $query= "SELECT posts.post_id,posts.time,posts.post_content,posts.post_title,users.username FROM `posts` INNER JOIN `users` ON users.user_id=$user_id";
              $posts = $connectdb->query($query);
              $limit = 9;  
              $total_rows = mysqli_num_rows($posts);  
              $total_pages = ceil ($total_rows / $limit); 
              if (!isset ($_GET['page']) ) {  
                $page_number = 1;  
            } else {  
                $page_number = $_GET['page'];  
            }     
            $initial_page = ($page_number-1) * $limit;   

              if ($posts->num_rows > 0) {
                while ($postDetail = $posts->fetch_assoc()){
                      if($postDetail){
                        $_SESSION['post_detail']=$postDetail;
                        echo 
                        "<div class='card bg-transparent shadow border-info rounded mx-1' style='width:19vw;'>
                        <div class='card-header fw-bold d-flex' style='font-size:20px;'>
                        {$postDetail['post_title']}
                        <form action='delete.php' method='post'>
                        <input type='hidden' name='del_id' value='{$postDetail['post_id']}'/>
                        <button class='btn ms-auto'  type='submit' name='del'><i class='fa-solid fa-trash-can'></i></button>
                        </form>
                        <form action='edit.php' method='post'>
                        <input type='hidden' name='edit_id' value='{$postDetail['post_id']}'/>
                        <button class='btn' type='submit' name='edit'><i class='fa-solid fa-pencil'></i></button>
                        </form>
                        </div>
                        <div class='card-body'>
                        {$postDetail['post_content']}
                        </div>
                        <div class='card-footer'>
                        <span>{$postDetail['time']}</span>
                        <span>By {$postDetail['username']}</span>
                        </div>
                      </div>";
                      } 
                      else{
                          $_SESSION['post_error']="Not Successful, try again later";
                      }}
                  } else {
                      echo "Post a new post";
                  }
                  for($page_number = 1; $page_number<= $total_pages; $page_number++) {  

                    echo '<a href = "dashboard.php?page=' . $page_number . '">' . $page_number . ' </a>';  
            
                } 
              ?>
            </div>
            <div class="d-flex justify-content-between flex-wrap align-items-center">
            <?php
              $post_id =$_SESSION['post_detail']['post_id'];
              $query1= "SELECT * FROM `image` WHERE post_id='$post_id'";
              $image = $connectdb->query($query1);
              if ($image->num_rows > 0) {
                while ($imageDetail = $image->fetch_assoc()){
                  if($imageDetail){
                    $_SESSION['image_detail']=$imageDetail;
                    echo 
                        "<div class='card bg-transparent shadow border-info rounded my-2' style='width:19vw; height:42vh'>
                        <div class='card-header fw-bold d-flex' style='font-size:20px;'>
                        {$imageDetail['image_title']}
                        <form action='deleteimg.php' id='form' method='post'>
                        <input type='hidden' name='del_id' value='{$imageDetail['image_id']}'/>
                        <button class='btn ms-auto'  type='submit' name='del'><i class='fa-solid fa-trash-can'></i></button>
                        </form>
                        <form action='editimg.php' id='form' method='post'>
                        <input type='hidden' name='edit_id' value='{$imageDetail['image_id']}'/>
                        <button class='btn' type='submit' name='edit'><i class='fa-solid fa-pencil'></i></button>
                        </form>
                        </div>
                        <div class='card-body'>
                        <img style='height:130px; width:170px;' src='ipost/{$imageDetail['image_name']}' alt=''>
                        </div>
                        <div class='card-footer'>
                        <span>{$imageDetail['time']}</span>
                        </div>
                      </div></form>";
                      } 
                      else{
                          $_SESSION['post_error']="Not Successful, try again later";
                      }}
                
                  } else {
                      echo "Upload a new image";
                  }
                  ?>
            </div>
          </main>
        </div>
      </div>
    </div>
           <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
  </button> -->
  
  <!-- Modal -->
  <div class="modal fade mt-5" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog mt-5">
      <div class="modal-content"id="contain">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Remember Something, Post Something</h5>
        </div>
        <form action="post.php" method="post">
        <div class="modal-body">
            <div class="inputBox">
                <input type="text" class="form-control mb-4" name="post_title"placeholder="Enter the title of your post" id="emailInput"style="background-color:transparent !important;">
            </div>
            <div class="inputBox">
                <textarea type="text" name="post_content" class="form-control" placeholder="Make a Post" id="passwords"style="background-color:transparent !important;"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="posts" class="btn btn-primary">Post</button>
        </div>
      </form>
      </div>
    </div>
  </div>
          <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
  </button> -->
  
  <!-- Modal -->
  <div class="modal fade mt-5" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog mt-5">
      <div class="modal-content"id="contain">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Change your outlook</h5>
        </div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="inputBox">
                <input type="file" name="img" class="form-control bg-transparent" placeholder="Make a Post"></input>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="file" class="btn btn-primary">Change</button>
        </div>
      </form>
      </div>
    </div>
  </div>
            <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
  </button> -->
  
  <!-- Modal -->
  <div class="modal fade mt-5" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog mt-5">
      <div class="modal-content"id="contain">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Posting helps Remembrance</h5>
        </div>
        <form action="img.php" method="post" enctype="multipart/form-data">
        <div class="inputBox mx-3 my-2">
                <input type="text" class="form-control mb-2" name="image_title"placeholder="Enter the title of your post" id="emailInput"style="background-color:transparent !important;">
            </div>
        <div class="modal-body">
            <div class="inputBox">
                <input type="file" name="image_name" class="form-control" placeholder="Make a Post" style="background-color:transparent !important;"></input>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="img" class="btn btn-primary">Upload</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</body>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#form").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script src="dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script>
    feather.replace()
  </script>
</html>