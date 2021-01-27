<?php

namespace App\Domain\Stakeholder\Command\Handler;


use App\Domain\Stakeholder\Command\Message\RegisterAUserMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class RegisterAUserHandler implements MessageHandlerInterface
{
    public function __construct()
    {

    }

    public function __invoke(RegisterAUserMessage $registerAUser)
    {
        throw new \Exception('FOO');
//        dd($registerAUser);
    }


}