<?php 

include 'includes/db-config.php';
include 'includes/header.php';

error_reporting(0); // show no error for users
   

?>

    <div id="hero" class="hero">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h1>Bright Mensah</h1>
                    <div class="page-scroll">
                        <p class="job-title">Full Stack Developer</p>
                        <a href="#contact" class="btn btn-fill ">Hire me</a>
                        <div class="clearfix visible-xxs"></div>
                        <a href="#portfolio" class="btn btn-border">Explore more</a>
                    </div>
                </div>
            
                <div class="col-md-6 text-right">
                   <!-- <img src="assets/img/services-bg.jpg"  style="margin-left: 20px;" alt=""> -->
                </div>

            </div>
        </div>
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section id="about" class="site-section section-about text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h2>About</h2>
                        <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                        <p>Hello! I'm Bright Mensah, a full stuck developer,  and a guy slighty obsessed for code quality.  I’m currently available for freelance work. If you have a project that you want to get started or think you need my help with something, then get in touch.</p>
                        <a href="https://github.com/Bright-Mensah" class="btn btn-fill" target="_blank">Visit My Github Page</a>
                    </div>
                </div>
            </div>
        </section><!-- /.secton-about -->

        <section class="site-section section-skills">
            <div class="container">
                <div class="text-center">
                    <h3>My Skills</h3>
                    <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Html5</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="90"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>CSS3</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="80"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Javascript</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="75"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>Firebase</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="90"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Php</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="85"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>Java</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="85"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                </div>
            </div>
        </section><!-- /.secton-skills -->

        <section id="service" class="site-section section-services overlay text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>What i do</h3>
                        <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="assets/img/front-end.svg" alt="Front End Developer">
                            <h4>Front-end</h4>
                            <p>As a javascript developer, I have experience in HTML5 and CSS3 techniques working with jQuery And more</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="assets/img/back-end.svg" alt="Back End Developer">
                            <h4>Back-end</h4>
                            <p>Utilising php ,mysql to interact with the sever,  I have written few applications such as  android ecommerce ,profile card , building Portfolio and more.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="assets/img/consultancy.svg" alt="Coding">
                            <h4>Consultancy</h4>
                            <p>As well as providing development services, you can reach me out if you have any problem. </p>
                        </div><!-- /.service -->
                    </div>
                </div>
            </div>
        </section><!-- /.secton-services -->

        <section id="portfolio" class="site-section section-portfolio">
            <div class="container">
                <div class="text-center">
                    <h3>My recent Works</h3>
                    <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/mainPage.jpg" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Pony Ecommerce</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem1"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="https://github.com/Bright-Mensah/Pony_Ecommerce" target="_blank"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/loginPage.jpg" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Pony Ecommerce</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem2"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="https://github.com/Bright-Mensah/Pony_Ecommerce"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/signupPage.jpg" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Pony Ecommerce</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem3"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="https://github.com/Bright-Mensah/Pony_Ecommerce"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/splashScreen.jpg" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Pony Ecommerce</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem4"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="https://github.com/Bright-Mensah/Pony_Ecommerce"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/forgotPasswordPage.jpg" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Pony Ecommerce</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem5"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="https://github.com/Bright-Mensah/Pony_Ecommerce"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/mainPage.jpg" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Pony Ecommerce</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem6"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="https://github.com/Bright-Mensah/Pony_Ecommerce"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                </div>
            </div>
        </section><!-- /.secton-portfolio -->

        <section class="site-section section-counters text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p class="counter start" data-to="2" data-speed="2000">0</p>
                        <h4>Years Experience</h4>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="counter start" data-to="3" data-speed="2000">0</p>       
                        <h4>Projects Built</h4>      
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p id="infinity" class="counter" data-from="0" data-to="1" data-speed="1000">0</p>
                        <h4>Seconds spent on the site!<br></h4>
                    </div>
                </div>
            </div>
        </section>
            
                

        <section id="contact" class="site-section section-form text-center">
            <div class="container">
                <h3>Contact</h3>
                <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                <form action="contact.php" method="POST" id="myform">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="" name="name" id="name" class="form-control mt-x-0"  placeholder="Enter Your Name">
                        </div>
                        
                        <div class="col-sm-6">
                            <input type="" name="email" id="email" class="form-control" placeholder="Enter Your Email">   
                        </div>
                       
                        <div class="col-sm-12">
                            <textarea name="message" id="message" class="form-control"    placeholder="Enter Your Message" ></textarea>
                        </div>
                    </div>
        

                    <button  class="btn btn-border" id="btn" type="submit">Contact Me  <span class="glyphicon glyphicon-send"></span></button>

                    <center>
                        <div class="loader" id="loader"  style="margin-top: 30px; display:none"></div>
                    </center>

                    <div>
                    <marquee  id="marg"   behavior="scroll" width='60%' style="margin-top: 30px; color:black ; font-weight: bold;" direction="left" class="btn btn-border"  scrollamount='2'>
                    For further enqueries you can reach me on <i class=" fa fa-envelope "><strong> Mensahokobright@gmail.com</strong></marquee>
                    </div> 
                   
                </form>
                   
                   <br>
                   <br>

    <footer id="colophon"  class="bg-dark text-center text-white" style="width: fit-content; margin-bottom:-200px">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12" style="margin-top: 40px;">
                    <a class="icon facebook-bg" href="https://github.com/Bright-Mensah" target="_blank"><i class="fa fa-github"></i></a>
                    <a class="icon twitter-bg" href="https://twitter.com/BrightM30118896" target="_blank"><i class="icon-twitter"></i></a>
                    <a class="icon gplus-bg" href="#"><i class="icon-linkedin"></i></a>
                    <a class="icon linkedin-bg" href="https://mail.google.com/mail/u/0/" target="_blank"><i class="icon-gplus"></i></a>
                    <a class="icon linkedin-bg" href="https://www.instagram.com/brig_htmensah/" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
                <div class="col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3" style="margin-top: 40px;"><p class="copyright"> &copy; 2021. All Rights Reserved</p></div>
                <div class="col-sm-4 col-xs-3">
                    <div class="text-right page-scroll" style="margin-top: 40px;">
                        <a class="icon icon-up-bg" href="#hero"><i class="icon-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        </section>
    </main>

     <!-- Modals -->
     <div id="portfolioItem1" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="assets/img/loginPage.jpg" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Pony Ecommerce</h4>
            <p>This app is an ecommerce app created using Java and to be able to use it you first have to sign up for an account to be able to gain access to the app Also the app allow you to insert your picture as a profile image for your account ..... give it a try and let me know any feedback</p>
          </div>
          <div class="modal-footer">
            <a href="https://github.com/Bright-Mensah/Pony_Ecommerce" target="_blank" class="btn btn-fill">View on Github</a>
          </div>
        </div>
      </div>
    </div>

    <div id="portfolioItem2" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="assets/img/signupPage.jpg" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Pony Ecommerce</h4>
            <p>This app is an ecommerce app created using Java and to be able to use it you first have to sign up for an account to be able to gain access to the app Also the app allow you to insert your picture as a profile image for your account ..... give it a try and let me know any feedback</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-fill">Visit Page</a>
          </div>
        </div>
      </div>
    </div>

    <div id="portfolioItem3" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="assets/img/splashScreen.jpg" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Pony Ecommerce</h4>
            <p>This app is an ecommerce app created using Java and to be able to use it you first have to sign up for an account to be able to gain access to the app Also the app allow you to insert your picture as a profile image for your account ..... give it a try and let me know any feedback</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-fill">Visit Page</a>
          </div>
        </div>
      </div>
    </div>

    <div id="portfolioItem4" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="assets/img/forgotPasswordPage.jpg" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Pony Ecommerce</h4>
            <p>This app is an ecommerce app created using Java and to be able to use it you first have to sign up for an account to be able to gain access to the app Also the app allow you to insert your picture as a profile image for your account ..... give it a try and let me know any feedback</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-fill">Visit Page</a>
          </div>
        </div>
      </div>
    </div>

    <div id="portfolioItem5" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="assets/img/mainPage.jpg" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Pony Ecommerce</h4>
            <p>This app is an ecommerce app created using Java and to be able to use it you first have to sign up for an account to be able to gain access to the app Also the app allow you to insert your picture as a profile image for your account ..... give it a try and let me know any feedback</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-fill">Visit Page</a>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolioItem6" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="assets/img/loginPage.jpg" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Pony Ecommerce</h4>
            <p>This app is an ecommerce app created using Java and to be able to use it you first have to sign up for an account to be able to gain access to the app Also the app allow you to insert your picture as a profile image for your account ..... give it a try and let me know any feedback</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-fill">Visit Page</a>
          </div>
        </div>
      </div>
    </div>
         
<script src="buttonHideShow.js"></script>
<?php include 'scripts.php'?>
</body>
</html>