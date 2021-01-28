<?php
declare(strict_types=1);

namespace App\Domain\Stakeholder\Query\Handler;


use App\Domain\Stakeholder\Model\User;
use App\Domain\Stakeholder\Query\Message\FetchUserMessage;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class FetchUserHandler implements MessageHandlerInterface
{
    private $entityManager;

    public function __construct(ManagerRegistry $managerRegistry)
//    public function __construct(\App\StdLib\Doctrine\ManagerRegistry $managerRegistry)
    {
        $this->entityManager = $managerRegistry->getManager('stakeholder');
    }

    public function __invoke(FetchUserMessage $fetchUserMessage)
    {
        $repo = $this->entityManager->getRepository(User::class);
        return $repo->findOneBy(['userId' => $fetchUserMessage->getUserId()]);
    }
}