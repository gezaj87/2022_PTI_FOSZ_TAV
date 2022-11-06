<h3>Register.php view</h3>
<?php 

    if (isset($data['data']['validation_success']))
    {
        if ($data['data']['validation_success'] && $data['data']['database_success'])
        {
            echo "Sikeres regisztráció!";
        }
        else echo($data['data']['message']);
    }

    
?>
<div class="container">
    <div class="row">
        <div class="auto-col d-flex justify-content-center">
            <div class="content">
                <form class="regisztracio" method="POST" action="register">
                    <label class="regisztracioCimke" for="regisztracioNev_id">Név</label>
                    <input type="text" id="regisztracioNev_id" name="name" required><br>
                    <label class="regisztracioCimke" for="regisztracioEmail_id">E-mail cím</label>
                    <input type="email" id="regisztracioEmail_id" name="email" required><br>
                    <label class="regisztracioCimke" for="regisztracioJelszo_id">Jelszó</label>
                    <input type="password" id="regisztracioJelszo_id" name="password1" required><br>
                    <label class="regisztracioCimke" for="regisztracioJelszoUjra_id">Jelszó újra</label>
                    <input type="password" id="regisztracioJelszoUjra_id" name="password2" required><br>
                    <label class="regisztracioCimke" for="regisztracioSzulDatum_id">Születési dátum</label>
                    <input type="date" id="regisztracioSzulDatum_id" name="date" required><br>                         
                    <label class="regisztracioCimke" for="regisztracioTel_id">Telefonszám</label>
                    <input type="tel" id="regisztracioTel_id" pattern="[0]{1}[0-9]{10}" placeholder="06203050856" name="phone"><br>
                    <input type="submit" class="regisztracioGombok" id="regRegisztralas" value="Regisztráció">
                    <input type="button" class="regisztracioGombok" id="megse" value="Mégse">
                 </form>
            </div>
        </div>
    </div>  
</div>        