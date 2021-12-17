<?php

declare(strict_types=1);

namespace App\Infrastructure\User;

use App\Domain\User\UserDTO;
use DateTimeImmutable;

class UserDoctrineDTO implements UserDTO
{
    public string $id;
    public string $name;
    public DateTimeImmutable $creation;

    public function fromArray(array $userData): UserDTO
    {
        $this->id = $userData['id'];
        $this->name = $userData['username'];
        $this->creation = $userData['creationDate'];

        return $this;
    }
}
