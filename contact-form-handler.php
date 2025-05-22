<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    // Set recipient email
    $to = "info@sumitsstore.com";
    
    // Set email subject
    $subject = "New Contact Form Submission from $name";
    
    // Build email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Message:\n$message\n";
    
    // Set email headers
    $headers = "From: $name <$email>";
    
    // Send email (commented out for testing)
    // mail($to, $subject, $email_content, $headers);
    
    // For demonstration, we'll just show a success message
    // In production, you would send the email
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Contact Form Submission | Sumit's Store</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<style>
    .success-message {
        text-align: center;
        padding: 100px 20px;
    }
    .success-icon {
        font-size: 80px;
        color: #4CAF50;
        margin-bottom: 20px;
    }
    .success-title {
        font-size: 32px;
        margin-bottom: 20px;
    }
    .success-text {
        font-size: 18px;
        margin-bottom: 30px;
    }
    .back-button {
        display: inline-block;
        padding: 12px 30px;
        background-color: #5ca0e9;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    .back-button:hover {
        background-color: #4077c8;
        color: white;
    }
</style>
</head>
<body>
    <!-- header section start -->
    <div class="header_section">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="index.html"><img src="images/logo.png"></a>Sumit's Store</div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">ABOUT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="product.html">OUR PRODUCTS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="video.html">VIDEO GAMES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="remot.html">REMOT CONTROL</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">CONTACT US</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><img src="images/search-icon.png"></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="Login.html">LOG IN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Form.html"> REGISTER </a>
                </li>
              </ul>
            </div>
        </nav>
    </div>
    <!-- header section end -->

    <!-- success message section -->
    <div class="container">
        <div class="success-message">
            <div class="success-icon">✓</div>
            <h1 class="success-title">Thank You!</h1>
            <p class="success-text">Your message has been sent successfully. We'll get back to you shortly.</p>
            <a href="index.html" class="back-button">Back to Home</a>
        </div>
    </div>

    <!-- footer section start -->
    <div class="section_footer ">
      <div class="container"> 
          <div class="footer_section_2">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">About Us</h2>
                  <p class="ipsum_text_2">Sumit's Store is your premier destination for gaming controllers and accessories. We offer quality products, excellent customer service, and fast shipping.</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">Useful Links</h2>
                  <div class="useful_link">
                    <ul>
                      <li><a href="product.html">Gaming Controllers</a></li>
                      <li><a href="product.html">Gaming Headsets</a></li>
                      <li><a href="product.html">VR Accessories</a></li>
                      <li><a href="about.html">Our Story</a></li>
                      <li><a href="contact.html">Support</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                <h2 class="account_text">Contact Us</h2>
                <p class="ipsum_text_2">123 Gaming Street<br>Tech City, TC 12345<br>Phone: (123) 456-7890<br>Email: info@sumitsstore.com</p>
                </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="account_text">Newsletter</h2>
            <input type="" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
            <button class="subscribr_bt">SUBSCRIBE</button>
          </div>
        </div>
      </div>
      <div class="social_icon">
        <ul>
          <li><a href="#"><img src="images/fb-icon.png"></a></li>
          <li><a href="#"><img src="images/twitter-icon.png"></a></li>
          <li><a href="#"><img src="images/linkdin-icon.png"></a></li>
          <li><a href="#"><img src="images/instagram-icon.png"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- footer section end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright_text">Copyright 2024 All Right Reserved By Sumit Patel</p>
    </div>
  </div>
  <!-- copyright section end -->
  <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html> 