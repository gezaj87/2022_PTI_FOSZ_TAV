<?php

//inicializálás
require_once '../app/init.php';
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Spendor-Bejelentkezés</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    </head>
    <body>
        <!--HEADER-->                  
        <header>
            <div class="row">                
                <h1>
                    <a>
                        <img src="img/logo4.jpg" alt="logo" height="70">
                    </a>
                    PTI-FOSZ-TAV-2022-AFP
                </h1>                
            </div>               
        </header>
        <nav class="navbar navbar-expand-md navbar-light">            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link tetelRogzites hatter" href="ujtetel.html" >Új tétel hozzáadása</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link megtekintes" href="tetelek.html" >Tételek megtekintése</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link profil hatter" href="profil.html" >Profil megtekintése</a>
                    </li>       
                    <li class="nav-item">
                        <a class="nav-link kijelentkezes" >Kijelentkezés</a>
                    </li>                         
                </ul>
            </div>
        </nav>
        <!--CONTENT-->
        <main>

        </main>
        <!--FOOTER--> 
        <footer>            
        </footer>        
    </body> 
</html>