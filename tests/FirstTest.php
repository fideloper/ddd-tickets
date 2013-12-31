<?php

class FirstTest extends PHPUnit_Framework_TestCase {

    public function testTicketIsInstanceOfTicketInterface()
    {
        $ticket = new Fid\Help\Entity\Ticket\Ticket;

        $this->assertInstanceOf('Fid\Help\Entity\Ticket\TicketInterface', $ticket);
    }

    public function testMessageIsInstanceOfMessageInterface()
    {
        $message = new Fid\Help\Entity\Message\Message;

        $this->assertInstanceOf('Fid\Help\Entity\Message\MessageInterface', $message);
    }

}