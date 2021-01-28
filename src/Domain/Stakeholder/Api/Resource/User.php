<?php
/**
 * Created by dgoosens on 26/01/21 15:37
 */

namespace App\Domain\Stakeholder\Api\Resource;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Domain\Stakeholder\Api\Endpoint\PostUser;
use App\Domain\Stakeholder\Api\Endpoint\GetUser;

/**
 * @ApiResource(
 *     collectionOperations={
 *     "post"={
            "controller"=PostUser::class
 *     }
 * },
 *     itemOperations={
 *      "get"
 *     },
 *     normalizationContext={"groups"={"user:read"}},
 *     denormalizationContext={"groups"={"user:write"}}
 * )
 */
class User
{
    /**
     * @ApiProperty(identifier=true)
     * @Groups({"user:read"})
     */
    private string $userId = '';

    /**
     * @Groups({"user:read", "user:write"})
     */
    private string $email = '';

    /**
     * @Groups({"user:write"})
     */
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

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId(string $userId)
    {
        $this->userId = $userId;
        return $this;
    }
}