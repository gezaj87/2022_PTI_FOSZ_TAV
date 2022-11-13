<h3>Bejelentkezés</h3>
<?php 

    if (isset($data['data']['database_success']))
    {
        if ($data['data']['database_success'])
        {
            echo "Sikeres bejelentkezés!";
            $url = explode('/', $_SERVER['REQUEST_URI']);
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.$url[1]);
        }
        else echo($data['data']['message']);
    }
    
?>
<div class="container">
    <div class="row">
        <div class="auto-col d-flex justify-content-center">
             <div class="content">
                <form class="bejelentkezes" method="POST" action="login">
                    <label class="bejelentkezesCimke" for="bejelentkezesEmail_id">E-mail cím </label>
                    <input type="email" id="bejelentkezesEmail_id" name="email" required><br>                            
                    <label class="bejelentkezesCimke" for="bejelentkezesJelszo_id">Jelszó </label>
                    <input type="password" id="bejelentkezesJelszo_id" name="password" required><br>
                    <input type="submit" class="bejelentkezesGombok" id="bejelentkezes" value="Bejelentkezés">
                    <input type="button" class="bejelentkezesGombok" id="beregisztralas" value="Regisztráció" onclick="location.href='register';">                   
                </form>                            
            </div>
        </div>             
    </div>
</div> 
