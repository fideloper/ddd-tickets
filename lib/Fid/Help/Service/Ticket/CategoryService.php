<?php namespace Fid\Help\Service\Ticket;

use InvalidArgumentException;
use Fid\Help\Entity\Ticket\TicketInterface;
use Fid\Help\Repository\Ticket\TicketRepositoryInterface;

class CategoryService {

    protected $ticketRepository;

    public function __construct(TicketRepositoryInterface $ticketRepository)
    {
        $this->ticketRepository = $ticketRepository;
    }

    public function setTicketCategory(TicketInterface $ticket, $category)
    {
        // Validate Category Exists (throw InvalidArgumentException)
        if( ! $this->ticketRepository->categoryExists() ) {
            throw new InvalidArgumentException('Category '.$category.' does not exist.');
        }

        // Set Category
        $ticket->category = $category;

        return $ticket;
    }
}