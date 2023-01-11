<?php

class Logout extends Controller
{

    public static function Post()
    {

        $data = json_decode(file_get_contents('php://input'), true);

        if (!isset($_SESSION['token']) || !isset($data['token']) || $data['token'] !== $_SESSION['token'])
        {
            http_response_code(404);
            exit();
        }
        
        session_destroy();
        header('Content-Type: application/json');
        echo json_encode(['ok' => "Sikeres kijelentkezés!"]);
        exit();
    }

}