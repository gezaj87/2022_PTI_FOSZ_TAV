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
                <input type="date" id="datumtol" name="dateFrom" value="<?=$firstDayOfMonth?>">
                <label class="datum" for="datumig">Dátum-ig</label>
                <input type="date" id="datumig" name="dateTo" value="<?=$lastDayOfMonth?>">
                <br>
                <input type="submit" class="datumGomb" id="datumSzuro" value="Szűrés">
            </form>
            <table class="table tablaTetelek" id="tetelTabla">
                <thead>
                    <tr>
                        <th scope="col" class="hatter">Kategória</th>
                        <th scope="col">Megnevezés</th>
                        <th scope="col" class="hatter">Összeg Ft-ban</th>
                        <th scope="col">Dátum</th>
                    </tr>                                
                </thead>
                <tbody id="tetelTablaBody">                    
                </tbody>
                <tfoot>                                
                </tfoot>                        
            </table>                                      
            
        </div>
        <div class="col-auto">
            <canvas id="myChart"></canvas>
        </div>              
    </div>    
</div>       

<script src="Spendor/public/js/draw.js"></script>
<script>        
                
                const expenses = <?=json_encode($expenses)?>;                
                const totalAmountByCategory = <?=json_encode($total_amount_by_category)?>;                
                drawChartTable(expenses,totalAmountByCategory);
</script>
<script src="Spendor/public/js/page.js"></script>
