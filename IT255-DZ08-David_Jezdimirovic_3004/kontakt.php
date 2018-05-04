<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Met Hotel</title>
    <link rel="shortcut icon" href="slike/favicon.jpg" type="image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

        <div class="container-fluid naslov">
                Met Hotel
              </div>

              <nav class="navbar navbar-expand-lg navbar-light bg-light  navigation">
                    <a class="nav-link" href="index.php">Početna</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item ">
                          <a class="nav-link" href="sobe.php">Sobe <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">O nama</a>
                        </li>
                        <li class="nav-item">
                          <a class="navbar-brand  active ac" href="kontakt.php">Kontakt</a>
                        </li>
                        <?php
                     if (isset($_SESSION['username'])){ 
                     ?>
                        <li class="nav-item">
                           <a class="nav-link" href="logout.php">Logout <?php echo $_SESSION['username']?></a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                           <a class="nav-link" href="login.php">Login</a>
                        </li>
                    <?php }?>
                      </ul>
                    </div>
                  </nav> 



                  <div class="container-fluid podnaslov">

                   <p> Nalazimo se na ovoj lokaciji</p>

                  </div>





                  <div class="container-fluid mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.5693913017217!2d20.45258671521125!3d44.8303364790986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6530da697d59%3A0xd2bdfbf9d4b80259!2sMetropolitan+University!5e0!3m2!1sen!2srs!4v1522802202774" class="map" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

 <!-- <div class="container-fluid okvir1" id="ok1">
      <h1 class="n2">Lorem ipsum</h1> 
      <p class="tekst">  Lorem ipsum dolor sit amet, consectetur adipiscing elit,
         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
           reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
            officia deserunt mollit anim id est laborum</p>

            <p id="poruka">Gost u centru pažnje</p>
    </div>-->


<div class="container-fluid okvir2" style="background-image: url(slike/patern.gif)">
            <h2 class="n2">Možete nas kontaktirati na sledeće načine:</h2>


            <div class="row">
                    <div class="col-md-6 item a">
                        <div class="item-wrapper logo lo">
                            <h4 >Telefon:</h4>
                            <h5 >011/123-456</h5>

                            
                        </div>
                    </div>
                    <div class="col-md-6 item a">
                        <div class="item-wrapper logo lo" >
                            <h4 >Email:</h4>
                            <h5 >methotel@gmail.com</h5>
                        
                        </div>
                    </div>
                </div>

</div>




<div class="container-fluid footer">
        <p>&copy Copyright 2018&reg</p>
      </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>