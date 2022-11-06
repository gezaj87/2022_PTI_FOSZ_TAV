<?php

class Login extends Controller
{

    const INPUT_MISSING = "Nincs minden mező kitöltve!";
    const INCORRECT_PASSWORD = "A megadott jelszó nem megfelelő!";

    public static function Post()
    {

        $respone = [
            'validation_success' => true,
            'database_success' => true
            'message' => '',
        ];

        try
        {
            if (!isset($_POST['email']) || !isset($_POST['password']))
            {
                throw new Exception(self::INPUT_MISSING);
            }
    
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "select jelszo from felhasznalok where email = '". $email ."'";
            $hashed_password = Database::SQL($sql, [password_verify($password, $sql['jelszo']])
        }
        catch (Exception $e)
        {
            $respone['validation_success'] = false;
            $respone['message'] = $e->getMessage();
        }

        try
        {
            $sql = "select nev, email, szuldatum, telefonszam from felhasznalok where email = '". $email ."' AND '". $hashed_password ."'";
            Database::SQL($sql, [])
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

        self::View('Login',
            [
                'data' => $param
            ]
        );
    }
}