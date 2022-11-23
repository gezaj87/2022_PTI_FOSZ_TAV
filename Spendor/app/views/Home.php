<p><b>Home.php</b></p>

<?php
    if (!$data['data']['database'])
    {
        $error_message = $data['data']['message'];
        echo $error_message;
    }

    $frontend_data = $data['data']['data_to_frontend'];
    $expenses = $frontend_data['expenses'];
    $total_amount_by_category = $frontend_data['total_amount_by_category'];

    if (count($expenses) == 0)
    {
        echo "Nincs megjelenítendő adat!";
    }
    
    $firstDayOfMonth = new DateTime('now');
    $firstDayOfMonth = $firstDayOfMonth->format('Y-m').'-01';

    $lastDayOfMonth = new DateTime('now');
    $lastDayOfMonth = $lastDayOfMonth->format('Y-m-t');    

?>

<div class="container-fluid">
    <div class="row tablazat justify-content-center">            
        <div class="col-auto content foTablazat">
            <form>
                <label class="datum" for="datumtol">Dátum-tól</label>
                <input type="date" id="datumtol" value="<?=$firstDayOfMonth?>">
                <label class="datum" for="datumig">Dátum-ig</label>
                <input type="date" id="datumig" value="<?=$lastDayOfMonth?>">
            </form>
            <table class="table tablaTetelek">
                <thead>
                    <tr>
                        <th scope="col" class="hatter">Kategória</th>
                        <th scope="col">Megnevezés</th>
                        <th scope="col" class="hatter">Összeg Ft-ban</th>
                        <th scope="col">Dátum</th>
                    </tr>                                
                </thead>
                <tbody id="tesztTabla">
                    <tr>
                        <td class="hatter">Szorakozás</td>
                        <td>Mozi</td>
                        <td class="hatter">4 500</td>
                        <td>2022.10.15</td>
                    </tr>
                    <tr>
                        <td class="hatter">Szorakozás</td>
                        <td>Mozi</td>
                        <td class="hatter">4 500</td>
                        <td>2022.10.15</td>
                    </tr>
                    <tr>
                        <td class="hatter">Szorakozás</td>
                        <td>Mozi</td>
                        <td class="hatter">4 500</td>
                        <td>2022.10.15</td>
                    </tr>
                    <tr>
                        <td class="hatter">Szorakozás</td>
                        <td>Mozi</td>
                        <td class="hatter">4 500</td>
                        <td>2022.10.15</td>
                    </tr>
                </tbody>
                <tfoot>                                
                </tfoot>                        
            </table>                                      
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>         
        </div>
        <div class="col-auto">
            <canvas id="myChart"></canvas>
        </div>              
    </div>    
</div>       

<script src="Spendor/public/js/teszt.js"></script>
<script>              
                               
                //metodusba átadni
                const expenses = <?=json_encode($expenses)?>;
                console.log(expenses);
                const totalAmountByCategory = <?=json_encode($total_amount_by_category)?>;
                console.log(totalAmountByCategory);
</script> 
