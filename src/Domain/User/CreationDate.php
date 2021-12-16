<?php

declare(strict_types=1);

namespace App\Domain\User;

use DateTimeImmutable;

class CreationDate
{
    private ?DateTimeImmutable $value;

    public function __construct(?DateTimeImmutable $value = null)
    {
        $this->value = $value;
    }

    public function value(): ?DateTimeImmutable
    {
        return $this->value;
    }
}
