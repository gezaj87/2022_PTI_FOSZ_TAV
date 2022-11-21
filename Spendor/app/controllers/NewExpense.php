<?php

class NewExpense extends Controller
{
    private const REQUIRED_INPUTS = ['name', 'category_id', 'amount', 'date'];
    public const TOKEN_NOT_FOUND = "Nincs bejelentkezve!";

    public static function Post()
    {
        $respone = [
            'token' => true,
            'validation_success' => true,
            'message' => '',
            'database_success' => true
        ];

        $newExpense = null;

        try
        {
            if (!isset($_SESSION['token']))
            {
                $respone['token'] = false;
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
            if ($respone['token'])
            {
                $respone['validation_success'] = false;
            }
            $respone['message'] = $e->getMessage();

            self::Get($respone);
            return;
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
            $respone['database_success'] = false;
            $respone['message'] = $e->getMessage();
            self::Get($respone);
            return;
        }
        
        self::Get($respone);
    }

    public static function Get($param = null)
    {
        if (!isset($_SESSION['token']))
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