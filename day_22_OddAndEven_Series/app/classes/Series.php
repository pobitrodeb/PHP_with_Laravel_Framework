<?php


namespace App\classes;


class Series
{
    public $startingNumber;
    public $endingNumber;
    public $result;
    public $choice;

    public function __construct($post)
    {
        $this->startingNumber = $post['strating_number'];
        $this->endingNumber   = $post['ending_number'];
      if(isset($post['choice']))
      {
          $this->choice       = $post['choice'];
      }
    }
    public function index()
    {
        //return $this->startingNumber;
        for($this->startingNumber; $this->startingNumber <= $this->endingNumber; $this->startingNumber++)
        {
            $this->result .= $this->startingNumber .' ';
        }
        return $this->result;
    }

    public function oddEven()
    {
        if($this->choice = '1')
        {
            for($this->startingNumber; $this->startingNumber <= $this->endingNumber; $this->startingNumber++)
            {
                if ($this->startingNumber % 2 !=0)
                {
                    $this->result .= $this->startingNumber .' ';
                }
            }
            return $this->result;
        }
        elseif ($this->choice == '2')
        {
            for($this->startingNumber; $this->startingNumber <= $this->endingNumber; $this->startingNumber++)
            {
                if ($this->startingNumber % 2 ==0)
                {
                    $this->result .= $this->startingNumber .' ';
                }
            }
            return $this->result;
        }
    }

    public function sumOfBtn()
    {
        for($this->startingNumber; $this->startingNumber <= $this->endingNumber; $this->startingNumber++)
        {
            $this->result += $this->startingNumber;
        }
        return $this->result;
    }
}