<?php namespace Fid\Help\Entity\Message;

class Message implements MessageInterface {

    use \Fid\Help\Entity\GetSet;

    protected $id;
    protected $ticketId;
    protected $createdAt;
    protected $dateRead;

}