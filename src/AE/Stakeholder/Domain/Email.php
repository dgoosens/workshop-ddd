<?php
/**
 * Created by dgoosens on 26/01/21 14:48
 */

namespace AE\Stakeholder\Domain;


class Email
{
    private string $email;

    private function __construct(string $email)
    {
        $this->email = $email;
    }

    public static function of(string $email)
    {
        // validation
        return new self($email);
    }

    public function asString(): string
    {
        return $this->email;
    }

}