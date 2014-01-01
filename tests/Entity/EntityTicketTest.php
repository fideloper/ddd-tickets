<?php

class EntityTicketTest extends PHPUnit_Framework_TestCase {

    public function testTicketIsInstanceOfTicketInterface()
    {
        $ticket = new Fid\Help\Entity\Ticket\Ticket;

        $this->assertInstanceOf('Fid\Help\Entity\Ticket\TicketInterface', $ticket);
    }

    public function testTicketGetSetTraits()
    {
        $ticket = new Fid\Help\Entity\Ticket\Ticket;

        $id = 123;
        $subject = "A Subject";
        $category = "A Category";

        $ticket->id = $id;
        $ticket->subject = $subject;
        $ticket->category = $category;

        $this->assertEquals($id, $ticket->id);
        $this->assertEquals($subject, $ticket->subject);
        $this->assertEquals($category, $ticket->category);
    }

}