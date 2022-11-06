<h3>Bejelentkezés</h3>
<?php 
    if ($data['data']['validation_success'] && $data['data']['database_success'])
    {
      echo "Sikeres bejelentkezés!";
    }
    else echo($data['data']['message']);
?>
<form method="POST" action="login">
  <p>Email: <input type="email" name="email" required /></p>
  <p>Password: <input type="password" name="password" required /></p>
  <button type="submit">Bejelentkezés</button>
</form>
