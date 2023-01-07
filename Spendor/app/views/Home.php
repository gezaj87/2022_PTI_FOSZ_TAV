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
            <table class="table tablaTetelek table-hover" id="tetelTabla">
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
<button type="button" class="btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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


<script src="Spendor/public/js/deleteExpense.js"></script>
<script src="Spendor/public/js/modifyExpense.js"></script>
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

    
    
    const modifyExpense = new ModifyExpense('<?=$_SESSION['token']?>');

    const modifyResponse = async (id, name, category_id, amount, date) => {
        const response = await modifyExpense.Response(id, name, category_id, amount, date);
        // console.log(response);
    }

    // 
    //modifyExpense: lásd deleteResponse
    //tételek módosítására szolgáló függvény. Paraméterei: id, name, category_id, amount, date
    //példa: modifyResponse(10, "Palacsinta", 1, 3, "2022-12-20");
    //

    
    
</script>
