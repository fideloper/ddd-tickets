<?php

class CategoryServiceTest extends PHPUnit_Framework_TestCase {

    public function testSetTicketCategoryWithRealCategory()
    {
        $ticket = new Fid\Help\Entity\Ticket\Ticket;
        $ticketRepository = new Fid\Help\Repository\Ticket\ArrayTicketRepository;
        $categoryService = new Fid\Help\Service\Ticket\CategoryService( $ticketRepository );
        $category = 'pre-sales';

        $ticket = $categoryService->setTicketCategory($ticket, $category);

        $this->assertEquals($ticket->category, $category);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSetTicketCategoryWithFakeCategoryThrowsException()
    {
        $ticket = new Fid\Help\Entity\Ticket\Ticket;
        $ticketRepository = new Fid\Help\Repository\Ticket\ArrayTicketRepository;
        $categoryService = new Fid\Help\Service\Ticket\CategoryService( $ticketRepository );
        $category = 'something random';

        $ticket = $categoryService->setTicketCategory($ticket, $category);
    }
}