<?php

class User {
    private ?int $id = null;
    private string $password;
    private string $email;
    private string $name;
    private DateTime $birth_of_date;
    private ?string $phone_number = null;

    private const INVALID_ = "A megnevezés 1 és ";
    private const _TEXT = " karakter között lehet!";
    private const NOT_POSITIVE_INTEGER = "A megadott érték nem pozitív egész szám!";
    private const MAX_LENGTH_OF_PASSW_EMAIL = 60;
    private const MAX_LENGTH_OF_NAME = 100;
    private const MAX_LENGTH_OF_PHONE_NUMBER = 15;
    private const MIN_LENGTH_OF_PASSW = 4;
    private const INVALID_EMAIL = "Nem megfelelő email formátum. A karaktereinek 1 és 60 közé kell esnie!";

    public function __construct(string $password, string $email, string $name, DateTime $birth_of_date, string $phone_number = null, int $id=null){
        if ($id)
        {
            if (self::PositiveIntegerCheck($id)) $this->id = $id;
            else throw new Exception(self::NOT_POSITIVE_INTEGER);
        }
        if (self::StringCheck($password, self::MAX_LENGTH_OF_PASSW_EMAIL, self::MIN_LENGTH_OF_PASSW)) $this->password = $password;
        else throw new Exception("A megnevezés 4 és ".self::MAX_LENGTH_OF_PASSW_EMAIL.self::_TEXT);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || (self::StringCheck($email, self::MAX_LENGTH_OF_PASSW_EMAIL))) throw new Exception(self::INVALID_EMAIL);
        $this->email = $email;
        if (self::StringCheck($name, self::MAX_LENGTH_OF_NAME)) $this->name = $name;
        else throw new Exception(self::INVALID_.self::MAX_LENGTH_OF_NAME.self::_TEXT);
        if ($phone_number && self::StringCheck($phone_number, self::MAX_LENGTH_OF_PHONE_NUMBER)) $this->phone_number = $phone_number;
        else throw new Exception(self::INVALID_.self::MAX_LENGTH_OF_PHONE_NUMBER.self::_TEXT);
        $this->birth_of_date =$birth_of_date;

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

    private static function StringCheck(string $text, int $max_of_length, int $min_of_length=0): bool
    {
        $text_length = strlen($text);
        if ($text_length > $min_of_length && $text_length <= $max_of_length)
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
