<?php


namespace App\classes;


class HelloWorld
{
    public $message;
    public  $students=[];

    public function __construct()
    {
        $this->message = "<h1>Day-18</h1>";
        $this->students = [
            0 =>[
                'id'        => 1,
                'name'      => 'Pobitro',
                'email'     => 'pobitrodeb@gmail.com',
                'mobile'    => '01745154841'
            ],
            1 =>[
                'id'       => 2,
                'name'     => 'rashedul rased',
                'email'    => 'rasedul@gmail.com',
                'mobile'   => '017845645411'
            ],
            2 =>[
                'id'       => 3,
                'name'     => 'Bappi lahiry',
                'email'    => 'bappy@gmail.com',
                'mobile'   => '0145657451547'
            ],
            3 =>[
                'id'       => 4,
                'name'     => 'Bappi lahiry',
                'email'    => 'bappy@gmail.com',
                'mobile'   => '0145657451547'
            ],
        ];

    }

    public function index()
    {
        echo $this->message;

    }
    public function getAllStudent()
    {
        return $this->students;
    }
}