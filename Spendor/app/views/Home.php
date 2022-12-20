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
    
    $date_from = $data['data']['date_from'];
    $date_to = $data['data']['date_to'];   

?>

<div class="container-fluid">
    <div class="row tablazat justify-content-center">            
        <div class="col-auto content foTablazat">
            <form method="POST" action="">
                <input type="hidden" value="<?=isset($_SESSION['token'])? $_SESSION['token'] : ''?>" name="token">
                <label class="datum" for="datumtol">Dátum-tól</label>
                <input type="date" id="datumtol" name="dateFrom" value="<?=$date_from?>">
                <label class="datum" for="datumig">Dátum-ig</label>
                <input type="date" id="datumig" name="dateTo" value="<?=$date_to?>">
                <br>
                <button type="submit" class="datumGomb" id="datumSzuro">Szűrés</button>
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

<script src="Spendor/public/js/drawing.js"></script>
<script>        
                
    const expenses = <?=json_encode($expenses)?>;                
    const totalAmountByCategory = <?=json_encode($total_amount_by_category)?>;                
    drawChartTable(expenses,totalAmountByCategory);

</script>
<script src="Spendor/public/js/page.js"></script>


<script src="Spendor/public/js/deleteExpense.js"></script>
<script>
    const deleteExpense = new DeleteExpense('<?=$_SESSION['token']?>');

    
    const deleteResponse = async (id) => {
        const response = await deleteExpense.Response(id);
        // console.log(response);
    }

    //
    // deleteResponse: tétel törlésére szolgáló függvény, paraméterben meg kell adni a törlendő tétel ID-ját.
    // a függvényben deklarált "response" változó tartalmazza a szerver válaszát a kérésről json formátumban.
    // A függvény törzsében kell megírni a frontend kódot.
    // függvényhívás példa: deleteResponse(15);
    //

    

    
    
</script>
