<?php

namespace App\Actions;

use App\Models\Ticket;

class ApproveTicketValidationAction
{
    public function __invoke(Ticket $ticket)
    {
        $ticket->approved_at = now();
        $ticket->save();
    }
}
