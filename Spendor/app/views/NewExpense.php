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

<h3>teszt: NewExpense.php</h3>
<form method="POST" action="newexpense">
    <input type="hidden" value="<?=isset($_SESSION['token'])? $_SESSION['token'] : ''?>" name="token">
    <p>Name: <input type="text" name="name"></p>
    <p>
        Category:
        <select name="category_id">
            <option value="1">Szórakozás</option>
            <option value="2">Élelmiszer</option>
            <option value="3">Rezsi</option>
            <option value="4">Lakbér</option>
        </select>
    </p>
    <p>Amount: <input type="number" name="amount"></p>
    <p>
        Date:
        <input type="date" name="date">
    </p>
    <button type="submit">Save</button>
</form>
