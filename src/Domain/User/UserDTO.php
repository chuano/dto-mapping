<?php

declare(strict_types=1);

namespace App\Domain\User;

interface UserDTO
{
    public function fromArray(array $userData): self;
}
