<?php
declare(strict_types=1);

namespace App\Domain\Stakeholder\Api\DataProvider;


use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use ApiPlatform\Core\DataProvider\ItemDataProviderInterface;
use App\Domain\Stakeholder\Api\Resource\User;
use App\Domain\Stakeholder\Query\Message\FetchUserMessage;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Stamp\HandledStamp;

class UserDataProvider implements ItemDataProviderInterface, RestrictedDataProviderInterface
{
    /**
     * @var MessageBusInterface
     */
    private MessageBusInterface $messageBus;

    public function __construct(MessageBusInterface $messageBus)
    {
        $this->messageBus = $messageBus;
    }

    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return User::class === $resourceClass;
    }

    public function getItem(string $resourceClass, $id, string $operationName = null, array $context = [])
    {
        $enveloppe = $this->messageBus->dispatch(new FetchUserMessage($id));
        $handledStamp = $enveloppe->last(HandledStamp::class);

        $data = $handledStamp->getResult();
        if(\is_null($data)) {
            // @todo >> no good !
            return null;
        }

        $user = new User();
        $user->setUserId($data->getUserId());
        $user->setEmail($data->getEmail());

        return $user;
    }
}