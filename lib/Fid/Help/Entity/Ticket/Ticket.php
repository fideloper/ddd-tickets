<?php namespace Fid\Help\Entity\Ticket;

class Ticket implements TicketInterface {

    use \Fid\Help\Entity\GetSet;

    protected $id;
    protected $subject;
    protected $category;
    protected $staffId;
    protected $createdAt;

}