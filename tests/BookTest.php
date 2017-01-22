<?php
use App\Book;

class BookTest extends \PHPUnit\Framework\TestCase
{
    /** 一到五集的哈利波特，每一本都是賣100元 */
    public function test_for_每一本都是賣100元()
    {
        /** arrange */
        $data = [1, 0, 0, 0, 0];
        $totalPrice = 100;

        /** act */
        $Book = new Book($data);
        $result = $Book->getPrice();

        /** assert */
        $this->assertEquals($totalPrice, $result);
    }
}
