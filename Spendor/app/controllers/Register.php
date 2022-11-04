<?php

class Register extends Controller
{

    const INPUT_MISSING = "Nincs minden mező kitöltve!";
    const PASSWD_DONT_MATCH = "Megadott jelszavak nem egyeznek!";

    public static function Post()
    {

        $respone = [
            'validation_success' => true,
            'message' => '',
            'database_success' => true
        ];

        try
        {
            if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['password1']) || !isset($_POST['password2']) || !isset($_POST['date']))
            {
                throw new Exception(self::INPUT_MISSING);
            }

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password1 = $_POST['password1'];
            $password2 = $_POST['password2'];
            $date = $_POST['date'];
            $phone = $_POST['phone'];

            if ($password1 === $password2) $user = new User($password1, $email, $name, date_create($date), $phone? $phone : null);
            else throw new Exception(self::PASSWD_DONT_MATCH);

        }
        catch (Exception $e)
        {
            $respone['validation_success'] = false;
            $respone['message'] = $e->getMessage();
        }


        try
        {
            $sql = 'insert into felhasznalok (nev, email, jelszo, szuldatum, telefonszam) values(?, ?, ?, ?, ?)';
            Database::SQL($sql, [$name, $email, password_hash($password1, PASSWORD_BCRYPT), $date, $phone? $phone : '0']);
            
        }
        catch (Exception $e)
        {
            $respone['database_success'] = false;
            $respone['message'] = $e->getMessage();
        }

        self::Get($respone);
        
    }

    public static function Get($param = null)
    {

        self::View('Register',
            [
                'data' => $param
            ]
        );
    }
}