<?php
/**
 * Created by dgoosens on 26/01/21 16:27
 */

namespace App\Domain\Stakeholder\Api\Endpoint;


use App\Domain\Stakeholder\Api\Resource\User;
use App\Domain\Stakeholder\Command\Message\RegisterAUserMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Messenger\MessageBusInterface;

class PostUser extends AbstractController
{
    public function __invoke(MessageBusInterface $messageBus, User $data)
    {
        $messageBus->dispatch(new RegisterAUserMessage($data->getEmail(), $data->getPassword()));
        dd($data);
        return $data;
    }
}