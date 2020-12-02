<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <!---Important Meta Tags--->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
        <!---- Bootstrap Links --->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

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
        
        <!----------------------------SLIDER------------------------------->
        <section id="slider">
            <div class="row">
                <div class="col-md-12">
                    <div id="carousel1" class="carousel slide" data-ride="carousel" data-interva="5000">
                        
                        <ol class="carousel-indicators">
                          <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel1" data-slide-to="1"></li>
                          <li data-target="#carousel1" data-slide-to="2"></li>
                          <li data-target="#carousel1" data-slide-to="3"></li>
                        </ol>

                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="Images/hm.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5></h5>
                              <p></p>
                            </div>
                          </div>

                          <div class="carousel-item">
                            <img src="Images/lab.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5></h5>
                              <p></p>
                            </div>
                          </div>

                          <div class="carousel-item">
                            <img src="Images/play.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5></h5>
                              <p></p>
                            </div>
                          </div>

                        </div>
                        <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-----------------------WELCOME SECTION---------------------------->
        <div class="container my-3" style="background-color: #f5f5f5; font-size: 1.2rem;">
            <h4 class="title font-weight-bold text-uppercase p-5">Welcome to <span class="text-danger">Global High School Ntungamo</span></h4>
            <div class="row">
                <div class="col-md-4">
                    <p class="text" >
                        Global High School Ntungamo was founded in rolem ipsum by rolem ipsum
                        Society to train students in skills 
                        that would make them better people and also give them education based on christian 
                        principles
                    </p>
                    <p class="text">
                        Special emphasis is put on education and development of life skills and values 
                        in students, which has made the school to remain among the best secondary schools in the region
                    </p>    
                </div>
                <div class="col-md-4">
                    <h5 class="text-uppercase font-weight-bold" style="text-shadow: 2px 2px 2px blue ;">School Motto</h5>
                    <p class="text-transform-capitalise">Serve and be served</p>
                    <h5 class="text-uppercase font-weight-bold" style="text-shadow: 2px 2px 2px blue ;">School Mission</h5>
                    <p class="text-transform-capitalise">
                        To produce a safe and futuristic generation that is able to compete in the world of 
                        ever growing technology
                    </p>
                    <h5 class="text-uppercase font-weight-bold" style="text-shadow: 2px 2px 2px blue ;">School Vision</h5>
                    <p class="text-transform-capitalise">A safe and futuristic generation</p>

                </div>
                <div class="col-md-4">
                    <img src="Images/cpd.jpg" alt="" class="w-100 h-90 img-fluid">
                </div>
            </div>
        </div>

        <!---------------------------SUPER COOL COUNTER------------------------>
        <div class="container-fluid w-100 bg-dark" style="width: 250px;">
            
        </div>
        

            
        <!---------------------------STUDENT'S SECTION------------------------->
        <div class="container justify-content-center pb-5" style="font-size: 20px;">
            <h4 class="text-center font-weight-bold text-uppercase pt-4 pb-1">OUR <span class="text-danger">STUDENTS</span></h4>
            <p class="text-center font-weight-bold pb-4">Students’ Articles, Prefects, and Pictorial. All you need to know about Global High School</p>
                <div class="col-md-12">
                <div class="card-deck">
                  <div class="card justify-content-center">
                    <img src="Images/art.JPG" class="card-img-top w-100" alt="..." style="width: 100px;">
                    <div class="card-body">
                      <h5 class="card-title text-uppercase text-danger">Pupil's Articles</h5>
                      <p class="card-text">Read about Global High School student's articles, what they think, their dreams, etc.</p>
                      <a href="academia.php" class="btn btn-primary" style="font-size: 20px;">Read More</a> 
                    </div>
                  </div>
                
                  <div class="card justify-content-center">
                    <img src="Images/class.JPG" class="card-img-top w-100" alt="..." style="width: 100px;">
                    <div class="card-body">
                      <h5 class="card-title text-uppercase text-primary">Class Photos</h5>
                      <p class="card-text">View pupils students at school, celebrations, events and school Trips.</p>
                      <a href="gallary.php" class="btn btn-primary" style="font-size: 20px;">Read More</a>
                    </div>
                  </div>
                
                  <div class="card justify-content-center">
                    <img src="Images/58.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-info text-uppercase">Downloads</h5>
                      <p class="card-text">Download Student's holiday packages, school materials, Remedials, Application form.</p>
                      <a href="academia.php" class="btn btn-primary" style="font-size: 20px;">Read More</a>
                    </div>
                  </div>
                </div>
            </div>

        </div>
        
        <!-------------------------VISITOR'S RESPONSE--------------------------->
        <div class="container-fluid bg-dark text-white"style="font-size: 20px;">
            <div class="row">
                
                <div class="col-md-7">
                    <h5 class="m-4">WORD FROM THE DIRECTOR</h5>
                    <p class="m-4">
                        I welcome you in the name of the Almight God, to Global High School.I continue to thank you both parents and teachers for great work done in the running of school activities.
                    </p>
                </div>
                <div class="col-md-5">
                    <h5 class="mr-5">Mr. Byarugaba Aggrey </h5>
                    <img src="Images/57.jpg" alt="" class="item mr-5" style="width: 250px; height: 200px;">
                </div>
               
            </div>
        </div>
        

        <!--------------------------GLOBAL SECTION------------------------------>
        <div class="container" style="font-size: 20px;">
              <div class="row">
                  <div class="col-12 col-md-6 p-3">
                      <h1 class="title font-weight-bold my-3">Global High School</h1>
                      <p class="text my-3">
                          Global High School Welcomes you all to an exciting online survey of this Great School. Through this website, you are going to be able to receive and enjoy multiple and timely updates on our students’ academic performance, events, meetings and much more from the School.
                      </p>
                      <p class="text my-3">
                          To know more about our School, traverse the different links in the top navigation bar
                           through the different pages of Our current Staff, Academics, Sports, Students and many others.
                      </p>
                      <p class="text my-3">
                          We wish you the best of what Global High School has to offer. Thank you.
                      </p>
                      <p class="text my-3">
                          Global High School Website
                      </p>
                  </div>
              <div class="col-12 col-md-6 p-3">
                    <!----some descriptive video here video here---->
              <div class="col-md-6">
                <img src="Images/64.jpg" alt="" class="item mr-5" style="width: 550px;">
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