<?php

class User {
    private int $id;
    private string $password;
    private string $email;
    private string $name;
    private DateTime $birth_of_date;
    private ?string $phone_number = null;
    private bool $admin;

    private const INVALID_ = "A megnevezés 1 és ";
    private const _TEXT = " karakter között lehet!";
    private const NOT_POSITIVE_INTEGER = "A megadott érték nem pozitív egész szám!";
    private const MAX_LENGTH_OF_PASSW_EMAIL = 60;
    private const MAX_LENGTH_OF_NAME = 100;
    private const MAX_LENGTH_OF_PHONE_NUMBER = 15;

    public function __construct(int $id, string $password, string $email, string $name, DateTime $szuldatum, bool $admin, string $phone_number = null){
        if ($id)
        {
            if (self::PositiveIntegerCheck($id)) $this->id = $id;
            else throw new Exception(self::NOT_POSITIVE_INTEGER);
        }
        if (self::NameCheck($password, MAX_LENGTH_OF_PASSW_EMAIL)) $this->password = $password;
        else throw new Exception(self::INVALID_.MAX_LENGTH_OF_PASSW_EMAIL._TEXT);
        if (self::NameCheck($email, MAX_LENGTH_OF_PASSW_EMAIL)) $this->email = $email;
        else throw new Exception(self::INVALID_.MAX_LENGTH_OF_PASSW_EMAIL._TEXT);
        if (self::NameCheck($name, MAX_LENGTH_OF_NAME)) $this->name = $name;
        else throw new Exception(self::INVALID_.MAX_LENGTH_OF_NAME._TEXT);
        if (self::NameCheck($phone_number, MAX_LENGTH_OF_PHONE_NUMBER)) $this->phone_number = $phone_number;
        else throw new Exception(self::INVALID_.MAX_LENGTH_OF_PHONE_NUMBER._TEXT);

        $this->birth_of_date =$birth_of_date;
        $this->admin = $admin;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getBirth_of_date(): DateTime
    {
        return $this->birth_of_date;
    }

    public function getPhone_number(): string
    {
        return $this->phone_number;
    }
    
    public function getAdmin(): bool
    {
        return $this->bool;
    }

    private static function StringCheck(string $string, int $max_of_length): bool
    {
        $name_length = strlen($name);
        if ($name_length > 0 && $name_length <= $max_of_length)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    private static function PositiveIntegerCheck(int $number): bool
    {
        if (is_numeric($number) && $number > 0 && is_int($number))
        {
            return true;
        }
        else
        {
            return false;
        }
    }


}