<?php

class ArrayTicketRepositoryTest extends PHPUnit_Framework_TestCase {

    public function testCategoryExists()
    {
        $ticketRepo = new Fid\Help\Repository\Ticket\ArrayTicketRepository;

        $category = 'pre-sales';

        $this->assertTrue( $ticketRepo->categoryExists($category) );
    }

    public function testCategoryDoesNotExists()
    {
        $ticketRepo = new Fid\Help\Repository\Ticket\ArrayTicketRepository;

        $category = 'something random';

        $this->assertFalse( $ticketRepo->categoryExists($category) );
    }
}