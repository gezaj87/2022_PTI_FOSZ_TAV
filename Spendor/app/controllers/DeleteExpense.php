<?php

class DeleteExpense extends Controller
{
    private const ID_MISSING = 'Nincs ID megadva!';
    private const ID_NOT_FOUND = "Az ID nem található!";

    Public static function Delete()
    {
        $response = [
            'token' => true,
            'id' => true,
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

            if (!isset($postData['id']))
            {
                $response['id'] = false;
                throw new Exception(self::ID_MISSING);
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
            $query1 = "DELETE FROM tetelek WHERE id = ?";
            $db_result = Database::SQL($query1, [$postData['id']], true);
        }
        catch(Exception $e)
        {
            $response['database_success'] = false;
            $response['message'] = $e->getMessage();
            echo json_encode($response);
            die();
        }


        try
        {
            if ($db_result == 0)
            {
                $response['id'] = false;
                throw new Exception(self::ID_NOT_FOUND);
            }

            echo json_encode($response);
        }
        catch(Exception $e)
        {
            $response['message'] = $e->getMessage();
            echo json_encode($response);
            die();
        }
    }
}