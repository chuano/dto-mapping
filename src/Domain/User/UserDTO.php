<?php

declare(strict_types=1);

namespace App\Domain\User;

interface UserDTO
{
    public function fromEntity(User $user): self;
}
