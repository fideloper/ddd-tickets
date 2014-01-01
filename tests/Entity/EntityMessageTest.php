<?php

class EntityMessageTest extends PHPUnit_Framework_TestCase {

    public function testMessageIsInstanceOfMessageInterface()
    {
        $message = new Fid\Help\Entity\Message\Message;

        $this->assertInstanceOf('Fid\Help\Entity\Message\MessageInterface', $message);
    }

    public function testMessageGetSetTraits()
    {
        $message = new Fid\Help\Entity\Message\Message;

        $id = 123;
        $ticketId = "456";

        $message->id = $id;
        $message->ticketId = $ticketId;

        $this->assertEquals($id, $message->id);
        $this->assertEquals($ticketId, $message->ticketId);
    }

}