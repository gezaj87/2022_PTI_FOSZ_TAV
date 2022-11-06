<h3>Bejelentkezés</h3>
<?php 
    if ($data['data']['validation_success'] && $data['data']['database_success'])
    {
      echo "Sikeres bejelentkezés!";
    }
    else echo($data['data']['message']);
?>
<div class="container">
    <div class="row">
        <div class="auto-col d-flex justify-content-center">
             <div class="content">
                <form class="bejelentkezes" action="login">
                    <label class="bejelentkezesCimke" for="bejelentkezesEmail_id">E-mail cím </label>
                    <input type="email" id="bejelentkezesEmail_id" required><br>                            
                    <label class="bejelentkezesCimke" for="bejelentkezesJelszo_id">Jelszó </label>
                    <input type="password" id="bejelentkezesJelszo_id" required><br>
                    <input type="submit" class="bejelentkezesGombok" id="bejelentkezes" value="Bejelentkezés">
                    <input type="button" class="bejelentkezesGombok" id="beregisztralas" value="Regisztráció">                      
                </form>                            
            </div>
        </div>             
    </div>
</div> 
