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
        if ($bookTmp==2) {
            $money += ($bookTmp*$this->oneBookPrice*0.95);
        }
        if ($bookTmp==3) {
            $money += ($bookTmp*$this->oneBookPrice*0.9);
        }
        if ($bookTmp==4) {
            $money += ($bookTmp*$this->oneBookPrice*0.8);
        }
        if ($bookTmp==5) {
            $money += ($bookTmp*$this->oneBookPrice*0.75);
        }
        return $money;
    }
}
