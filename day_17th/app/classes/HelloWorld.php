<?php


namespace App\classes;


class HelloWorld
{
    public $message;
    public $x;
    public $y;
    public $z;
    private $check;
    public $student=[];
    public $data =[];

    public function __construct()
    {
      $this->message = "<h1>Array</h1>";
      $this->x = 10;
      $this->y = 20;
      $this->z = 30;
      $this->check = true;
    }

    public function index()
    {
        echo $this->message;
        echo '<br/>';
        //logical oparator -> &&, ||, !
//        echo ($this->x < $this->y) || ($this->y < $this->z); //1
//        echo '<br/>';
//        echo ($this->x > $this->y) || ($this->y > $this->z); // 0
//        echo '<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z); // 0
//        echo '<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z); // 0
//        echo '<br/>';
//        echo !$this->check;



        // statement
        $this->x = 30;
        $this->y =200;
        $this->z =  $this->x +  $this->y;

//        if($this->x > $this->y)
//        {
//            echo  $this->z;
//        }
//        elseif ( $this->y <  $this->z)
//        {
//            echo "Hello Bnangladeh";
//        }
//        elseif ( $this->z > $this->x)
//        {
//            echo "hello karwanbazar";
//        }
//        else
//            {
//            echo "Hello Bangladesh";
//        }

//        switch ($this->x){
//            case 10:
//                echo "Hello World";
//                break;
//            case 20:
//                echo "Hello Banaldesh";
//                break;
//            case 30:
//                echo "Hello Dhaka";
//                break;
//            default:
//                echo "Your are Default";
//        }
//        for($this->x;  $this->x >= 11;  $this->x--)
//        {
//           if( $this->x == 15)
//           {
//               break;
//           }
//            echo  $this->x.' '.'gater than 100'.' '.'<br/>';
//        }
//        while ($this->x < 50){
//            echo $this->x. ' ';
//            $this->x++;
//        }
//        do{
//            echo  $this->x;
//            $this->x++;
//        }
//        while ($this->x < 50);


        ################ ARRAY
//        $student = ['5544','4544564','15454'];
//        echo print_r($student);

        $this->data = [
           0 => [
               'name'      =>'Polash',
               'email'     =>'polash@gmail.com',
               'mobile'    =>[
                   'personal' => '15415454',
                   'gurdian'  => '4478444754'
               ]
           ],
            1 =>[
                'name'      =>'Bappy',
                'email'     =>'bappy@gmail.com',
                'mobile'    =>[
                    'personal' => '265615451',
                    'gurdian'  => '5645+2259'
                ]
            ],
            2 =>[
                'name'      =>'Polash3',
                'email'     =>'polash@gmail.com',
                'mobile'    =>[
                    'personal' => '87122659',
                    'gurdian'  => '454297784'
                ]
            ],
            3 => [
                'name'      =>'Polash4',
                'email'     =>'polash@gmail.com',
                'mobile'    =>[
                    'personal' => '15154544',
                    'gurdian'  => '45456487'
                ]
            ]
        ];
//        echo $this->data['name'];
       // echo print_r($this->data);
       // echo $this->data[4];
//        foreach ($this->data as $index=>$item)
//        {
//            echo "index:".$index ."Value: ".$item.'';
//        }
     //   echo $this->data[1]['name'];
       // echo print_r($this->data);
        foreach($this->data as $item)
        {
                //echo $item['name'].$item['email'].$item['mobile'].'<br/>';
               // echo $item['name'].$item['email'].$item['mobile'].'<br/>';
                //echo $item['email'].' '.'<br/>';
               // echo $item['mobile'].' '.'<br/>';
            foreach ($item as $value)
            {
                if(is_array($value))
                {
                    foreach ($value as $v_item)
                    {
                     echo $v_item.'';
                    }
                }
                else
                {
                    echo $value.'';
                }

            }
            echo '<br/>';
        }
    }
}