<?php
/**
 * Created by dgoosens on 26/01/21 14:53
 */

namespace App\Domain\Stakeholder\Command\Handler;


class RegisterAUser
{
    private array $context;

    public function __construct(array $context)
    {
        $this->context = $context;
    }


}