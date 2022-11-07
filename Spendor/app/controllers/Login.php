<?php

class Login extends Controller
{

    const INPUT_MISSING = "Nincs minden mező kitöltve!";
    const INCORRECT_PASSWORD = "A megadott jelszó, vagy email nem megfelelő!";
    const EMAIL_NOT_FOUND = "A megadott e-mail nem található!";
    const LOGIN_SUCCESS = "Sikeres bejelentkezés!";

    public static function Post()
    {

        $respone = [
            'database_success' => true,
            'message' => ''
        ];

        try
        {
            if (!isset($_POST['email']) || !isset($_POST['password']))
            {
                throw new Exception(self::INPUT_MISSING);
            }
    
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "select * from felhasznalok where email = ?";
            $user = Database::SQL($sql, [$email])->fetch_assoc();

            if (!$user)
            {
                throw new Exception(self::EMAIL_NOT_FOUND);
            }

            if (!password_verify($password, $user['jelszo'])) 
            {
                throw new Exception(self::INCORRECT_PASSWORD);
            }
            
            $_SESSION['token'] = md5(uniqid(mt_rand(), true));
            $_SESSION['user'] = $user;
            
            $respone['message'] = self::LOGIN_SUCCESS;
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