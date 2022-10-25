<?php

class Auth
{
    public static function Auth(bool $admin = false)
    {
        if (!isset($_SESSION['token']) || !isset($_SESSION['email'])) return false;

        $result = Database::SQL('select * from felhasznalok where email = ? and admin = ?', [$_SESSION['email'], $admin? 1 : 0 ]) -> fetch_assoc();

        if (!$result) return false;

        return true;
    }
}