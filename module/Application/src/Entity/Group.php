<?php
declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

/**
 * Class Group
 *
 * @package Application\Entity
 *
 * @ORM\Entity
 */
class Group
{
    /**
     * @var UuidInterface
     *
     * @ORM\Column(type="uuid_binary")
     * @ORM\Id
     */
    protected $uuid;

    /**
     * Assignee constructor.
     *
     * @throws \Exception
     */
    public function __construct()
    {
        $this->uuid = Uuid::uuid4();
    }
}
