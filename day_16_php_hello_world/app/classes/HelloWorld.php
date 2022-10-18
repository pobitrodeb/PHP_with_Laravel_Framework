<?php


namespace App\classes;


class HelloWorld
{
    public $message;
    public $firstName;
    public $x;
    public $y;
    public $result;
    public function __construct()
    {
//        $this->message = $data;
        $this->x = 10;
        $this->y = 20;

//         ARTHEMETIC OPARATOR
//        $this->result = $this->x + $this->y;
//        $this->result = $this->x - $this->y;
//        $this->result = $this->x * $this->y;
//        $this->result = $this->x % $this->y;
        $this->result = $this->x / $this->y;


//         ASINGMENT OPARATOR
       // $this->result = $this->x = $this->y;
       // $this->result = $this->x += $this->y;
       // $this->result = $this->x -= $this->y;
       // $this->result = $this->x *= $this->y;
       // $this->result = $this->x /= $this->y;
       // $this->result = $this->x %= $this->y;
      //  $this->result = $this->x .= $this->y;

//        CONDITIONAL  OPARATOR
       // $this->result = $this->x < $this->y;
       // $this->result = $this->x > $this->y;
       // $this->result = $this->x <= $this->y;
       // $this->result = $this->x >= $this->y;
       // $this->result = $this->x == $this->y;
      //  $this->result = $this->x === $this->y;

    }
    public function index(){
        // $this->firstName = "Pobitro";
     //   $this->lastname =  "Debnath";
     //   echo $this->firstName .' '. $this->lastname;
       // echo gettype($this->firstName);

       // echo "This Result is:" .$this->result;
        echo "This Result is:" .$this->result;
    }
}