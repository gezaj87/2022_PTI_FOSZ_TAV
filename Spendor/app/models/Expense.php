<?php

class Expense
{
    private ?int $id = null;
    private string $name;
    private int $category_id;
    private int $amount;
    private int $user_id;
    private DateTime $created_at;

    private const INVALID_NAME = "A megnevezés 1 és 30 karakter között lehet!";
    private const NOT_POSITIVE_INTEGER = "A megadott érték nem pozitív egész szám!";


    public function __construct(string $name, int $category_id, int $amount, int $user_id, DateTime $created_at, $id = null)
    {
        if ($id)
        {
            if (self::PositiveIntegerCheck($id)) $this->id = $id;
            else throw new Exception(self::NOT_POSITIVE_INTEGER);
        }

        if (self::NameCheck($name)) $this->name = $name;
        else throw new Exception(self::INVALID_NAME);

        if (self::PositiveIntegerCheck($category_id)) $this->category_id = $category_id;
        else throw new Exception(self::NOT_POSITIVE_INTEGER);

        if (self::PositiveIntegerCheck($amount)) $this->amount = $amount;
        else throw new Exception(self::NOT_POSITIVE_INTEGER);

        if (self::PositiveIntegerCheck($user_id)) $this->user_id = $user_id;
        else throw new Exception(self::NOT_POSITIVE_INTEGER);

        $this->created_at = $created_at;

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCategory_id(): int
    {
        return $this->category_id;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getUser_id(): int
    {
        return $this->user_id;
    }

    public function getCreated_at(): DateTime
    {
        return $this->created_at;
    }

    
    private static function NameCheck(string $name): bool
    {
        $name_length = strlen($name);
        if ($name_length > 0 && $name_length <= 30)
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