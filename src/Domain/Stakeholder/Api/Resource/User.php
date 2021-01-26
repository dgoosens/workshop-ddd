<?php
/**
 * Created by dgoosens on 26/01/21 15:37
 */

namespace App\Domain\Stakeholder\Api\Resource;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;
use App\Domain\Stakeholder\Api\Endpoint\PostUser;

/**
 * @ApiResource(
 *     collectionOperations={
 *     "post"={
            "controller"=PostUser::class
 *     }
 * },
 *     itemOperations={}
 * )
 */
class User
{
    private string $email = '';

    private string $password = '';

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }
}