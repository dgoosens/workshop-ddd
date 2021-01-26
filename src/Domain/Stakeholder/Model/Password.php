<?php
/**
 * Created by dgoosens on 26/01/21 14:51
 */

namespace App\Domain\Stakeholder\Model;


class Password
{
    private string $encryptedPassword;

    private function __construct(string $encryptedPassword)
    {
        $this->encryptedPassword = $encryptedPassword;
    }

    public static function of(string $encryptedPassword)
    {
        // validation
        return new self($encryptedPassword);
    }

    public function asString(): string
    {
        return $this->encryptedPassword;
    }
}