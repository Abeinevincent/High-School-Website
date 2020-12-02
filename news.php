<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <!-------------------Important Meta Tags--------------->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    
        <!--Font Awesome Icons-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        
        <!-- CSS -->
        <link rel="stylesheet" href="style.css">
    
        <!--Website Title-->
        <title>Global High School Ntungamo</title>
    </head>
    <body>
        
      <!--------------------------MAIN HEADER-------------------------->    
      <?php include'header.php';?>
     
            <!-----------------------NAVIGATION BAR----------------------------->
          <?php include'nav.php';?>

        <!------------------------NEWS AND UPDATES---------------------->
        <div class="container-fluid mb-4">
          <div class="row">
              <div class="col-md-12">
                  <div id="carousel1" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Images/com.jpg" class="d-block w-100" alt="..." style="height: 300px;" />
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="mt-3 font-weight-bold" style="margin-bottom: 35px!important; font-size: 2.5rem;">NEWS & UPDATES</h2>
                                <p class="text-center mb-5"><span style="color: yellow;">Global High School</span> > News & updates</p>
                            </div>
                        </div>
                      </div>
                  </div> 
              </div>
          </div>
        </div>
        
        <!---------------------NEWS SECTION--------------------->
        <div class="container w-100" style="font-size: 20px;">
            <div class="row mr-5">
                <div class="col-md-8">
                    <h2 class="text-info pt-5 pb-3">Welcome to <span class="text-danger">Global High School Ntungamo</span></h2>
                    <h5>Recent Posts</h5>
                    <p class="pb-3">
                        <i class="fa fa-"></i>Posted on <span class="text-muted mr-3">Nov 2019</span>
                        <i class="fa fa-"></i>By <a href="#"><span class="text-muted mr-3">an admin</span></a>
                        <i class="fa fa-"></i><a href="#"><span class="text-muted">General</span></a>
                        <i class="fa fa-"></i><span class="text-muted">Comments</span>
                    </p>
                    <p class="pb-3">Welcome to Global High School Website. You are now able to know more and receive updates from our School</p>
                    <a href="about.php" class="btn btn-primary">READ MORE</a>
                </div>
                <div class="col-md-4">
                    <div class="card w-80 justify-content-center mt-5 ml-5 bg-transparent" style="height: 150px;">
                        <div class="card-body">
                            <input type="search" placeholder="Search.." class="form-control" name="search" />
                            <button type="button" class="btn btn-success w-90 px-4 py-2 my-4 w-100">Search</button>
                        </div>
                    </div>
                    <div class="card w-80 justify-content-center mt-5 ml-5 bg-transparent" style="height: 150px;">
                        <div class="card-body">
                            <h4 style="color: rgb(0,0,160);">Recent Posts</h4>
                            <hr class="w-50" style="text-align: right; color: yellow; border: 2px solid yellow;">
                            <p><a href="#">Welcome to Global High School</a></p>
                        </div>
                    </div>
                    <div class="card w-80 justify-content-center mt-5 ml-5 bg-transparent" style="height: 150px;">
                        <div class="card-body">
                            <h4 style="color: rgb(0,0,160);">Archives</h4>
                            <hr class="w-50" style="text-align: right; color: yellow; border: 2px solid yellow;">
                            <p><a href="#">Posted on Nov 2020</a></p>
                        </div>
                    </div>
                    <div class="card w-80 justify-content-center mt-5 ml-5 mb-5 bg-transparent" style="height: 150px;">
                        <div class="card-body">
                          <h4 style="color: rgb(0,0,160);">Categories</h4>
                            <hr class="w-50" style="text-align: right; color: yellow; border: 2px solid yellow;">
                            <p><a href="#">General</a></p>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- ---------------------FOOTER SECTION------------------------>

    <?php include'footer.php';?>
      <!-- Footer -->   
        
        <!----Jquery first then Popper JS then JavaScript---->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="web.js" type="text/javascript"></script>
    </body>
</html>