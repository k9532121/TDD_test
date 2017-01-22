<?php
namespace App;

class Book
{
    private $data;
    private $oneBookPrice = 100;
    private $allBookNumber = 5;

    function __construct(array $data)
    {
        $this->data = $data;
    }

    function getPrice()
    {
        $money = 0;
        do {
            $bookTmp = 0;
            for ($i=0; $i < $this->allBookNumber; $i++) {
                if ($this->data[$i]>0) {
                    $bookTmp++;
                    $this->data[$i]--;
                }
            }
            switch ($bookTmp) {
                case 1:
                    $money += $this->oneBookPrice;
                    break;
                case 2:
                    $money += ($bookTmp*$this->oneBookPrice*0.95);
                    break;
                case 3:
                    $money += ($bookTmp*$this->oneBookPrice*0.9);
                    break;
                case 4:
                    $money += ($bookTmp*$this->oneBookPrice*0.8);
                    break;
                case 5:
                    $money += ($bookTmp*$this->oneBookPrice*0.75);
                    break;
            }
        } while ($bookTmp!=0);
        return $money;
    }
}
