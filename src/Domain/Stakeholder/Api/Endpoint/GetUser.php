<?php
declare(strict_types=1);

namespace App\Domain\Stakeholder\Api\Endpoint;


use App\Domain\Stakeholder\Api\Resource\User;
use App\Domain\Stakeholder\Query\Handler\FetchUserHandler;

class GetUser
{
    /**
     * @var FetchUserHandler
     */
    private FetchUserHandler $fetchUserHandler;

    public function __construct(FetchUserHandler $fetchUserHandler)
    {
        $this->fetchUserHandler = $fetchUserHandler;
    }

    public function __invoke(User $data)
    {
        \dd($this->fetchUserHandler->findByUserId($data->getUserId()));
    }
}