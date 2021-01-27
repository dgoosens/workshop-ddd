<?php

namespace App\Domain\Stakeholder\Command\Message;


class RegisterAUserMessage
{
    private string $password;
    private string $username;

    public function __construct(string $username, string $password)
    {
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
}