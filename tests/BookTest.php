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

    /** 如果你從這個系列買了兩本不同的書，則會有5%的折扣 */
    public function test_for_買了兩本不同的書()
    {
        /** arrange */
        $data = [1, 1, 0, 0, 0];
        $totalPrice = 190;

        /** act */
        $Book = new Book($data);
        $result = $Book->getPrice();

        /** assert */
        $this->assertEquals($totalPrice, $result);
    }

    /** 如果你買了三本不同的書，則會有10%的折扣 */
    public function test_for_買了三本不同的書()
    {
        /** arrange */
        $data = [1, 1, 1, 0, 0];
        $totalPrice = 270;

        /** act */
        $Book = new Book($data);
        $result = $Book->getPrice();

        /** assert */
        $this->assertEquals($totalPrice, $result);
    }

    /** 如果是四本不同的書，則會有20%的折扣 */
    public function test_for_買了四本不同的書()
    {
        /** arrange */
        $data = [1, 1, 1, 1, 0];
        $totalPrice = 320;

        /** act */
        $Book = new Book($data);
        $result = $Book->getPrice();

        /** assert */
        $this->assertEquals($totalPrice, $result);
    }

    /** 如果你一次買了整套一到五集，恭喜你將享有25%的折扣 */
    public function test_for_買了五本不同的書()
    {
        /** arrange */
        $data = [1, 1, 1, 1, 1];
        $totalPrice = 375;

        /** act */
        $Book = new Book($data);
        $result = $Book->getPrice();

        /** assert */
        $this->assertEquals($totalPrice, $result);
    }
}
