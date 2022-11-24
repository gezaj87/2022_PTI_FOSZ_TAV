<?php

class NewExpense extends Controller
{
    private const REQUIRED_INPUTS = ['name', 'category_id', 'amount', 'date'];
    public const TOKEN_NOT_FOUND = "Nincs bejelentkezve!";

    public static function Post()
    {
        $response = [
            'token' => true,
            'validation_success' => true,
            'message' => '',
            'database_success' => true
        ];

        $newExpense = null;

        

        try
        {

            if (!self::Auth() || !isset($_SESSION['token']) || !isset($_POST['token']) || $_POST['token'] != $_SESSION['token'])
            {
                $response['token'] = false;
                throw new Exception(self::TOKEN_NOT_FOUND);
            }

            

            foreach (self::REQUIRED_INPUTS as $input) {
                if (!isset($_POST[$input]))
                {
                    throw new Exception(Login::INPUT_MISSING);
                }
                else
                {
                    if (strlen($_POST[$input]) == 0) throw new Exception(Login::INPUT_MISSING);
                }
            }

            

            $newExpense = new Expense(
                $_POST['name'],
                $_POST['category_id'],
                $_POST['amount'],
                $_SESSION['user']['id'],
                DateTime::createFromFormat('Y-m-d', $_POST['date'])
            );
            
            
        }
        catch(Exception $e)
        {

            if ($response['token'])
            {
                $response['validation_success'] = false;
            }
            $response['message'] = $e->getMessage();

            self::Get($response);
            die();
        }

        try 
        {
            Database::SQL("insert into tetelek (megnevezes, kategoriaid, osszeg, felhasznaloid, datum) values(?, ?, ?, ?, ?)", [
                $newExpense->getName(),
                $newExpense->getCategory_id(),
                $newExpense->getAmount(),
                $newExpense->getUser_id(),
                $newExpense->getDate()
            ]);

        }
        catch(Exception $e)
        {
            $response['database_success'] = false;
            $response['message'] = $e->getMessage();
            self::Get($response);
            die();
        }
        
        self::Get($response);
    }

    public static function Get($param = null)
    {
        if (!self::Auth())
            {
                self::View('NotFound',
                [
                    'data' => $param
                ]
            );
            exit();
        }

        self::View('NewExpense',
            [
                'data' => $param
            ]
        );
    }
}