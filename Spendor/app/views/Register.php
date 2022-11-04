<h3>Register.php view</h3>
<?php 
    if ($data['data']['validation_success'] && $data['data']['database_success'])
    {
        echo "Sikeres regisztráció!";
    }
    else echo($data['data']['message']);
?>
<form method="POST" action="register">
<p>Name: <input type="text" name="name" required></p>
<p>Email: <input type="email" name="email" required></p>
<p>password1: <input type="password" name="password1" required></p>
<p>password2: <input type="password" name="password2" required></p>
<p>Date of birth: <input type="date" name="date" required></p>
<p>Phone: <input type="text" name="phone"></p>
<button type="submit">Register</button>
</form>