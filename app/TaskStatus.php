<?php

namespace App;

enum TaskStatus: string
{
    case OPEN = 'новая';
    case IN_PROGRESS = 'в работе';
    case PENDING = 'отложена';
    case BLOCKED = 'приостановлена';
    case CLOSED = 'завершена';
}
