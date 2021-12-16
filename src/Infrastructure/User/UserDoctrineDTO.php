<?php

declare(strict_types=1);

namespace App\Infrastructure\User;

use App\Domain\User\User;
use App\Domain\User\UserDTO;
use DateTimeImmutable;
use ReflectionObject;

class UserDoctrineDTO implements UserDTO
{
    public string $id;
    public string $name;
    public DateTimeImmutable $creation;

    public function fromEntity(User $user): UserDTO
    {
        $this->id = $this->getPrivateValue($user, 'id')->value();
        $this->name = $this->getPrivateValue($user, 'username')->value();
        $this->creation = $this->getPrivateValue($user, 'creationDate')->value();

        return $this;
    }

    private function getPrivateValue(User $user, string $propertyName): mixed
    {
        $reflector = new ReflectionObject($user);

        $property = $reflector->getProperty($propertyName);
        $property->setAccessible(true);

        return $property->getValue($user);
    }
}
