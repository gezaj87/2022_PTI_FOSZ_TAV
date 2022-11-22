<?php

class Home extends Controller
{

    public static function Start($param = null)
    {   
        $response = [
            'database' => false,
            'data_to_frontend' => null,
            'user_logged_in' => false,
            'message' => null
        ];


        if (isset($_SESSION['token']) && isset($_SESSION['user']))
        {
            $response['user_logged_in'] = true;

            if ($param == null)
            {
                $firstDayOfMonth = new DateTime('now');
                $firstDayOfMonth = $firstDayOfMonth->format('Y-m').'-01';
                $param['date_from'] = $firstDayOfMonth;

                $lastDayOfMonth = new DateTime('now');
                $lastDayOfMonth = $lastDayOfMonth->format('Y-m-t');
                $param['date_to'] = $lastDayOfMonth;
            }
            

            try
            {
                $query_str = "select id, megnevezes, kategoriaid, osszeg, felhasznaloid, date(datum) datum from tetelek where felhasznaloid = ? and datum between ? and ?";

                $result = Database::SQL($query_str, [
                    $_SESSION['user']['id'],
                    $param['date_from'],
                    $param['date_to']
                ])->fetch_all(MYSQLI_ASSOC);

                $response['database'] = true;
                $response['data_to_frontend'] = $result;

            }
            catch(Exception $e)
            {
                $response['databse'] = false;
                $response['message'] = $e->getMessage();
            }
        }


        self::Get($response);
    }


    private static function Get($param = null)
    {
        $go_to = 'Login';
        $data_to_frontend = '';

        if ($param['user_logged_in'])
        {
            $go_to = 'Home';
            $data_to_frontend = $param;
        }

        self::View($go_to,
            [
                'data' => $data_to_frontend
            ]
        );
    }
}