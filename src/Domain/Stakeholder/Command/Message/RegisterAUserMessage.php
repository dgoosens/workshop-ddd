<?php

namespace App\Domain\Stakeholder\Command\Message;


use Ramsey\Uuid\Rfc4122\UuidV4;

class RegisterAUserMessage
{
    private string $userId;
    private string $password;
    private string $username;

    public function __construct(string $username, string $password)
    {
        $this->userId = UuidV4::uuid4();
        $this->password = $password;
        $this->username = $username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getUserId()
    {
        return $this->userId;
    }
}