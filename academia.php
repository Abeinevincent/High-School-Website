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

        <!-----------------ACADEMICS SECTION---------------------------->
        <div class="container-fluid mb-5">
          <div class="row">
              <div class="col-md-12">
                  <div id="carousel1" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="Images/micro.jpg" class="d-block w-100 mr-5" alt="..." style="height: 300px;">
                          <div class="carousel-caption d-none d-md-block">
                              <h2 class="m-3 mb-5 font-weight-bold" style="margin-bottom: 25px!important; font-size: 3rem;">ACADEMIA</h2>
                              <p class="text-center mb-5"><span style="color: yellow;">Global High School</span> > Academia</p>
                          </div>
                        </div>

                      </div>
                  </div> 
              </div>
          </div>
        </div>

        <h3 class="font-weight-bold p-2 pb-0 mb-0 text-uppercase" style="margin-left: 250px;">Subjects Taught</h3>
        <div class="container mt-1 mb-4 text-white" style="background-color: grey; border: 1px solid black; border-radius: 5px; height: 600px;">    
          <div class="row">
              <div class="col-12" style="margin-left:500px;">
                <h5>Sciences</h5>
                <hr />
                <ul>
                  <li>Chemistry</li>
                  <li>Physics</li>
                  <li>Biology</li>
                  <li>Mathematics</li>
                  <li>Agriculture</li>
                  <li>Computer</li>
                </ul>
                <h5>Arts</h5>
                <hr />
                <ul>
                  <li>History</li>
                  <li>Economics</li>
                  <li>Entrepreneureship</li>
                  <li>Fine Art</li>
                  <li>Geography</li>
                  <li>Divinity / Christian Religious Education</li>
                </ul>
                <h5>Languages</h5>
                <hr />
                <ul>
                  <li>English</li>
                  <li>Literature</li>
                  <li>Kiswahili</li>
                </ul>
              </div>
            </div>
        </div>

        <div class="container justify-content-center">
          <h3 class="text-center">UACE RESULTS</h3>
          <p class="text-muted text-center my-3" style="font-size: 1.2rem;"><a class="text-dark text-muted" href="results/uace.pdf">UACE 2019</a></p>
          <p class="text-muted text-center" style="font-size: 1.2rem;"><a class="text-dark text-muted" href="results/uace.pdf">UACE 2018</a></p>
          <p class="text-muted text-center" style="font-size: 1.2rem;"><a class="text-dark text-muted" href="results/uace.pdf">UACE 2017</a></p>
          <p class="text-muted text-center" style="font-size: 1.2rem;"><a class="text-dark text-muted" href="results/uace.pdf">UACE 2016</a></p>

          <h3 class="text-center">UCE RESULTS</h3>
          <p class="text-muted text-center my-3" style="font-size: 1.2rem;"><a class="text-dark text-muted" href="results/uce.pdf">UCE 2019</a></p>
          <p class="text-muted text-center" style="font-size: 1.2rem;"><a class="text-dark text-muted" href="results/uce.pdf">UCE 2018</a></p>
          <p class="text-muted text-center" style="font-size: 1.2rem;"><a class="text-dark text-muted" href="results/uce.pdf">UCE 2017</a></p>
          <p class="text-muted text-center mb-5" style="font-size: 1.2rem;"><a class="text-dark text-muted" href="results/uce.pdf">UCE 2016</a></p>
          </div>
        </div>

        <!-- ---------------------FOOTER SECTION------------------------>

        <?php include'footer.php'?>
      <!-- Footer -->   

        
        <!----Jquery first then Popper JS then JavaScript---->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="web.js" type="text/javascript"></script>
    </body>
</html>