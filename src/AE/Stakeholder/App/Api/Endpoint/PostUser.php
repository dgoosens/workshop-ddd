<?php
/**
 * Created by dgoosens on 26/01/21 16:27
 */

namespace AE\Stakeholder\App\Api\Endpoint;


use AE\Stakeholder\App\Api\Resource\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostUser extends AbstractController
{
    public function __invoke( User $data)
    {
        dd($data);
        // TODO: Implement __invoke() method.
    }
}