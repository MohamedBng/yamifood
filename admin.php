<?php 
require_once('autoload.php');

require_once '../yamifoodCopie/php/session.php';

?> 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Sidebars · Bootstrap v5.1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">

    

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/sidebars.css" rel="stylesheet">
  </head>
  <body>
    


    

<main>




<div id="sidebarsResponsive">
<div class="d-flex flex-column flex-shrink-0 bg-light" style="width: 4.5rem;">
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
      <li>
        <a href="index.php" class="nav-link py-3 border-bottom" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
           <i width="24" height="24" role="img" aria-label="Home" class="bi fa-solid fa-house" ><use xlink:href="#bootstrap"/></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="disponibilite.php" class="nav-link  py-3 border-bottom" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
          <i width="24" height="24" role="img" aria-label="Home" class=" bi fa-solid fa-calendar-days"><use xlink:href="#home"/></i>
        </a>
      </li>
      <li>
        <a href="admin.php" class="nav-link active py-3 border-bottom" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
          <i width="24" height="24" role="img"  class=" bi fa-solid fa-calendar-check"></i>
        </a>
      </li>
      <li>
        <a href="newsletterAdmin.php" class="nav-link py-3 border-bottom" title="Orders" data-bs-toggle="tooltip" data-bs-placement="right">
          <i width="24" height="24" role="img" class=" bi fa-solid fa-at"></i>
        </a>
      </li>
    </ul>
    <div class="dropdown border-top">
      <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>
</div>





<div id="sidebars">
  <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style=" height: 645px; width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <img src="images/logo.png" alt="" />
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="disponibilite.php" class="nav-link text-white" aria-current="page">
          <i width="16" height="16" class=" bi me-2 fa-solid fa-calendar-days"><use xlink:href="#home"/></i>
          Disponibilité
        </a>
      </li>
      <li>
        <a href="admin.php" class="nav-link active">  
          <i width="16" height="16" class=" bi me-2 fa-solid fa-calendar-check"></i>
          Réservations
        </a>
      </li>
      <li>
        <a href="newsletterAdmin.php" class="nav-link text-white">
          <i width="16" height="16" class=" bi me-2 fa-solid fa-at"></i>
          Newsletter
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>
  </div>

  <div class="tableau">
    <div class="row">
        <div class="col-lg-12">
          <div class="heading-title text-center">
            <h2>Réservations</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
          </div>
        </div>
      </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Mail</th>
      <th scope="col">Nom</th>
      <th scope="col">Date</th>
      <th scope="col">Personnes</th>
      <th scope="col">Numero</th>
      <th scope="col">Suprimer</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $admin= new Reservation;
     $admin->getDonnées();     ?>
  </tbody>
</table>
  </div>
</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


      <script src="sidebars.js"></script>
  </body>
</html>