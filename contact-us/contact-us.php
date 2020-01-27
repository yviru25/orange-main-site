
<?php

$message = "";

if(isset($_POST['send_email'])){

// Include and initialize phpmailer class

require 'phpmailer/PHPMailerAutoload.php';


$mail = new PHPMailer;

// SMTP configuration
//$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'yviru25@gmail.com';
$mail->Password = 'viruyadav';
$mail->SMTPSecure = '';
$mail->Port = 587;
$mail->SMTPOptions = array(
    'ssl'=>array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => false
    )
);

$firstName = $_POST['visitor_name'];
$lastName = $_POST['visitor_lastname'];
$visitorEmail = $_POST['visitor_email'];
$visitorMobile = $_POST['visitor_mobile'];
$visitorMessage = $_POST['visitor_message'];
   

$mail->setFrom('yviru25@gmail.com', $firstName);
 
// Add a recipient
//$mail->addAddress('prateekjn12@gmail.com');
$mail->addAddress($visitorEmail);

 
// Add cc or bcc
//$mail->addCC('cc@domain.com');
//$mail->addBCC('bcc@domain.com');
 
// Email subject
$mail->Subject = 'Greeting From Orange Education';
 
// Set email format to HTML
$mail->isHTML(true);
 
// Email body content
$mailContent = '<h1>Hi Sir,<br><br>This message is receiving from Orange Education Pvt Ltd.</p>';
$mail->Body = $mailContent;
// Send email
if(!$mail->send()){
    
    $message = "Opps !!! Something went wrong" ;   

}else{
    $message =  'Thank you for contacting orange education';
}

}

?> 


?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
<title>Orange Education</title>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="../assets/css/aos.css">
<link rel="stylesheet" href="../assets/css/indiannica.css">
<link rel="stylesheet" href="../assets/css/responsive.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="../assets/images/logo.ico" rel="shortcut icon"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="../olympiad/olypiad.css">
<link rel="stylesheet" href="contact-us.css">
<link rel="stylesheet" type="text/css" href="../stylesheets/style.css">
<link rel="stylesheet" type="text/css" href="../stylesheets/responsive.css">
<link rel="stylesheet" type="text/css" href="../stylesheets/colors/color1.css" id="colors">
<style>
        input:required { 
          border-left: 2px solid red;
        }
        select:required { 
          border-left: 2px solid red;
        }
        textarea:required{
         border-left: 2px solid red;
        }
     </style>
</head>
<body>
        <div class="top border-bt-d1d1ff ">
                <div class="overlay v2"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="flat-info style2 v2">
                                <ul>
                                    <li class="phone"><a href="#"> 011-43776600</a></li>
                                    <li class="mail"><a href="#"> info@orangeeducation.in</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 pd-left-0">
                            <!-- <div class="socails flat-text-right v2">
                                <ul class="list">
                                    
                                    <li><a href="#"><i class="fab fa-facebook fa-lg"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube fa-lg"></i></a></li>
                                    <li><a href="#"><i class="far fa-edit fa-lg"></i></a></li>
                                </ul>
                            </div> -->
                            <div class="flat-action flat-text-right style2 v2">
                                <ul>
                                    
                                    <li><a href="https://www.linkedin.com/company/orangeeducation/" target="_blank"><i class="fab fa-linkedin fa-lg" style="color: #fff;"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCJ8hNFMifNZB2r9pnvs-5kw" target="_blank"><i class="fab fa-youtube fa-lg" style="color: #fff;"></i></a></li>
                                    <li><a href="javascript:void(0)" data-toggle="modal" data-target="#myModalContact" ><i class="far fa-edit fa-lg"></i></a></li>
                                    <li class="user"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">LOGIN</a></li>
        
                                </ul>
                            </div> <!-- /.flat-action -->
                        </div> <!-- /.col-md-6 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.top -->                
                  <div id="header" class="bg-fff style1">
                    <div class="container-fluid">
                            <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                                    <div class="header-wrap clearfix">
                                    <div class="logo">
                                        <a href="../index.html"><img src="../assets/images/logo.png" alt="bookflare" width="116" height="45" data-retina="assets/images/logo.png" data-width="157" data-height="29"></a>  
                                    </div>
                                    </div>
                                    </div>
                            <div class="nav-wrap flat-text-right style1">
                                <nav id="main-nav">
                                    <ul class="menu" >
                                        <li>
                                          <a class="nav-item nav-link" href="../index.html">Home</a>
                                            <ul class="submenu">
                                              <li><a href="../about-us/about-us.html">About Us</a></li>
                                              <!-- <li><a href="../about-us/why-ogo.html">Why OGO?</a></li> --> 
                                              <li><a href="../about-us/prvios-year-guest.html">Previous Year Guests</a></li> 
                                              <li><a href="#">Advisory Council</a></li>          
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Olympiads</a>
                                            <ul class="submenu">
                                              <li><a href="../ogo-olympiads/ogo.html">OGO</a></li><li><a href="../ogo-olympiads/ogo-mathemathics.html">OGO Mathematics</a></li>
                                              <li><a href="../ogo-olympiads/ogo-science.html">OGO Science</a></li> 
                                              <li><a href="../ogo-olympiads/ogo-english.html">OGO English</a></li> 
                                              <li><a href="../ogo-olympiads/ogo-astronomy.html">OGO Astronomy</a></li> 
                                              <li><a href="../ogo-olympiads/ogo-cyber.html">OGO Cyber</a></li>
                                              <li><a href="../ogo-olympiads/ogo-hindi.html">OGO Hindi</a></li>
                                              <li><a href="../ogo-olympiads/ogo-stem-edu.html">OGO STEM Education</a></li>
                                              <li><a href="../ogo-olympiads/ogo-jr-finance.html">OGO Jr Finance</a></li>    
                                              <li><a href="../ogo-olympiads/upcomming-olympiads.html">Upcoming Olympiads</a></li> 
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="../nbse/nbse.html">NBSE</a>
                                        </li>
                                        <li>
                                            <a href="../MMA/mma.html">Mind Maps</a>
                                        </li>
                                        <li>
                                            <a href="../ATL/atl.html">ATL</a>
                                        </li>
                                        <li>
                                            <a href="#"> Results</a>
                                            <ul class="submenu">
                                                <li><a href="#"> OGO Results</a>
                                                  <ul class="submenu">
                                                      <li><a href="http://orangeeducation.in/orange-result" target="_blank">SLE Student Result</a></li>     
                                                      <li><a href="http://orangeeducation.in/school-login" target="_blank">SLE School Login</a></li> 
                                                      <li><a href="http://118.67.249.104/nle/nle-report.php" target="http://118.67.249.104/nle/nle-report.php">NLE Student Report</a></li>
                                                      <li><a href="http://118.67.249.104/nle/school-report.php" target="http://118.67.249.104/nle/school-report.php">NLE School Report</a></li> 
                                                    </ul>  
                                                </li>
                                                <li><a href="../mind-map/mind-map.html">NCERT Mind Maps</a></li>
                                            </ul>
                                          </li>
                                        <li>
                                            <a href="#">Events</a>
                                            <ul class="submenu">
                                                <li><a href="../events/teacher-workshop.html">Teachers Workshop</a></li>
                                                <li><a href="../events/award-ceremony.html">Award Ceremony </a></li>
                                                <li><a href="../events/employee-meet-annual.html">Employees Annual Meet</a></li>            
                                            </ul>
                                        </li>
                                        <li><a href="../careers/career.html"><span>Career</span></a></li>
                                        <li class="active"><a href="contact-us.html"><span>Contact Us</span></a></li>                                
                                    </ul>
                                </nav>
                            </div>
                            <div class="mobile-button">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    </div>
                  </div> <!-- #header -->              

<!-- =========================== Main Content Start ================================= -->


<div class="banner-area pt-130 pb-120 overlay-2">
        <!-- <div>
          <img src="images/CONTACT US.png" class="img-responsive" alt="Responsive image" " alt="" />
        </div> --> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.364260832361!2d77.24176541508292!3d28.648809982411482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd209d24a4d5%3A0x773dd6306827a7e5!2sOrange+Education+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1565400628888!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>
 <!--    <div class="breadcrumb-area ptb-25 broder-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-list text-center text-uppercase">
                        <ul>
                            <li><a href="../index.html">home</a><span class="divider"> > </span></li>
                            <li class="active"><a href="#">Contact Us</a></li>
                        </ul>							
                    </div>
                </div>
            </div>
        </div>
</div> -->

<!-- ============= End Breadcrumb ========================== -->

<div class="section" style="margin-top: 20px;">
    <div class="content-wrap">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-8">
                    
                    <h2 class="section-heading text-left mb-5">
                        Get in Touch
                    </h2>
                    <p class="subheading text-left">Need more information or have questions about Orange Education? We’re here to help.</p>
                    <p>If you have questions, please have a look at our FAQ page – maybe we already have an answer!</p>
                    <p text-center>OR</p>
                    <p>Please let us know how we can help!</p>
                    <form action="contact-us.php" method="post" class="form-contact" id="contactForm">
                        <h5 class="text-center" id="successMessage"><?php echo $message ?></h5>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="visitor_name" placeholder="First Name" required>
                                </div>  
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="visitor_lastname" placeholder="Last Name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" required id="visitor_email" placeholder="E-Mail">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required class="form-control" name="visitor_mobile" id="visitor_mobile" maxlength="10" placeholder="Mobile Number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                             <textarea id="visitor_message" name="visitor_message" required class="form-control" rows="6" placeholder="Enter Your Message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <div class="text-left">
                                <div id="success"></div>
                                <button type="submit" name="send_email" class="btn btn-primary">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form>	

                    
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4">
                    <h4 class="section-heading text-left mb-5">
                        CONTACT DETAILS
                    </h4>
                    <!-- Item 1 -->
                    <div class="rs-icon-info-2">
                        <div class="info-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="body-text">
                            <h4 class="text-bold">Address</h4>
                            <p>9, Daryaganj, Near LIC Office, New Delhi – 110002</p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="rs-icon-info-2">
                        <div class="info-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="body-text">
                            <h4 class="text-bold">Phone</h4>
                            <p>011-43776600</p>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="rs-icon-info-2">
                        <div class="info-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="body-text">
                            <h4 class="text-bold">Email</h4>
                            <p>info@orangeeducation.in</p>
                        </div>
                    </div>
                    <div class="rs-icon-info-2">
                        <div class="info-icon">
                            <i class="fa fa-whatsapp"></i>
                        </div>
                        <div class="body-text">
                            <h4 class="text-bold">Whatsapp</h4>
                            <p>8588814859</p>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
    </div>


<!-- =========================== Main Content End ================================= -->

<footer class="footer">
    
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
        <div class="footer_contain">
            <img src="../assets/images/logo.png" /><br><br>
            <ul class="footer_nav">
                <li><a href="../index.html">Home</a></li>
                <li><a href="../about-us/about-us.html">About us</a></li>
                <li><a href="../ogo-olympiads/ogo.html">About OGO</a></li>
                
                <!-- <li><a href="#">Gallery</a></li> -->
                <!--  <li><a href="../olympiad/faq.html">FAQs</a></li>  -->
                <!--  <li><a href="#">Download</a></li>  -->               
                <li><a href="http://www.ocasonline.com/sle-report.php" target="_blank" >Student Login</a></li>
                <li><a href="http://www.ocasonline.com/school-report.php" target="_blank"> School Login</a></li>
                <!--  <li><a href="#">Dealer Login</a></li>  -->
                <li><a href="../footer-pages/privacy.html">Privacy Policy</a></li>
                <li><a href="https://dialcrm.com" target="_blank">Employee CRM</a></li> 
                <li><a href="../contact-us/contact-us.php">Become Olympiad Coordinator</a></li>   
                <!--  <li><a href="../olympiad/testimonial.html">Testimonial</a></li>  -->
                <li><a href="../careers/career.html">Career</a></li>
                <li><a href="../contact-us/contact-us.php">Contact Us</a></li>
              </ul>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="footer_contain">
                <h6>Social Connect</h6>
                <div class="social_network">
                <ul>
                    
                    <li><a href="https://www.linkedin.com/company/orangeeducation/" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://www.facebook.com/OrangeOlympiad/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCJ8hNFMifNZB2r9pnvs-5kw" target="_blank" class="youtube"><i class="fa fa-youtube"></i></a></li>
                </ul>  
                </div>
            
            </div>
            </div>
    
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="footer_contain">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.364260832361!2d77.24176541508292!3d28.648809982411482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd209d24a4d5%3A0x773dd6306827a7e5!2sOrange+Education+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1565400628888!5m2!1sen!2sin" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

</footer>

<div class="copyright">
<p>Copyright ©2019 All rights reserved Orange Education</p>
</div>
<div id="totopscroller"></div>


<!-- popup modal -->

<div class="container">

        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog main_dialog">
          
            <!-- Modal content-->
            <div class="modal-content radius">
                <button type="button" class="close close_login" data-dismiss="modal">&times;</button>
              <div class="modal-body login_pop">
                <div class="left_part_login"></div>
              
                
               <div class="right_part_login">
                <div class="login___part"><span id="usermsg" class="errormsg"></span>
                      <div class="login__tab">
                      <ul>
                          <li><a href="javascript:void(0)" class="login__acitve" title="Login">Login</a></li>
                          <li><a href="javascript:void(0)" class="" title="Register">Registration</a></li>
                      </ul>
              </div>
                  
                      <div class="login_form active_about fade in" id="Login">
                          
                      <div class="f_a">
                         <div class="form_100">
                              <ul class="student_login">
                                  <li>
                                       <label class="studentradio">Student
                                       <input type="radio" name="ul_type" id="ul_type" value="Student">
                                       <span class="checkmark"></span>
                                      </label>
                                  </li>
                                  
                                  <li>
                                       <label class="studentradio">School
                                       <input type="radio" name="ul_type" id="ul_type" value="School">
                                       <span class="checkmark"></span>
                                      </label>
                                  </li>
                                  
                              </ul>
                         
                          </div>
                          
                          
                         <div class="form_100">
                              <input type="email" name="ul_email" id="ul_email" class="form_control" maxlength="50">
                              <span class="text_w">Email ID</span>
                          </div>
                  
                          <div class="form_100">
                              <input type="password" name="ul_password" id="ul_password" class="form_control" maxlength="20">
                              <span class="text_w">Password</span>
                         </div>
                         
                         <a href="javascript:void(0)" class="forgot_right">Forgot Password</a>
                         
                         <div class="login_div_btn">
                         <input type="button" class="login_btn" value="Login" onclick="userlogin()">
                         </div>
                         
                     </div>
               
                      </div>
                      
                      <div class="login_form fade" id="Register">
                          
                          <div class="f_a">
                          <div class="form_100">
                              <ul class="student_login">
                                  <li>
                                       <label class="studentradio">Student
                                       <input type="radio" name="u_type" id="u_type" value="Student">
                                       <span class="checkmark"></span>
                                      </label>
                                  </li>
                                  
                                  <li>
                                       <label class="studentradio">Teacher
                                       <input type="radio" name="u_type" id="u_type" value="Teacher">
                                       <span class="checkmark"></span>
                                      </label>
                                  </li>
                                  
                              </ul>
                         
                          </div>
                          
                          
                          <div class="form_100">
                            <input type="text" id="u_fname" name="u_fname" class="form_control" maxlength="50">
                            <span class="text_w">First Name</span>
                          </div>
                          <div class="form_100">
                            <input type="text" id="u_lname" name="u_lname" class="form_control" maxlength="50" >
                            <span class="text_w">Last Name</span>
                          </div>
                          <div class="form_100">
                            <input type="email" name="u_email" id="u_email" class="form_control" maxlength="50">
                            <span class="text_w">Email ID</span>
                          </div>
                          <div class="form_100">
                            <input type="text" name="u_mobile" id="u_mobile" class="form_control" maxlength="10">
                            <span class="text_w">Mobile Number</span>
                          </div>
                          
                          <div class="form_100">
                              <input type="password" name="u_password" id="u_password" class="form_control" maxlength="15">
                              <span class="text_w">Password</span>
                         </div>
                         
                        
                         
                         <div class="login_div_btn">
                         <input type="button" class="login_btn" value="Register" onclick="userregister()">
                         </div>
                         
                     </div>
                          
                          
                          
                      </div>
                      
                  </div>
                  
                  
                  <div class="forgot_box">
                      <a href="javascript:void(0)"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a>
                      <div class="fo_h">
                          <h1>Forgot Password</h1>
                          <p>Please enter the login id of the account to retrieve your password</p>
                          
                          <div class="f_a">
                             <div class="form_100">
                                  <input type="email" name="ur_email" id="ur_email" class="form_control" maxlength="50">
                                  <span class="text_w">Email ID</span>
                              </div>
                              
                              <div class="login_div_btn">
                         <input type="button" class="login_btn" value="Reset My Password" onclick="userresetpassword()">
                         </div>
                              <span id="userresetmsg" class=""></span>
                          </div>
                      </div>
                  </div>
                  
                  
                </div>
                
              </div>
              
            </div>
            
          </div>
        </div>
        
      </div>
      
      
      
      <!-- contact us Modal   -->
      
      <div class="container">
      
          <div class="modal fade" id="myModalContact" role="dialog">
            <div class="modal-dialog main_dialog">
            
              <!-- Modal content-->
              <div class="modal-content radius">
                  <button type="button" class="close close_login" data-dismiss="modal">&times;</button>
                <div class="modal-body login_pop">
                    <div class="col-md-12 col-lg-12 col-xs-12 text-md-left">
                      <h3 class="text-bold text-center">Get in Touch</h3><br>
                      <p class="text text-center">Need more information or have questions about Orange Education? We’re here to help.</p>
                      <div class="offset-top-30">
                          <form action="">
                              <div class="row">
                                  <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                      <input class="form-control" name="firstname" placeholder="First Name" type="text" required autofocus />
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                      <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                      <input class="form-control" name="email" placeholder="E-mail" type="text" required />
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                      <input class="form-control" name="subject" placeholder="Mobile No" type="number" required />
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12">
                                      <textarea style="resize:vertical;" class="form-control" placeholder="Message..." rows="6" name="comment" required></textarea>
                                  </div>
                              </div>
                              <div style="margin-top:14px;margin-bottom:14px;">
                                  <div class="text-center text-md-left offset-top-20"><button class="btn btn-primary" type="submit">Send Message</button></div>
                              </div>
                          </form> 
                        </div>  
                    </div>
                  
                </div>
                
              </div>
              
            </div>
          </div>
          
        </div>
      


<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.totop.js"></script>
<script src="../assets/js/custom.me.js"></script>
<script src="../assets/js/aos.js"></script>
<script src="../javascript/parallax.js"></script>
<script src="../javascript/main.js"></script>
</body>
</html>
