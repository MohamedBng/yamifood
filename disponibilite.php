<?php 
require_once '../yamifoodCopie/php/session.php';
require_once '../yamifoodCopie/php/bdd.php';
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
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
          <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        <a href="disponibilite.php" class="nav-link active py-3 border-bottom" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
          <i width="24" height="24" role="img" aria-label="Home" class=" bi fa-solid fa-calendar-days"><use xlink:href="#home"/></i>
        </a>
      </li>
      <li>
        <a href="admin.php" class="nav-link py-3 border-bottom" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
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
        <a href="disponibilite.php" class="nav-link  active" aria-current="page">
          <i width="16" height="16" class=" bi me-2 fa-solid fa-calendar-days"><use xlink:href="#home"/></i>
          Disponibilité
        </a>
      </li>
      <li>
        <a href="admin.php" class="nav-link text-white">  
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
    <form action="../yamifoodCopie/php/form_reservation.php" method="post">
  <div class="reservation-box">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="heading-title text-center">
            <h2>Disponibilité</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
          </div>
        </div>
      </div>
                    <div class="form-group">
                      <input id="input_date" class="dateTimepickerAdmin picker__input form-control" name="date" type="text"  placeholder="Selectionner une date" equired data-error="Please enter Date">
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control" id="name" name="places" placeholder="Place disponible" required data-error="Please enter your number of places">
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button text-center">
                    <button class="btn btn-common" id="submit" type="submit">Book Table</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div> 
                    <div class="clearfix"></div> 
                  </div>                                
                  </div>                                 
              
  </form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Places</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $DateAndTime = date('Y-m-d h:i:s a', time()); 
    $req = $pdo->prepare("SELECT * FROM reservation WHERE res_date > :date ");
    $exec = $req->execute(array(
    'date' => $DateAndTime
    ));
    while ($donnees = $req->fetch())

  {

  ?>
    <tr>
      <td><?php echo htmlspecialchars($donnees['res_date']); ?></td>
      <td><?php echo htmlspecialchars($donnees['places']); ?></td>
    </tr>
  <?php

  } // Fin de la boucle des billets

  $req->closeCursor();

  ?>
  </tbody>
</table>
  </div>


</main>

.
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


      <script src="sidebars.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
 <script type="text/javascript">

flatpickr(".dateTimepickerAdmin", {
  mode: "multiple",
  enableTime: true,
  time_24hr: true,
  allowInput: true,
});
</script>
  </body>
</html>



