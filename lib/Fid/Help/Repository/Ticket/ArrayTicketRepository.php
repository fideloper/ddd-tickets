<?php namespace Fid\Help\Repository\Ticket;

class ArrayTicketRepository implements TicketRepositoryInterface {

    protected $categories = array(
        'pre-sales',
        'support',
    );

    public function categoryExists($category)
    {
        return in_array($category, $this->categories);
    }

}