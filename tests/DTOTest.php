<?php

declare(strict_types=1);

namespace App\Tests;

use App\Domain\User\CreationDate;
use App\Domain\User\User;
use App\Domain\User\UserId;
use App\Domain\User\Username;
use App\Infrastructure\User\UserDoctrineDTO;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class DTOTest extends TestCase
{
    public function test_dto(): void
    {
        $date = new DateTimeImmutable();
        $user = new User(new UserId('1'), new Username('username'), new CreationDate($date));
        $dto = $user->fillDto(new UserDoctrineDTO());
        $this->assertEquals($this->expectedDTO($date), $dto);
    }

    private function expectedDTO(DateTimeImmutable $date): UserDoctrineDTO
    {
        $dto = new UserDoctrineDTO();
        $dto->id = '1';
        $dto->name = 'username';
        $dto->creation = $date;

        return $dto;
    }

}
