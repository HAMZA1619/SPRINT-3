<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$data['page_title'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet"> 
    <link rel="stylesheet" href="<?=ASSETS?>css/main.css">
    
  </head>
  <body >
  <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon   "></span>
          </button>
          <img  class="navbar-brand" style="width: 20%;padding-left:10px !important;" src="<?=ASSETS?>img/apprenant.png" alt="hellllll">
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav col-md-4 list-unstyled ms-auto mb-lg-0">
            <?php if(isset($_SESSION['user_name'])): ?>
             
              <li class="nav-item">
                <a class="nav-link link-light" href="<?=ROOT?>home" aria-current="page" >Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-secondary" href="<?=ROOT?>apprenants">Apprenant</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-secondary" href="<?=ROOT?>salle">Classes</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link link-secondary" href="<?=ROOT?>contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-secondary" href="<?=ROOT?>about">About Us</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link link-secondary" href="<?=ROOT?>logout">Logout</a>
              </li> -->
              <?php elseif(!isset($_SESSION['user_name'])): ?>
               <style>
                 .navbar{
                   background-color: #fff;
                 }
               </style>
              <li class="nav-item">
              <a class="nav-link link-primary"  href="<?=ROOT?>login">Login</a>
              </li>
              <li class="nav-item">
              <a class="btn   btn-outline-primary" href="<?=ROOT?>signup">Signup</a>
            </li>
            <?php endif; ?>   
            </ul>
          </div>
        </div>
      </nav>  
         