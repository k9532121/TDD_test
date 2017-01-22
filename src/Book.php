<?php
namespace App;

class Book
{
    private $data;
    private $oneBookPrice = 100;
    function __construct(array $data)
    {
        $this->data = $data;
    }

    function getPrice()
    {
        $money = 0;
        $bookTmp = 0;
        for ($i=0; $i < 5; $i++) {
            if ($this->data[$i]>0) {
                $bookTmp++;
                $this->data[$i]--;
            }
        }
        if ($bookTmp==1) {
            $money += $this->oneBookPrice;
        }
        return $money;
    }
}
