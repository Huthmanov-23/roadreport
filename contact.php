<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact</title>
	 <link
      href="https://fonts.googleapis.com/css?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="main.css">

	  <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jqBootstrapValidation.js" type="text/javascript"></script>
    <script src="js/contact_me.js" type="text/javascript"></script>
    <script src="main.js"></script>
</head>
<body>
  <!-- Navbar -->
  <div class="container-fluid mb-5">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-md fixed-top  bg-warning mb-5" id="nav">
          <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon dropdown" style="color: white"></span>
          </button>
           <a class="navbar-brand" id="anchor" href="index.php">ROAD REPORT</a>
         <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link anchor" href="index.php" >HOME<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link anchor" href="report.php">REPORT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link anchor" href="findpothole.php">FIND POTHOLES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link anchor" href="contact.php">CONTACT</a>
              </li>
            </ul>
           </div>

        </nav>
      </div>
    </div>
    <!-- Navbar Finish -->
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <iframe class="shadow w-100 mx-auto rounded mt-5 mb-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.899880255949!2d3.2170200146638592!3d6.5343272952736875!2m3!1f0!2f0!3f0!3m2!
    1i1024!2i768!4f13.1!3m3!1m2!1s0x103b850293b
    cbf9b%3A0xfe6207d4e84e8328!2sAdexson!5e0!3m2!1sen!2sng!4v1570952811730!5m2!1sen!2sng"
    width="700" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <i class="fas fa-map-marker-alt" style="font-size:45px; "></i>
        <p style="font-size:20px; font-family:Calibri;">43,Coker Street, Adexson, Bus stop, Lagos.</p>
        <p style="clear: both;"></p>
        <i class="far fa-paper-plane" style="font-size:45px; "></i>
        <p style="font-size:20px;  font-family:Calibri;">roadreport@gmail.com</p>
        <p style="clear: both;"></p>
        <i class="fas fa-mobile" style="font-size:45px; "></i>
        <p style="font-size:20px; font-family:Calibri;">+234 9052163723, +234 8052498768</p>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-5 bg-light shadow rounded">
        <?php
        if (isset($_GET['p']) && $_GET['p'] == 'passed') {
         echo "<div class='alert  alert-dismissible fade show alert-info mb-2' role='alert'>";
          echo "Message Sent";
          echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>";
          echo "</div>";
        }
        ?>
        <form id="contactForm" name="sentMessage" method="POST" action="" novalidate="novalidate">
          <div class="form-group">
            <label for="name" class="para3">Your Name</label><span style="color: red"> *</span>
            <input type="text" name="name" id="name" class="form-control" data-validation-required-message="Please enter your name." required>
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group">
            <label for="email" class="para3">Your Email</label><span style="color: red"> *</span>
            <input type="email" name="email" id="email" data-validation-required-message="Please enter your email." class="form-control" required>
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group">
            <label for="message" class="para3">Message</label><span style="color: red"> *</span>
            <textarea name="message" id="message" rows="10" cols="10" class="form-control" data-validation-required-message="Please enter a message." required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <button type="submit" name="submit" class="btn btn-outline-dark btn-lg mb-3">Send Message</button>
        </form>
      </div>
    </div>
  </div>

  <section id="footer">
    <div class="container-fluid mt-1">
      <div class="row">
        
        <div class="col-sm-6 mt-4 mb-4">
          <span class="text-center mt-2">Created by Uthman &copy; 2019</span>
        </div>
        <div class="col-sm-6 mt-4 mb-4">
          <a href="https://twitter.com/huthmanov" target="_blank" ><i class="fab fa-twitter mr-2"></i></a>
          <a href="https://instagram.com/huthmanov" target="_blank"><i class="fab fa-instagram mr-2"></i></a>
          <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook mr-2"></i></a>
          <a href="https://www.linkedin.com/in/ojodu-uthman-1a4a6685/" target="_blank"><i class="fab fa-linkedin mr-2"></i></a>
          <a href="https://github.com/Huthmanov-23/Huthmanov-23" target="_blank"><i class="fab fa-github mr-2"></i></a>

        </div>
      </div>
    </div>
  </section>

<!--   <script type="text/javascript">
    $(document).ready(function() {
      $('#form').submit(function(event) {
        event.preventDefault();
        var name =$('#name').val();
        var email =$('#email').val();
        var message =$('#message').val();

        $('#validate-message').load('mail.php', {
          name: name,
          email: email,
          message: message
        });
      });
    });
  </script> -->
	<script src="js/jqBootstrapValidation.js" type="text/javascript"></script>
  <script src="js/contact_me.js" type="text/javascript"></script>
</body>
</html>