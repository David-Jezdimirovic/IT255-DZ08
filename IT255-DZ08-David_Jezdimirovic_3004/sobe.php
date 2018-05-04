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
                          <a class="navbar-brand  active ac" href="sobe.php">Sobe <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">O nama</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="kontakt.php">Kontakt</a>
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

                   <p> Sobe koje imamo u našoj ponudi</p>

                  </div>





                  <div class="container">
                        <div class="row">
                            <div class="col-md-4 item">
                                <div class="item-wrapper">
                                    <h2 class="title">Dvokrevetna soba</h2>
                                    <img class="img-fluid" src="slike/soba1.jpg" />
                                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit, iure! Voluptatum doloribus ad tenetur recusandae repellendus exercitationem consectetur? Fugiat autem sapiente, distinctio praesentium voluptates illum recusandae maxime expedita quaerat tempora!</p>
                                    <p class="price">Cena za noć: <i class="fa fa-dollar"></i>300.00</p>
                                    <a href="#" class="btn btn-primary dugme">Rezerviši</a>
                                </div>
                            </div>
                            <div class="col-md-4 item">
                                <div class="item-wrapper">
                                    <h2 class="title">Jednokrevetna soba</h2>
                                    <img class="img-fluid" src="slike/soba2.jpg" />
                                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit, iure! Voluptatum doloribus ad tenetur recusandae repellendus exercitationem consectetur? Fugiat autem sapiente, distinctio praesentium voluptates illum recusandae maxime expedita quaerat tempora!</p>
                                    <p class="price">Cena za noć: <i class="fa fa-dollar"></i>200.00</p>
                                    <a href="#" class="btn btn-primary dugme">Rezerviši</a>
                                </div>
                            </div>
                            <div class="col-md-4 item">
                                <div class="item-wrapper">
                                    <h2 class="title">Jednokrevetna soba</h2>
                                    <img class="img-fluid" src="slike/soba3.jpg" />
                                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit, iure! Voluptatum doloribus ad tenetur recusandae repellendus exercitationem consectetur? Fugiat autem sapiente, distinctio praesentium voluptates illum recusandae maxime expedita quaerat tempora!</p>
                                    <p class="price">Cena za noć: <i class="fa fa-dollar"></i>150.00</p>
                                    <a href="#" class="btn btn-primary dugme"></i>Rezerviši</a>
                                </div>
                            </div>
                        </div>
                    </div>

  <div class="container-fluid okvir1" id="ok1">
      <h1 class="n2">Lorem ipsum</h1> 
      <p class="tekst">  Lorem ipsum dolor sit amet, consectetur adipiscing elit,
         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
           reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
            officia deserunt mollit anim id est laborum</p>

            <p id="poruka">Gost u centru pažnje</p>
    </div>


<div class="container-fluid okvir2" style="background-image: url(slike/patern.gif)">
            <h2 class="n2">Možete nas pratiti putem</h2>


            <div class="row">
                    <div class="col-md-6 item">
                        <div class="item-wrapper logo">
                            <h4 class="title">Facebook</h4>
                            <img class="img-fluid" src="slike/facebook.png" />

                            
                        </div>
                    </div>
                    <div class="col-md-6 item">
                        <div class="item-wrapper logo" >
                            <h4 class="title">Twitter</h4>
                            <img class="img-fluid" src="slike/twiter.png" />
                        
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