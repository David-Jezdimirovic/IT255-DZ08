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
                    <a class="nav-item" href="index.php">Početna</a>
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
                          <a class="nav-link" href="kontakt.php">Kontakt</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                          <a class="navbar-brand  active ac" href="#">Registracija</a>
                        </li>
                       
                      </ul>
                    </div>
                  </nav> 


<div class="container-fluid">

    <form action="register.php" method="POST" class="col-md-4">
         <div class="form-group">
          <label for="exampleInputEmail1">Ime</label>
             <input type="text" class="form-control" name="ime" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ime">
            
         </div>
         <div class="form-group">
          <label for="exampleInputEmail1">Prezime</label>
             <input type="text" class="form-control" name="prezime" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Prezime">
            
         </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
             <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
             <small id="emailHelp" class="form-text text-muted"></small>
         </div>
        <div class="form-group">
         <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>
      
            <button  type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

<div class="container-fluid poruka2" style="height:5rem;color:red">

<?php
include("php/funkcije.php");
 
if(isset($_POST['submit'])){
    
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(!empty($ime) && !empty($prezime) && !empty($username) && !empty($password)){
        register($ime,$prezime,$username,$password);
       
        echo "Uspešna registracija";
        header("Location: login.php");
       } else {
          
       
        
         echo "* Morate popuniti sva polja *";
       
      }
  }
         
 
    ?> 

</div>
    
 
    
   

<div class="container-fluid footer">
        <p>&copy Copyright 2018&reg</p>
      </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>