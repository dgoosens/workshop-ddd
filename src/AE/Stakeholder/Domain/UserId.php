<?php
/**
 * Created by dgoosens on 26/01/21 14:47
 */

namespace AE\Stakeholder\Domain;


class UserId
{
    private string $userId;

    private function __construct(string $userId)
    {
        $this->userId = $userId;
    }

    public static function of(string $userId): self
    {
        // validation
        return new self($userId);
    }

    public function asString(): string
    {
        return $this->userId;
    }
}