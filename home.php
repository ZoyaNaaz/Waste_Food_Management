
<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

require 'connection.php';
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Ummed : The Hope </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>


    </head>

    <body>


    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a href="tel:">+212 658 986 213 </a> </li>
                             <li> <i class="fa fa-envelope"></i> <a href="ummed@thehope.org">ummed@thehope.org</a> </li>
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>
                       </ul> <!-- /.header-social  -->
                      
                    </div>


                  </div>
              </div>

            </div>

            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  <a class="navbar-brand" href="index.php"><b><div class="page-content">Welcome <?php echo $username;?></div></b></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a class="is-active" href="index.php">HOME</a></li>
                    <li><a  href="about.html">ABOUT</a></li>
                      <li><a  href="Admin/dbfood/index.php">DISCOUNTS FOOD BOOK</a></li>
                    <li><a href="gallery.html">GALLERY</a></li>
                    <li><a href="contact.html">CONTACT</a></li> 
                      <li><a href="Admin/index.php">ADMIN</a></li>
                       <li><a href="logout.php">LOGOUT</a></li>

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->




    <!-- Carousel
    ================================================== -->
    <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homeCarousel" data-slide-to="1"></li>
            <li data-target="#homeCarousel" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner" role="listbox">

            <div class="item active">

              <img src="assets/images/slider/home-slider-1.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow">Because they need your help</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow ">Save Food Save Life</h4>
                  <a href="#don" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->


            <div class="item ">

              <img src="assets/images/slider/home-slider-2.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow">Together we can improve their lives</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow"> Don't Be Rude Donate Some Food!</h4>
                  <a href="#don" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->




            <div class="item ">

              <img src="assets/images/slider/home-slider-3.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >Get In The Holiday Mood Donate Some Food.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="#don" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->

          </div>

          <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

    </div><!-- /.carousel -->
<section id="don">
    <div class="section-home our-causes animate-onscroll fadeIn">

        <div class="container">

            <h2 class="title-style-1"> DONATE NOW <br> DON'T BE RUDE DONATE SOME FOOD!</h2>
            

            <div class="row zoomIn animated">

                <div class="col-md-3 col-sm-6 zoomIn animated">

                    <div class="cause">

                        <img src="assets/images/causes/cause-hunger.jpg" alt="" class="cause-img">

                        <div class="progress cause-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                             FOOD DONATION
                          </div>
                        </div>

                        <h4 class="cause-title"><a href="#">DONATE FOR HUMANS </a></h4>
                        <div class="cause-details">
                           Giving is not just about make a donation it is about making a diffrence.Making a donation is a ultimate sign of solidarity. Actions are speak louder than words.
                        </div>

                        <div class="btn-holder text-center">

                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal1"> DONATE NOW</a>
                          
                        </div>

                        

                    </div> <!-- /.cause -->
                    
                </div> 

                <div class="col-md-3 col-sm-6 zoomIn animated">

                    <div class="cause">

                        <img src="assets/images/causes/cause-education.jpg" alt="" class="cause-img">

                        <div class="progress cause-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                             FOOD DONATION
                          </div>
                        </div>

                        <h4 class="cause-title"><a href="#">DONATE FOR ANIMALS</a></h4>
                        <div class="cause-details">
                            You were born wuth the ability to change someone's life,Don't ever waste it.When I look into the eyes of Animals I don't see an Animal, I see a living being. I see a friend, I feel a soul.
                        </div>

                        <div class="btn-holder text-center">

                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal2"> DONATE NOW</a>
                          
                        </div>

                        

                    </div> <!-- /.cause -->
                    
                </div>


                <div class="col-md-3 col-sm-6 zoomIn animated">

                    <div class="cause">

                        <img src="assets/images/causes/cause-rights.jpg" alt="" class="cause-img">

                        <div class="progress cause-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                            FOOD DONATION
                          </div>
                        </div>

                        <h4 class="cause-title"><a href="#">DONATE FOR MANURE</a></h4>
                        <div class="cause-details">
                Fertilizer does no good in a heap, But a little spread around work miracles all over.Those too lazy to plow in the right season will have no food at the harvest. 
                        </div>

                        <div class="btn-holder text-center">

                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal3"> DONATE NOW</a>
                          
                        </div>

                        

                    </div> <!-- /.cause -->
                    
                </div>

                <div class="col-md-3 col-sm-6 zoomIn animated">

                    <div class="cause">

                        <img src="assets/images/causes/cause-culture.jpg" alt="" class="cause-img">

                        <div class="progress cause-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                             FOOD DONATION
                          </div>
                        </div>

                        <h4 class="cause-title"><a href="#">OTHER DONATE</a></h4>
                        <div class="cause-details">
                         You can donate the food to the children struggling with poverty and homeless people, animals who is seeking for food. It's not how much we give,But how much love we spread.
                        </div>

                        <div class="btn-holder text-center">

                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal4"> DONATE NOW</a>
                          
                        </div>

                        

                    </div> <!-- /.cause -->
                    
                </div>

            </div>

        </div>
        
    </div> <!-- /.our-causes -->
        </section>
        
        
<div class="container zoomIn animated">
  <hr/>
  <div class="no-reviews text-center">
    <button class="btn btn-primary btn-lg">Write a Review</button><br><br>
    <p>Feedback turns good into better and better into best.</p>
    <hr/>
  </div>
  <div class="row">
    <div class="col-sm-4 col-md-3">
      <div class="visible-xs-block ">
        <div class="form-group">
          <button class="btn btn-primary btn-block">Write a Review</button>
        </div>
        <div class="form-group">
          <select class="form-control">
            <option value="0">show all (1346)</option>
            <option value="5">★★★★★ (1247)
            </option>
            <option value="4">★★★★☆ (47)
            </option>
            <option value="3">★★★☆☆ (27)
            </option>
            <option value="2">★★☆☆☆ (24)
            </option>
            <option value="1">★☆☆☆☆ (1)
            </option>
          </select>
        </div>
      </div>
      <div class="hidden-xs">
        <div class="form-group">
          <h5>Filter Reviews</h5>
          <ul class="list-group">
            <li class="list-group-item"><a href="#">★★★★★ (1247)</a></li>
            <li class="list-group-item"><a href="#">★★★★☆ (47)</a></li>
            <li class="list-group-item"><a href="#">★★★☆☆ (27)</a></li>
            <li class="list-group-item"><a href="#">★★☆☆☆ (24)</a></li>
            <li class="list-group-item"><a href="#">★☆☆☆☆ (1)</a></li>
          </ul>
        </div>
        <div class="form-group"><a class="btn btn-primary btn-block btn-lg" href="#">Write a Review</a></div>
      </div>
    </div>
    <div class="col-sm-8 col-md-9">
      <form name="form" method="post" action="#">
        <div class="row">
          <div class="col-sm-6 col-sm-push-6 col-md-4 col-md-push-8">
            <select class="form-control">
              <option value="new">sort newest to oldest</option>
              <option value="old">sort oldest to newest</option>
              <option value="good">sort best to worst</option>
              <option value="bad">sort worst to best</option>
            </select>
          </div>
          <div class="col-sm-6 col-sm-pull-6 col-md-8 col-md-pull-4">
            <h5>Showing 1230 - 1235 of 1346</h5>
          </div>
        </div>
      </form>
      <div class="review">
        <div class="row">
          <div class="col-sm-3">
            <h4>★★★★☆
            </h4>
          </div>
          <div class="col-sm-9">
            <h4>Lorem ipsum dolor sit</h4>
            <h5>Malcolm Reynolds</h5>
            <p>Lorem ipsum dolor sit amet, ut suas temporibus his. Te noster dolorum luptatum pri. Duo erroribus incorrupte at.</p>
          </div>
        </div>
      </div>
      <div class="review">
        <div class="row">
          <div class="col-sm-3">
            <h4>★★★☆☆
            </h4>
          </div>
          <div class="col-sm-9">
            <h4>Regione mentitum legendos ne usu</h4>
            <h5>Zoë Washburne</h5>
            <p>Regione mentitum legendos ne usu. Nam omnesque detraxit contentiones cu.</p>
          </div>
        </div>
      </div>
      <div class="review">
        <div class="row">
          <div class="col-sm-3">
            <h4>★★★★☆
            </h4>
          </div>
          <div class="col-sm-9">
            <h4>His nihil ubique cu</h4>
            <h5>Hoban Washburne</h5>
            <p>His nihil ubique cu, nec putent perpetua id, eum porro option ex. Ad vel case option democritum, malis propriae perfecto in pri.</p>
          </div>
        </div>
      </div>
      <div class="review">
        <div class="row">
          <div class="col-sm-3">
            <h4>★★★★★
            </h4>
          </div>
          <div class="col-sm-9">
            <h4>Est case bonorum ei</h4>
            <h5>Jayne Cobb</h5>
            <p>Est case bonorum ei. Mei ei fastidii pertinax dissentias, id ius voluptua electram, sit facilis accusam perfecto at.</p>
          </div>
        </div>
      </div>
      <div class="review">
        <div class="row">
          <div class="col-sm-3">
            <h4>★★☆☆☆
            </h4>
          </div>
          <div class="col-sm-9">
            <h4>Consul nostro detraxit</h4>
            <h5>Kaylee Frye</h5>
            <p>Consul nostro detraxit has ea, graecis incorrupte in his.</p>
          </div>
        </div>
      </div>
      <nav class="text-center" aria-label="Page navigation">
        <ul class="pagination">
          <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>

    <footer class="main-footer">

        <div class="footer-top">
            
        </div>
        <div class="footer-bottom">

            <div class="container text-right"><br>
                ummed:the hope @ copyrights 2023 <br><br>
            </div>
        </div>
        
    </footer> <!-- main-footer -->




    <!-- Donate Modal1 -->
    <div class="modal fade" id="donateModal1" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">DONATE NOW</h4>
          </div>
          <div class="modal-body">
                <form class="form-donation" action="human.php" method="post" autocomplete="off">

                        <h3 class="title-style-1 text-center"><b>Thank you for your donation</b><br><b>DONATE FOR HUMANS</b><span class="title-under"></span>  </h3>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Enter Your Full Name:</label>
                                <input type="text" class="form-control" name="fname" placeholder="Full Name*" required>
                            </div>

                             <div class="form-group col-md-6">
                                  <label>Enter Your Phone Number:</label>
                                <input type="number" class="form-control" name="phone" placeholder="Phone*" required>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-md-6">
                            <label  for="">Quantity:</label>
                             <select class="form-control" id="Quantity" name="Quantity" required >
                            <option value="" selected hidden>Select Quantity:</option>
                             <option value="2 to 5">2 to 5 Persons</option>
                             <option value="6 to 10">6 to 10 Persons</option>
                             <option value="11 to 15">11 to 15 Persons</option>
                             <option value="16 to 25">16 to 25 Persons</option>
                             <option value="26 to more">26 to More Persons</option>
                             </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Enter Your Address:</label>
                                 <input type="text" class="form-control" name="address" placeholder="Address*" required>
                            </div>

                        </div>
 
                        <div class="row form-group col-md-6">
                              <label for="">Who You Want To Donate:</label><br>
                              <input type="radio" name="whowant" value="Old Age Home" required> <b>Old Age Home</b><br>
                               <input type="radio" name="whowant" value="Orphanage"> <b>Orphanage</b><br>
                               <input type="radio" name="whowant" value="Home Less Pepole"> <b>Home Less Pepole</b><br>
                         </div>
                            <div class="row">
                             <div class="form-group col-md-12">
                           <label  for="">Food Types:</label><br>
                                <input type="checkbox" name="languages[]" value="Dry Food">
                                <label for="food1"> Dry Food</label><br>
                                <input type="checkbox" name="languages[]" value="Gravy Food">
                                <label for="food2"> Gravy Food</label><br>
                                <input type="checkbox" name="languages[]" value="Non Cooked Food">
                                <label for="food3"> Non Cooked Food</label><br>
                                <input type="checkbox" name="languages[]" value="Confectionery Iteams">
                                <label for="food4"> Confectionery Iteams</label><br>
                              </div>
                             </div>
            
                        <div class="row form-group ">
                              <label> &nbsp; &nbsp;Enter Additional Note:</label>
                            <div class="form-group col-md-12">
                                <textarea cols="20" rows="2" class="form-control" name="note" placeholder="More Information About Food"></textarea>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <button type="submit" name="submit1" class="btn btn-primary pull-right">DONATE NOW</button>
                            </div>

                        </div>  
                </form>
            
          </div>
        </div>
      </div>

    </div> <!-- /.modal -->


<!-- Donate Modal2 -->
    <div class="modal fade" id="donateModal2" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">DONATE NOW</h4>
          </div>
          <div class="modal-body">

                   <form class="form-donation" action="animal.php" method="post" autocomplete="off">

                        <h3 class="title-style-1 text-center"><b>Thank you for your donation</b><br><b>DONATE FOR ANIMALS</b><span class="title-under"></span>  </h3>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Enter Your Full Name:</label>
                                <input type="text" class="form-control" name="fname" placeholder="Full Name*" required>
                            </div>

                             <div class="form-group col-md-6">
                                  <label>Enter Your Phone Number:</label>
                                <input type="text" class="form-control" name="phone" placeholder="Phone*" required>
                            </div>
                        </div>


                        <div class="row">

                            <div class="form-group col-md-6">
                            <label  for="">Quantity:</label>
                             <select class="form-control" id="Quantity" name="Quantity" required >
                            <option value="" selected hidden>Select Quantity:</option>
                             <option value="2 to 5">2 to 5 Animals</option>
                             <option value="6 to 10">6 to 10 Animals</option>
                             <option value="11 to 15">11 to 15 Animals</option>
                             <option value="16 to 25">16 to 25 Animals</option>
                             <option value="26 to more">26 to More Animals</option>
                             </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Enter Your Address:</label>
                                 <input type="text" class="form-control" name="address" placeholder="Address*" required>
                            </div>

                        </div>
                           <div class="row">
                             <div class="form-group col-md-12">
                           <label  for="">Food Types:</label><br>
                                <input type="checkbox" name="languages[]" value="Dry Food">
                                <label for="food1"> Dry Food</label><br>
                                <input type="checkbox" name="languages[]" value="Gravy Food">
                                <label for="food2"> Gravy Food</label><br>
                                <input type="checkbox" name="languages[]" value="Non Cooked Food">
                                <label for="food3"> Non Cooked Food</label><br>
                                <input type="checkbox" name="languages[]" value="Confectionery Iteams">
                                <label for="food4"> Confectionery Iteams</label><br>
                              </div>
                             </div>


                        <div class="row form-group ">
                              <label> &nbsp; &nbsp;Enter Additional Note:</label>
                            <div class="form-group col-md-12">
                                <textarea cols="20" rows="2" class="form-control" name="note" placeholder="More Information About Food"></textarea>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                               <button type="submit" name="submit2" class="btn btn-primary pull-right">DONATE NOW</button>
                            </div>

                        </div>  
                </form>
            
          </div>
        </div>
      </div>

    </div> <!-- /.modal -->
<!-- Donate Modal3 -->
    <div class="modal fade" id="donateModal3" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">DONATE NOW</h4>
          </div>
          <div class="modal-body">

                               <form class="form-donation" action="manure.php" method="post" autocomplete="off">

                        <h3 class="title-style-1 text-center"><b>Thank you for your donation</b><br><b>DONATE FOR MANURE</b><span class="title-under"></span>  </h3>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Enter Your Full Name:</label>
                                <input type="text" class="form-control" name="fname" placeholder="Full Name*" required>
                            </div>

                             <div class="form-group col-md-6">
                                  <label>Enter Your Phone Number:</label>
                                <input type="text" class="form-control" name="phone" placeholder="Phone*" required>
                            </div>
                        </div>


                        <div class="row">

                            <div class="form-group col-md-6">
                            <label  for="">Quantity:</label>
                             <select class="form-control" id="Quantity" name="Quantity" required >
                            <option value="" selected hidden>Select Quantity:</option>
                             <option value="2 to 5">2 to 5 Animals</option>
                             <option value="6 to 10">6 to 10 Animals</option>
                             <option value="11 to 15">11 to 15 Animals</option>
                             <option value="16 to 25">16 to 25 Animals</option>
                             <option value="26 to more">26 to More Animals</option>
                             </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Enter Your Address:</label>
                                 <input type="text" class="form-control" name="address" placeholder="Address*" required>
                            </div>

                        </div>
                           <div class="row">
                             <div class="form-group col-md-12">
                           <label  for="">Food Types:</label><br>
                                <input type="checkbox" name="languages[]" value="Dry Food">
                                <label for="food1"> Dry Food</label><br>
                                <input type="checkbox" name="languages[]" value="Gravy Food">
                                <label for="food2"> Gravy Food</label><br>
                                <input type="checkbox" name="languages[]" value="Non Cooked Food">
                                <label for="food3"> Non Cooked Food</label><br>
                                <input type="checkbox" name="languages[]" value="Confectionery Iteams">
                                <label for="food4"> Confectionery Iteams</label><br>
                              </div>
                             </div>


                        <div class="row form-group ">
                              <label> &nbsp; &nbsp;Enter Additional Note:</label>
                            <div class="form-group col-md-12">
                                <textarea cols="20" rows="2" class="form-control" name="note" placeholder="More Information About Food"></textarea>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                               <button type="submit" name="submit3" class="btn btn-primary pull-right">DONATE NOW</button>
                            </div>

                        </div>  
                </form>
            
          </div>
        </div>
      </div>

    </div> <!-- /.modal -->

<!-- Donate Modal4 -->
    <div class="modal fade" id="donateModal4" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">DONATE NOW</h4>
          </div>
      <div class="modal-body">

                       <form class="form-donation" action="other.php" method="post" autocomplete="off">

                        <h3 class="title-style-1 text-center"><b>Thank you for your donation</b><br><b>DONATE FOR OTHER </b><span class="title-under"></span>  </h3>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Enter Your Full Name:</label>
                                <input type="text" class="form-control" name="fname" placeholder="Full Name*" required>
                            </div>

                             <div class="form-group col-md-6">
                                  <label>Enter Your Phone Number:</label>
                                <input type="text" class="form-control" name="phone" placeholder="Phone*" required>
                            </div>
                        </div>


                        <div class="row">

                            <div class="form-group col-md-6">
                            <label  for="">Quantity:</label>
                             <select class="form-control" id="Quantity" name="Quantity" required >
                            <option value="" selected hidden>Select Quantity:</option>
                             <option value="2 to 5">2 to 5 Animals</option>
                             <option value="6 to 10">6 to 10 Animals</option>
                             <option value="11 to 15">11 to 15 Animals</option>
                             <option value="16 to 25">16 to 25 Animals</option>
                             <option value="26 to more">26 to More Animals</option>
                             </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Enter Your Address:</label>
                                 <input type="text" class="form-control" name="address" placeholder="Address*" required>
                            </div>

                        </div>
                           <div class="row">
                             <div class="form-group col-md-12">
                           <label  for="">Food Types:</label><br>
                                <input type="checkbox" name="languages[]" value="Dry Food">
                                <label for="food1"> Dry Food</label><br>
                                <input type="checkbox" name="languages[]" value="Gravy Food">
                                <label for="food2"> Gravy Food</label><br>
                                <input type="checkbox" name="languages[]" value="Non Cooked Food">
                                <label for="food3"> Non Cooked Food</label><br>
                                <input type="checkbox" name="languages[]" value="Confectionery Iteams">
                                <label for="food4"> Confectionery Iteams</label><br>
                              </div>
                             </div>


                        <div class="row form-group ">
                              <label> &nbsp; &nbsp;Enter Additional Note:</label>
                            <div class="form-group col-md-12">
                                <textarea cols="20" rows="2" class="form-control" name="note" placeholder="More Information About Food"></textarea>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                               <button type="submit" name="submit4" class="btn btn-primary pull-right">DONATE NOW</button>
                            </div>

                        </div>  
                </form>
            
          </div>
        </div>
      </div>


    </div> <!-- /.modal -->

    <!--  Scripts
    ================================================== -->

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    </body>
</html>
<style>

.review {
  border: 1px solid #cccccc;
  border-radius: 4px;
  padding: 1em;
}
.review + .review {
  margin-top: 1em;
}
</style>
