<?php

namespace App\Enums;

enum TicketStatus: string
{

    case PENDING = 'PENDING';
    case RESPONDED = 'RESPONDED';
    case COMPLETED = 'COMPLETED';

}
