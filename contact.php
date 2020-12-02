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
    
        <!------------------------CONTACT US---------------------->
        
        <div class="container-fluid mb-5">
          <div class="row">
              <div class="col-md-12">
                  <div id="carousel1" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="Images/call.jpg" class="d-block w-100 mr-5" alt="..." style="height: 300px;">
                          <div class="carousel-caption d-none d-md-block">
                              <h2 class="m-3 mb-5 font-weight-bold" style="margin-bottom: 25px!important; font-size: 3rem;">CONTACT</h2>
                              <p class="text-center mb-5"><span style="color: yellow;">Global High School</span> > Contact</p>
                          </div>
                        </div>

                      </div>
                  </div> 
              </div>
          </div>
        </div>

        <!----LOCATION ON A GOOGLE MAP---->
        <div class="container mx-5">
            <div class="location m-5" style="width: 100%; height: 300px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127657.24822583237!2d30.103426294143492!3d-0.9333021560815188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19d9530a8fffffff%3A0xc02d474f1dfe446a!2sGlobal%20High%20School%20Omungyenyi!5e0!3m2!1sen!2sug!4v1606130798772!5m2!1sen!2sug" width="1110" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>

        <!-------SEND A MESSAGE FORM-------->
        <div class="container mx-5">
            <div class="row m-5">
                <div class="col-md-8 d-block">
                    <form method ='post' action ='send_message.php'>
                        <div class="form-row">
                          <div class="col">
                            <input type="text" class="form-control m-3" placeholder="Name*" required name="name" />
                          </div>
                          <div class="col">
                            <input type="email" class="form-control m-3" placeholder="Email*" name="email" required />
                          </div>
                        </div>
                        <input type="text" name="subject" placeholder="Subject*" class="form-control m-3" required />
                        <textarea class="form-control m-3" rows="10" cols="15" placeholder="Message*" name="message_details" required></textarea>
                        <button type="submit" class="btn btn-success py-2 px-4 m-3 mt-2" style="font-size: 1.5rem;" name="send">Send</button>
                    </form>
                </div>

                <!-----SAME WIDTH CARDS DISPLAYING MORE CONTACT INFORMATION------>
                <div class="col-md-4 justify-content-center">
                    <div class="card w-100 justify-content-center mt-3 bg-transparent" style="height: 130px; margin-left: 90px;">
                        <div class="card-body justify-content-center">
                            <i class="fa fa-phone mr-5" style="font-size: 2.5rem;"></i>
                            <p class="text-center font-weight-bold">+256-776-852111</p>
                            <p class="text-center font-weight-bold">+256-702-809058</p>
                        </div>    
                    </div>
                    <div class="card w-100 justify-content-center mt-3 bg-transparent" style="height: 100px; margin-left: 90px;">
                        <div class="card-body justify-content-center">
                            <i class="fa fa-envelope mr-5 vertical-align-middle" style="font-size: 2.5rem;"></i>
                            <p class="text-center font-weight-bold">aggreyglobal@gmail.com</p>
                        </div>    
                    </div>
                    <div class="card w-100 justify-content-center mt-3 bg-transparent" style="height: 130px; margin-left: 90px;">
                        <div class="card-body justify-content-center">
                            <i class="fa fa-map-marker mr-5" style="font-size: 2.5rem;"></i>
                            <p class="text-center font-weight-bold">P.O. Box 376, Omungyenyi, Ntungamo, Uganda</p>
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