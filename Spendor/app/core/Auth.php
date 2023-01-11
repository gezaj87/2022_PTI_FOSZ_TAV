<?php

class Auth
{
    protected static function Auth(bool $admin = false):bool
    {
        $user_logged_in = false;
        $user_in_database = false;

        if (isset($_SESSION['user']['email']))
        {
            $user_logged_in = true;

            $result = Database::SQL("SELECT f.email from felhasznalok f WHERE f.email = ? AND admin = ?", [
                $_SESSION['user']['email'],
                $admin? 1 : 0
            ])->fetch_assoc();

            if ($result)
            {
                $user_in_database = true;
            }

            return $user_logged_in && $user_in_database;
        }

        return false;
    }
}