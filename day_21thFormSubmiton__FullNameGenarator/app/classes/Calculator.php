<?php


namespace App\classes;


class Calculator
{
    public $firstNumber;
    public $lastNumber;
    public $choice;
    public $result;
    public function __construct($data)
    {
        $this->firstNumber  = $data['first_number'];
        $this->lastNumber   = $data['last_number'];
        $this->choice       = $data['choice'];
    }
    public function additon()
    {
        return $this->firstNumber + $this->lastNumber;
    }
    public function substraction()
    {
        return $this->firstNumber - $this->lastNumber;
    }
    public function multi()
    {
        return $this->firstNumber * $this->lastNumber;
    }
    public function divi()
    {
        return $this->firstNumber / $this->lastNumber;
    }
    public function modulus()
    {
        return $this->firstNumber % $this->lastNumber;
    }
    public function calculator()
    {
        switch ($this->choice)
        {
            case '+' : $this->result = $this->additon();
                break;
            case '-' : $this->result = $this->substraction();
                break;
            case '*' : $this->result = $this->multi();
                break;
            case '/' : $this->result = $this->divi();
                break;
            case '%' : $this->result = $this->modulus();
                break;
        }
        return $this->result;
    }

}