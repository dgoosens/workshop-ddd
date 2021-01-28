<?php
/**
 * Created by dgoosens on 26/01/21 14:46
 */

namespace App\Domain\Stakeholder\Model;


use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Rfc4122\UuidV4;
use Ramsey\Uuid\Uuid;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @UniqueEntity(fields={"userId", "email"})
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=32, unique=true)
     */
    private string $userId;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private string $email;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private string $password;

    public function __construct()
    {
        $this->userId = UuidV4::uuid4()->toString();
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword(string $password): User
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @param string $userId
     * @return User
     */
    public function setUserId(string $userId): User
    {
        $this->userId = $userId;
        return $this;
    }
}