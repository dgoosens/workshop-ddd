<?php

namespace App\Domain\Stakeholder\Command\Handler;


use App\Domain\Stakeholder\Command\Message\RegisterAUserMessage;
use App\Domain\Stakeholder\Model\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class RegisterAUserHandler implements MessageHandlerInterface
{
    private $entityManager;

    public function __construct(ManagerRegistry $managerRegistry)
//    public function __construct(\App\StdLib\Doctrine\ManagerRegistry $managerRegistry)
    {
        $this->entityManager = $managerRegistry->getManager('stakeholder');
    }

    public function __invoke(RegisterAUserMessage $registerAUser)
    {
        $user = new User();
        $user
            ->setUserId($registerAUser->getUserId())
            ->setEmail($registerAUser->getUsername())
            ->setPassword($registerAUser->getPassword());

        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }


}