<?php

declare(strict_types=1);

namespace App\Domain\User;

class User
{
    private UserId $id;
    private Username $username;
    private CreationDate $creationDate;

    public function __construct(UserId $id, Username $username, CreationDate $creationDate)
    {
        $this->id = $id;
        $this->username = $username;
        $this->creationDate = $creationDate;
    }


    public function fillDto(UserDTO $dto): UserDTO
    {
        return $dto->fromEntity($this);
    }
}
