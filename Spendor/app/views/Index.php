<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Spendor-Bejelentkezés</title>
        <link rel="stylesheet" href="Spendor/public/css/bootstrap.min.css">
        <link rel="stylesheet" href="Spendor/public/css/style.css">
        <script src="Spendor/public/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    </head>
    <body>
        <!--HEADER-->                  
        <header>
            <div class="row">                
                <h1>
                    <a class="kepFoOldal"onclick="location.href=location.href.split('/').slice(0, 4).join('/');">
                        <img src="Spendor/public/img/logo4.jpg" alt="logo" height="70">
                    </a>
                    PTI-FOSZ-TAV-2022-AFP
                </h1>                
            </div>               
        </header>
        <?php if (isset($_SESSION['token'])): ?>
            <nav class="navbar navbar-expand-md navbar-light">            
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link tetelRogzites hatter" onclick="location.href=location.href.split('/').slice(0, 4).join('/');">Főoldal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tetelRogzites" href="newexpense" >Új tétel hozzáadása</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link megtekintes hatter" href="tetelek.html" >Tételek megtekintése</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link profil " href="profil.html" >Profil megtekintése</a>
                        </li>       
                        <li class="nav-item">
                            <a class="nav-link kijelentkezes hatter" id="logout_click">Kijelentkezés</a>
                        </li>                         
                    </ul>
                </div>
            </nav>
        <?php endif; ?>
        <!--CONTENT-->
        <main><?php include_once $view.'.php' ?></main>      
    </body> 
</html>

<script>

    let element = document.getElementById("logout_click");
    if (typeof(element) != 'undefined' && element != null)
    {
        document.getElementById("logout_click").addEventListener("click", async ()=> {

            <?php if (isset($_SESSION['token'])): ?>
                const token = "<?=$_SESSION['token']?>";
            <?php else: ?>
                const token = "";
            <?php endif; ?>

            const data = {
                token: token
            }

            const options = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            }

            try
            {
                const respone = await fetch("logout", options);
                const json = await respone.json();
                console.log(json);
                alert(json.ok);
                location.reload();
            }
            catch (error)
            {
                console.log(error.message);
                alert(`Hiba történt: ${error.message}`);
            }

        });
    }

    


</script>