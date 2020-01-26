<?php
require 'user.php';
$r = new User;

$states = $r->getselect();

session_destroy();
 ?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Report</title>
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
    <script src="main.js"></script>
</head>
<body>
	  <div class="container-fluid">
      <div class="row ">
        <div class="col mb-5">
          <nav class="navbar navbar-expand-md fixed-top  bg-warning" id="nav">
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
    </div>
  <!-- Navbar Finish -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="mt-5">REPORT A ROAD FAULT!!!</h1>
        <p class="para3">This site allows you to report problems on roads in your state.</p>
        <p class="para3 mb-5">Information received via this online form is processed during business hours, Monday to Friday, 8am to 4.21pm. The more information you can provide, the quicker we can assess and rectify the problem.</p>
          <?php
        if (isset($_GET['m']) && $_GET['m']=='success') {
          echo "<div class='alert alert-info alert-dismissible fade show mb-2' role='alert'>";
          echo "Thanks for registering " .$_SESSION['p'].", you can now login.";
          echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>";
          echo "</div>";
        }elseif (isset($_GET['m']) && $_GET['m']=='failed') {
          echo "<div class='alert alert-danger'>";
          echo "sorry try again";
          echo "</div>";
        }
        if (isset($_GET['x']) && $_GET['x']=='failed') {
          echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>";
          echo "Username or password Incorrect";
          echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>";
          echo "</div>";
        }
          if (isset($_GET['p']) && $_GET['p']=='passed') {
          echo "<div class='alert alert-dismissible fade show alert-info mb-2' role='alert'>";
          echo "You have successfully reported a bad road";
          echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>";
          echo "</div>";}
        ?>
       <div class="mb-4 mt-3 bg bg-light shadow p-2"> <span class="para3" >Do you have an account with us???</span><button data-target="#exampleModal" data-toggle="modal" type="button" class="btn btn-md btn-dark about_button mx-2">Login Here!!</button></div>
        <form action="reported.php" autocomplete="on" class="bg-light w-75 my-auto mb-3 mx-auto shadow rounded p-4" style="min-height: 200px" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
          <div class="form-group">
             <label class=" para3 " for="state">Please Choose your state</label><span style="color: red"> *</span><br>
             <select class=" w-50  form-control" searchable="Search here.." name="state" id="state" required>
              <option selected="selected">Choose Your State</option>
                  <?php
                  foreach ($states as $state) {
                    echo "<option value='".$state['id']."'>".$state['name']."</option>";
                  }

                  ?>
            </select>
          </div>
            <div class="form-group w-50  mt-2">
                <label class="control-label para3" for="lga">Local Goverment Area</label><span style="color: red"> *</span>
                <select name="lga" id="lga" class="form-control" required>
                </select>
            </div>

            <div class="form-group">
              <label class="para3" for="add">Enter Damaged Road Address/Street Name</label><span style="color: red"> *</span>
              <input type="text" id="add" name="address" class="form-control w-50" required>
            </div>

            <div class="form-group">
              <label class="para3" for="landmark">Enter Nearest Landmark</label>
              <input type="text" id="landmark" name="landmark" class="form-control w-50">
            </div>

             <div class="form-group">
              <label class="para3" for="text_box2">Describe The Extent Of Damage</label><span style="color: red"> *</span><br>
               <textarea id="text_box2" rows="10" cols="30" name="comments" class="" required></textarea>
            </div>
            <span class=" mb-2 para3">Upload Images</span><span class="mb-2" style="color: red"> *</span>(Image must be of .png, .jpeg or .jpg extensions and must not be larger than 10MB)<br>
              <input type="file" class="mb-1 mt-1" name="upload[]" value="" id="upload"  placeholder="">
              <input type="file" class="mb-1" name="upload[]" value="" id="upload"  placeholder="">
              <input type="file" class="mb-1 mt-1" name="upload[]" value="" id="upload"  placeholder="">
              <input type="file" class="mb-1" name="upload[]" value="" id="upload"  placeholder=""><br><br>
            <span class="para3"> Would you like to Sign Up to our website???</span><button href="#portfolio" data-target="#exampleModals" data-toggle="modal" type="button" class="btn btn-md btn-dark about_button mx-2">Sign Up Here!!!</button><br><br>
            <h2 class="para3 mb-3">Your Contact Details</h2> 
            <p class="para3">Provide your contact details below in case we require further information about the problem.</p>
            <div class="form-group mb-3">
              <label class="para3" for="name_input">Your Full Name</label><span style="color: red"> *</span><br>
              <input type="text" name="name" id="name_input" class="w-50 form-control" required>
            </div>   
             <div class="form-group mb-3">
              <label class="para3" for="email_input">Your Email Address</label><span style="color: red"> *</span><br>
              <input type="email" name="email" id="email_input" class="w-50 form-control" required>
            </div> 
             <div class="form-group">
              <label class="para3" for="phone_input">Your Phone Number</label><span style="color: red"> *</span><br>
              <input type="number" name="phone" id="phone_input" class="w-50 mb-5 form-control" required>
            </div> 
            <br>
             <button type="submit" class="btn btn-outline-dark btn-lg mb-1">Submit</button>
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



    <div class="modal fade" id="exampleModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content" id="modalcontent">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="signup.php" class="p-3">
              <input type="text" name="name" placeholder="Enter Your Full Name" class="form-control mb-2" required>
              <input type="email" name="email" placeholder="Enter Your Email" class="form-control mb-2" required>
              <input type="password" name="pwd" id="pwds" placeholder="Enter Your Password" class="form-control mb-2" required><button class="btn btn-warning mb-2" id="btns" type="button">Toggle Password</button><br>
              <input type="phone" name="phone" placeholder="Enter Your Phone" class="form-control mb-2" required>
              <input type="submit" value="Sign Up" class="btn btn-warning mt-2" name="">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            
          </div>
        </div>
      </div>
    </div>
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content" id="modalcontent">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="login.php" class="p-3">
              <input type="email" name="email" placeholder="Enter Your Email" class="form-control mb-2">
              <input type="password" name="pwd" id="pwd" placeholder="Enter Your Password" class="form-control mb-1 mt-2"><button class="btn btn-warning mb-2" id="btn" type="button">Toggle Password</button><br>
              <input type="submit" value="Login" class="btn btn-warning mt-2" name="">
            </form>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    $('#state').change(function() {
      var state_id = $('#state').val();
      fetch_lgas(state_id);
    });

    function fetch_lgas(states_id){
      var serverdata = {'state_id':states_id}
    
      $.ajax({
        url:'ajaxvalidate.php',
        type:'POST',
        data:serverdata,
        success:function(response){
          var ret = JSON.parse(response);
          var lgas_string = '';
          $.each(ret,function(key,val) {
            lgas_string+="<option value='"+val.id+"'>"+val.name+"</option>";
          });
        $("#lga").html(lgas_string);  
        }
        
      });

    }
    $('#btn').click(function() {
   var a = $("#pwd").attr('type');
   if (a == 'password') {
    $('#pwd').attr('type', 'text');
     }
    else{
      $('#pwd').attr('type', 'password');
      // $('#btn').html("Hide Password");

    }
  
 });
       $('#btns').click(function() {
   var a = $("#pwds").attr('type');
   if (a == 'password') {
    $('#pwds').attr('type', 'text');
     }
    else{
      $('#pwds').attr('type', 'password');
      // $('#btn').html("Hide Password");

    }
  
 });
  </script>
</body>
</html>