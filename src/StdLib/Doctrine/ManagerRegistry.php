<?php
declare(strict_types=1);

namespace App\StdLib\Doctrine;


class ManagerRegistry
{
    private \Doctrine\Persistence\ManagerRegistry $registry;

    public function __construct(\Doctrine\Persistence\ManagerRegistry $registry)
    {
        $this->registry = $registry;
    }

    public function getEntityManager($object)
    {
        return $this->registry->getManagerForClass(\get_class($object));
    }
}