<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class OrderItemStatus extends Enum
{
    const ACTIVE = 'ACTIVE';
    const DELETED = 'DELETED';
}
