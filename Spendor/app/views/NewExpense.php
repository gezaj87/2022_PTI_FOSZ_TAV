<?php 

    if (isset($data['data']['database_success']) && isset($data['data']['validation_success']))
    {
        if ($data['data']['database_success'] && $data['data']['validation_success'])
        {
            echo "Sikeres feltöltés!";
        }
        else echo($data['data']['message']);
    }
    
?>

<div class="container-fluid">
    <div class="row">
        <div class="auto-col d-flex justify-content-center">
            <div class="content">
                <form class="ujTetelek" method="POST" action="newexpense">
                    <input type="hidden" value="<?php isset($_SESSION['token'])? $_SESSION['token'] : '' ?>">
                    <label class="ujTetel hatter" for="megnevezes_id">Megnevezés</label>
                    <input type="text" id="megnevezes_id" name="name" required><br>
                    <label class="ujTetel hatter">Kategória:</label>
                    <select id="kategoria" name="category_id">
                        <option disabled selected value>Kérem válasszon</option>
                        <option value="1">Szórakozás</option>
                        <option value="2">Élelmiszer</option>
                    </select><br>                    
                    <label class="ujTetel hatter" for="osszeg_id">Összeg Ft-ban</label>
                    <input type="number" id="osszeg_id" name="amount" required><br>
                    <label class="ujTetel hatter" for="datum_id">Dátum</label>
                    <input type="date" id="datum_id" name="date" required><br>
                    <input type="submit" class="rogzites" id="rogzites_id" value="Rögzítés">
                    <input type="reset" class="alapHelyzet" id="alapHelyzet_id" value="Törlés">
                </form>
            </div>               
        </div>
    </div>  
</div>

