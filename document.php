
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Anil z" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- SITE TITLE -->
<title>Add Client</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="assets/css/animate.css">	
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- Icon Font -->
<link href="assets/css/ico-moon.css" rel="stylesheet">
<!-- Icon Font CSS -->
<link rel="stylesheet" href="assets/css/ionicons.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<!-- DatePicker CSS -->
<link href="assets/css/datepicker.min.css" rel="stylesheet">
<!-- FontAwesome CSS -->
<link rel="stylesheet" href="assets/css/all.min.css">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<!-- Style CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" id="layoutstyle" href="assets/color/theme.css">
<style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    
    #customers tr:hover {background-color: #ddd;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color:#5a5959;
      color: white;
    }
    </style>

</head>

<body>
<?php include 'header.php';?>

<section id="contact">
	<div class="container-fluid">
    	<div class="row">
            <div class="col-lg-12 col-md-12 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;">
                <div class="field_form" style="box-shadow: 0 0 5px rgba(0,0,0,0.2);padding:20px;">
                    <div class="row">
                        <div class="col-md-12 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">
                            <div class="heading_s1 text-center"  style="padding:27px;">
                                <h2>Documentation Detail</h2>
                            </div>
                        </div>
                    </div>
                        <form method="post" name="enq">
                        <div class="row">
                            <div class="form-group col-lg-3 col-md-6">
                                <label  style="font-weight: 700;">Registration : <span class="asterisk-color">*</span></label>
                                <div class="custom_select">
                                    <select class="form-control not_chosen">
                                    	<option value="">Register</option>
                                    	<option value="1">Instagram</option>
                                    	<option value="2">Phone</option>
                                    </select>
                                </div>
                             </div>
                            <div class="form-group col-lg-3 col-md-6">
                                <label  style="font-weight: 700;">To Register : <span class="asterisk-color">*</span></label>
                                <div class="custom_select">
                                    <select class="form-control not_chosen">
                                    	<option value="">To Register</option>
                                    	<option value="1">Instagram</option>
                                    	<option value="2">Phone</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-3 col-md-6">
                                <label  style="font-weight: 700;">Document : <span class="asterisk-color">*</span></label>
                                <div class="custom_select">
                                    <select class="form-control not_chosen">
                                    	<option value="1">Document</option>
                                    	<option value="2">Instagram</option>
                                    	<option value="3">Phone</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-3 col-md-6">
                                <label  style="font-weight: 700;">Document Of : <span class="asterisk-color">*</span></label>
                                <div class="custom_select">
                                    <select class="form-control not_chosen">
                                    	<option value="">Document</option>
                                    	<option value="1">Instagram</option>
                                    	<option value="2">Phone</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-3 col-md-6">
                                <label  style="font-weight: 700;">Name : <span class="asterisk-color">*</span></label>
                                <input required="required" placeholder="Name *" id="reffered" class="form-control" name="name" type="text">
                            </div>
                            <div class="form-group col-lg-3 col-md-6">
                                <label  style="font-weight: 700;">Place: <span class="asterisk-color">*</span></label>
                                <input required="required" placeholder="Place *" id="place" class="form-control" name="place" type="text">
                            </div>
                            <div class="form-group col-lg-3 col-md-6">
                                <label  style="font-weight: 700;"> Date: <span class="asterisk-color">*</span></label>
                                
                                <input required="required" placeholder="DD/MM/YYYY" class="form-control datepicker" name="date" type="text">
                            </div>
                            <div class="form-group col-lg-3 col-md-6">
                                <label  style="font-weight: 700;">Reg Date: <span class="asterisk-color">*</span></label>
                                
                                <input required="required" placeholder="DD/MM/YYYY" class="form-control datepicker" name="date" type="text">
                            </div>
                            <div class="form-group col-lg-3 col-md-6">
                            	<label  style="font-weight: 700;">Doc Available : <span class="asterisk-color">*</span></label>
                                <div class="custom_select">
                                    <select class="form-control not_chosen">
                                    	<option value="">Document</option>
                                    	<option value="1">Instagram</option>
                                    	<option value="2">Phone</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-3 col-md-6">
                            	<label  style="font-weight: 700;">Doc in Office : <span class="asterisk-color">*</span></label>
                                <div class="custom_select">
                                    <select class="form-control not_chosen">
                                    	<option value="">Document</option>
                                    	<option value="1">Instagram</option>
                                    	<option value="2">Phone</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-3 col-md-6">
                                <label  style="font-weight: 700;">SAC Date: <span class="asterisk-color">*</span></label>
                                
                                <input required="required" placeholder="DD/MM/YYYY" class="form-control datepicker" name="date" type="text">
                            </div>
                       
                        <div class="form-group col-lg-3 col-md-6">
                            <label  style="font-weight: 700;">Attested : <span class="asterisk-color">*</span></label>
                            <div class="custom_select">
                                <select class="form-control not_chosen">
                                    <option value="">Document</option>
                                    <option value="1">Instagram</option>
                                    <option value="2">Phone</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-3 col-md-6">
                            <label  style="font-weight: 700;">Translation Date: <span class="asterisk-color">*</span></label>
                
                            <input required="required" placeholder="DD/MM/YYYY" class="form-control datepicker" name="date" type="text">
                        </div>
                        <div class="form-group col-lg-3 col-md-6">
                            <label  style="font-weight: 700;">Notary Date: <span class="asterisk-color">*</span></label>
                            
                            <input required="required" placeholder="DD/MM/YYYY" class="form-control datepicker" name="date" type="text">
                        </div>
                        <div class="form-group col-lg-3 col-md-6">
                            <label  style="font-weight: 700;">Collector Date: <span class="asterisk-color">*</span></label>
                           
                            <input required="required" placeholder="DD/MM/YYYY" class="form-control datepicker" name="date" type="text">
                        </div>
                        <div class="form-group col-lg-3 col-md-6">
                            <label  style="font-weight: 700;">Apo Date: <span class="asterisk-color">*</span></label>
                            
                            <input required="required" placeholder="DD/MM/YYYY" class="form-control datepicker" name="date" type="text">
                        </div>
                        <div class="form-group col-lg-3 col-md-6">
                            <label  style="font-weight: 700;">Sent To PT Date Date: <span class="asterisk-color">*</span></label>
    
                            <input required="required" placeholder="DD/MM/YYYY" class="form-control datepicker" name="date" type="text">
                        </div>
                        <div class="form-group col-lg-3 col-md-6">
                            <label  style="font-weight: 700;">Doc reached : <span class="asterisk-color">*</span></label>
                            <div class="custom_select">
                                <select class="form-control not_chosen">
                                    <option value="">Document</option>
                                    <option value="1">Instagram</option>
                                    <option value="2">Phone</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-3 col-md-6">
                            <label  style="font-weight: 700;">Received in PT: <span class="asterisk-color">*</span></label>
                            <input required="required" placeholder="Received in PT *" id="reffered" class="form-control" name="name" type="text">
                        </div>
                        <div class="form-group col-lg-3 col-md-6">
                            <label  style="font-weight: 700;">Submitted Date: <span class="asterisk-color">*</span></label>
                            <input required="required" placeholder="DD/MM/YYYY" class="form-control datepicker" name="date" type="text">
                        </div>
                        <div class="form-group col-lg-3 col-md-6">
                            <label  style="font-weight: 700;">Concluded Date: <span class="asterisk-color">*</span></label>
                            <input required="required" placeholder="DD/MM/YYYY" class="form-control datepicker" name="date" type="text">
                        </div>
                        <div class="form-group col-lg-3 col-md-6">
                            <label  style="font-weight: 700;">Submitted : <span class="asterisk-color">*</span></label>
                            <div class="custom_select">
                                <select class="form-control not_chosen">
                                    <option value="">Document</option>
                                    <option value="1">Instagram</option>
                                    <option value="2">Phone</option>
                                </select>
                            </div>
                        </div>
                       
                        <div class="form-group col-md-3">
                            <label  style="font-weight: 700;">Attachment: <span class="asterisk-color">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                              </div>
                        </div>
                        <div class="form-group col-lg-3 col-md-6">
                            <label  style="font-weight: 700;">Comment : <span class="asterisk-color">*</span></label>
                            <textarea required="required" placeholder="Message " id="comment" class="form-control" name="comment" rows="3"></textarea>
                        </div>
                       
                       
                            <div class="col-lg-12">
                                <button type="submit" title="Submit Your Message!" class="btn btn-default btn-radius" id="submitButton" name="submit" value="Submit">Save</button>
                            </div>
                            <div class="col-lg-12">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
                    </form>		
                    </div>
                <div class="map">
                	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193229.77301255226!2d-74.05531241936525!3d40.823236500441624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f613438663b5%3A0xce20073c8862af08!2sW+123rd+St%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1533565007513" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="small_pb overflow_hide">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.1s" style="animation-delay: 0.1s; opacity: 1;">
                <div class="heading_s1 text-center"> 
                  <h2>Client Details</h2>
                </div>
               
                <div class="row">
                    <table id="customers">
                        <tr>
                          <th>Delete</th>
                          <th>Edit</th>
                          <th>Sr. No.</th>
                          <th>Registration</th>
                          <th>To Register</th>
                          <th>Document</th>
                        </tr>
                        <tr>
                            <td><a href="#"><i class="ion-android-delete" style="font-size: 25px;color: #dc3545;"></i></a></td>
                            <td><a href="#"><i class="ion-edit" style="font-size: 25px;color:#218838;"></i></a></td>
                          <td>1</td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                            <td><a href="#"><i class="ion-android-delete" style="font-size: 25px;color: #dc3545;"></i></a></td>
                            <td><a href="#"><i class="ion-edit" style="font-size: 25px;color:#218838;"></i></a></td>
                          <td>2</td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                            <td><a href="#"><i class="ion-android-delete" style="font-size: 25px;color: #dc3545;"></i></a></td>
                            <td><a href="#"><i class="ion-edit" style="font-size: 25px;color:#218838;"></i></a></td>
                          <td>3</td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                            <td><a href="#"><i class="ion-android-delete" style="font-size: 25px;color: #dc3545;"></i></a></td>
                            <td><a href="#"><i class="ion-edit" style="font-size: 25px;color:#218838;"></i></a></td>
                          <td>4</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          
                        </tr>
                        
                       
                      </table>
                      
                	
                   
                </div>
            </div>
        </div>
    </div>
</section>
<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 
<footer>
	<div class="top_footer text_white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">
                	<div class="footer_logo">
                    	<h4>Address</h4>
                    </div>
                    <p>Phasellus blandit massa enim. elit id varius nunc. Lorem ipsum dolor sit amet, consectetur industry.</p>
                    <ul class="contact_info contact_info_light list_none">
                        <li>
                            <span class="ti-location-pin"></span>
                            <address>123 Street, Old Trafford, New South London , UK</address>
                        </li>
                        <li>
                            <span class="ti-email"></span>
                            <a href="mailto:info@sitename.com">info@sitename.com</a>
                        </li>
                        <li>
                            <span class="ti-mobile"></span>
                            <p>+ 457 789 789 65</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;">
                	<h6 class="widget_title">USEFUL LINKS</h6>
                    <ul class="list_none widget_links">
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Feedback</a></li>
                        <li><a href="#">Support center</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;">
                	<h6 class="widget_title">USEFUL LINKS</h6>
                    <ul class="list_none widget_links">
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Feedback</a></li>
                        <li><a href="#">Support center</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.8s" style="animation-delay: 0.8s; opacity: 1;">
                    <h6 class="widget_title">Subscribe Newsletter</h6>
                    <p>Contrary to popular belief of lorem Ipsm Latin amet ltin from consectetur industry.</p>
                    <div class="newsletter_form mb-4">
                        <form> 
                            <div class="outline_input">
                            	<input type="text" required="" placeholder="Enter Email Address">
                            </div>
                            <button type="submit" title="Subscribe" class="btn btn-submit" name="submit" value="Submit">
                            	<span class="ion-android-send"></span>
                            </button>
                        </form>
                    </div>
                   
                   
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer text_white bg-dark">
    	<div class="container">
        	<div class="row align-items-center">
            	<div class="col-md-6">
                	<p class="copyright m-md-0 text-center text-md-left">© 2021 All Rights Reserved.</p>
                </div>
                <div class="col-md-6">
                	<ul class="list_none footer_link text-center text-md-right">
                    	<li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Latest jQuery --> 
<script src="assets/js/jquery-1.12.4.min.js"></script>
<!-- jquery-ui --> 
<script src="assets/js/jquery-ui.js"></script> 
<!-- popper min js --> 
<script src="assets/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap --> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<!-- owl-carousel min js  --> 
<script src="assets/owlcarousel/js/owl.carousel.min.js"></script> 
<!-- magnific-popup min js  --> 
<script src="assets/js/magnific-popup.min.js"></script> 
<!-- waypoints min js  --> 
<script src="assets/js/waypoints.min.js"></script> 
<!-- parallax js  --> 
<script src="assets/js/parallax.js"></script> 
<!-- countdown js  --> 
<script src="assets/js/jquery.countdown.min.js"></script> 
<!-- fit video  -->
<script src="assets/js/jquery.fitvids.js"></script>
<!-- jquery.counterup.min js --> 
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- isotope min js --> 
<script src="assets/js/isotope.min.js"></script>
<!-- elevatezoom js -->
<script src='assets/js/jquery.elevatezoom.js'></script> 
<!-- scripts js --> 
<script src="assets/js/scripts.js"></script>
<!-- DatePicker js -->
<script type="text/javascript" src="assets/js/datepicker.min.js"></script>

</body>
</html>