<?php
 
// Define variables and initialize with empty values
$name =  $email_address = $message = $subject= $thanks="";

$name_err = $email_err = $message_err = $subject_err = "";
$myemail = 'yourname@website.com';
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["name"]))){
        $name_err = "Por favor ingrese un nombre.";
    } else{
        $name = trim($_POST["name"]);
    }
    if(empty(trim($_POST["email"]))){
        $email_err = "Por favor ingrese un email.";
    } else{
        $email_address = trim($_POST["email"]);
    }
    if(empty(trim($_POST["message"]))){
        $message_err = "Por favor ingrese un mensaje.";
    } else{
        $message = trim($_POST["message"]);
    }
    if(empty(trim($_POST["subject"]))){
        $subject_err = "Por favor ingrese un asunto.";
    } else{
        $subject = trim($_POST["subject"]);
    }
    
    $to = $myemail;

$email_subject = $subject;

$email_body = "Recibio un mensaje ".

" Estos son los detalles:\n Nombre: $name \n ".

"Email: $email_address\n Mensaje: \n $message";

$headers = "From: $myemail\n";

$headers .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);

if(empty($name_err) && empty($message_err) && empty($subject_err) && empty($email_err)){
$thanks = "Gracias por tu consulta! Te contactaremos a la brevedad.";}

}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Contacto constructora</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="vendors/linericon/style.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
</head>

<body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
    <div class="top_menu d-lg-block d-none">
       <div class="container">
        <div class="float-left">
          <ul class="left_side">
            
            
          </ul>
        </div>
        <div class="float-right">
          <ul class="right_side">
            <li>
              <a href="login.html">
                <i class="lnr lnr-phone-handset"></i>
                341 3888469
              </a>
            </li>
            <li>
              <a href="#">
                <i class="lnr lnr-envelope"></i>
                exampleweb@gmail.com
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg w-100">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html">
                        <img src="img/logo.png" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <div class="row w-100">
                            <div class="col-lg-12 pr-lg-0">
                                <ul class="nav navbar-nav ml-auto justify-content-end">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html">Empresa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="services.html">Productos</a>
                                    </li>
                                    <!--<li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="elements.html">Elements</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Blog</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="blog-details.html">Blog Details</a>
                      </li>
                    </ul>
                  </li>-->
                                    <li class="nav-item active">
                                        <a class="nav-link" href="contact.html">Contacto</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================ Home Banner Area =================-->
    <section class="home_banner_area banner-area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="banner_content d-flex flex-md-row flex-column">
                            <div class="banner-left text-md-right">
                                <h1 class="text-uppercase">Contactanos</h1>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--================ End Home Banner Area =================-->


    <!-- ================ contact section start ================= -->
    <section class="section_gap" style="margin-bottom: 0%">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="map" style="height: 480px;"></div>
                <script>
                    function initMap() {
                        var uluru = { lat: -32.955738, lng: -60.650795 };
                        var grayStyles = [
                            {
                                featureType: "all",
                                stylers: [
                                    { saturation: 0 },
                                    { lightness: 100 }
                                ]
                            },
                            { elementType: 'labels.text.fill', stylers: [{ color: '#A3A3A3' }] }
                        ];
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: { lat: -32.955738, lng: -60.650795 },
                            zoom: 15,
                            styles: grayStyles,
                            scrollwheel: true
                        });
                    }

                </script>
                <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>

            </div>
            <section id="contact" >

                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Contactanos</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form"
                        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="contactForm"
                        novalidate="novalidate" name="contactForm">
                        
                        <div class="row">
                            <div class="col-12">
                                <div  class="form-group" <?php echo (!empty($subject_err)) ? 'has-error' : ''; ?>>
                                        <span style="color:red" ><?php echo $subject_err; ?></span>
                                        <input class="form-control" required name="subject" id="subject" type="text"
                                        placeholder="Ingrese un asunto">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group" <?php echo (!empty($message_err)) ? 'has-error' : ''; ?>>
                                            <span style="color:red" class="help-block" ><?php echo $message_err; ?></span>
                                            <textarea class="form-control w-100" required name="message" id="message" cols="30"
                                            rows="9" placeholder="Ingrese su consulta."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group" <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>>
                                                <span style="color:red" class="help-block" ><?php echo $name_err; ?></span>
                                                <input class="form-control" required name="name" id="name" type="text"
                                                placeholder="Ingrese su nombre">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group" <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>>
                                                    <span  style="color:red"class="help-block" ><?php echo $email_err; ?></span>
                                                    <input class="form-control" required name="email" id="email" type="email"
                                                    placeholder="Ingrese su direccion de correo electronico">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-2 mb-5 mb-lg-0">
                                            <button type="submit" class="button button-contactForm main_btn">Enviar Mensage</button>
                                        </div>
                                        <br>
                                        <span style="color:green; font-size: 30px;" class="help-block" ><?php echo $thanks; ?></span>
                                    </form>
                                </div>
                                
                                <br>
                                <div class="col-lg-4">
                                    <div class="media contact-info">
                                        <span class="contact-info__icon"><i class="fa fa-home"></i></span>
                                        <div class="media-body">
                                            <h3>Rosario, Santa Fe.</h3>
                                            <p>Caferatta 1272</p>
                                        </div>
                                    </div>
                                    <div class="media contact-info">
                                        <span class="contact-info__icon"><i class="fa fa-phone"></i></span>
                                        <div class="media-body">
                                            <h3><a href="tel:454545654">+54 9 341 319 0725</a></h3>
                                            <p>De Lunes a Viernes, de 9 a 18</p>
                                        </div>
                                    </div>
                                    <div class="media contact-info">
                                        <span class="contact-info__icon"><i class="fa fa-envelope-o"></i></span>
                                        <div class="media-body">
                                            <h3><a href="mailto:support@colorlib.com">contacto@constructoragonzalez.com</a></h3>
                                            <p>Envianos tu duda!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
                    <!-- ================ contact section end ================= -->

    <!--================ Start CTA Area ================
  <section class="cta_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="cta_inner d-flex flex-md-row flex-column justify-content-between align-items-center">
              <div class="mb-md-0 mb-4 text-sm-left text-center">
                <p>Get a quick response from our team</p>
                <h1>Please feel free to reach us</h1>
              </div>
              <div class="">
                <a href="#" class="main_btn">Explore More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   ================ End CTA Area ================-->


    <!--================ start footer Area =================-->
    <footer style=" background: #262533; ;">
        <section class="cta_area">
            <br>
            <br>
    </footer>
    <!--================ End footer Area =================-->

    <!--================ Optional JavaScript =================-->
    <!--================ jQuery first, then Popper.js, then Bootstrap JS =================-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>