<?php
/**
 * Created by dgoosens on 26/01/21 16:27
 */

namespace App\Domain\Stakeholder\Api\Endpoint;


use App\Domain\Stakeholder\Api\Resource\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostUser extends AbstractController
{
    public function __invoke( User $data)
    {
        dd($data);
        // TODO: Implement __invoke() method.
    }
}