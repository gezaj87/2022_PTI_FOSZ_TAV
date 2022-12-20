<?php

class ModifyExpense extends Controller
{
    const MODIFICATION_ERROR = 'Nem történt módosítás!';

    public static function Modify()
    {
        $response = [
            'token' => true,
            'inputs' => true,
            'validation_success' => true,
            'database_success' => true,
            'message' => ''
        ];

        $postData = json_decode(file_get_contents('php://input'), true);

        try
        {
            if (!self::Auth() || !isset($_SESSION['token']) || !isset($postData['token']) || $postData['token'] != $_SESSION['token'])
            {
                $response['token'] = false;
                throw new Exception(NewExpense::TOKEN_NOT_FOUND);
            }


            foreach (NewExpense::REQUIRED_INPUTS as $input) {
                if (!isset($postData[$input]))
                {
                    $response['inputs'] = false;
                    throw new Exception(Login::INPUT_MISSING);
                }
                else
                {
                    if (strlen($postData[$input]) == 0) throw new Exception(Login::INPUT_MISSING);
                }
            }
            
            if (!isset($postData['id']))
            {
                $response['inputs'] = false;
                throw new Exception(DeleteExpense::ID_MISSING);
            }
            
        }
        catch(Exception $e)
        {
            $response['message'] = $e->getMessage();
            echo json_encode($response);
            die();
        }


        try
        {
            // print_r(json_encode(['date' => DateTime::createFromFormat('Y-m-d', $postData['date'])])); die();
            $date = DateTime::createFromFormat('Y-m-d', $postData['date']);
            if (!$date)
            {
                throw new Exception(Expense::NOT_VALID_DATE);
            }

            $Expense = new Expense(
                $postData['name'],
                $postData['category_id'],
                $postData['amount'],
                $_SESSION['user']['id'],
                $date,
                $postData['id']
            );
            
        }
        catch(Exception $e)
        {

            $response['validation_success'] = false;
            $response['message'] = $e->getMessage();
            echo json_encode($response);
            die();
        }


        try
        {
            $query1 = "UPDATE tetelek ";
            $query2 = "SET megnevezes = ?, kategoriaid = ?, osszeg = ?, datum = ? ";
            $query3 = "WHERE id = ?";
            define('QUERY', $query1 . $query2 . $query3);
            $result = Database::SQL(QUERY, [
                $Expense->getName(),
                $Expense->getCategory_id(),
                $Expense->getAmount(),
                $Expense->getDate(),
                $Expense->getId()
            ], true);

            if ($result == 0)
            {
                throw new Exception(self::MODIFICATION_ERROR);
            }

            echo json_encode($response);
            die();
        }
        catch(Exception $e)
        {
            $response['database_success'] = false;
            $response['message'] = $e->getMessage();
            echo json_encode($response);
            die();
        }
    }
}