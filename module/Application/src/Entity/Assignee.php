<?php
declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

/**
 * Class Assignee
 *
 * @package Application\Entity
 *
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="entity_type", type="string")
 * @ORM\DiscriminatorMap({"unknown" = "Assignee", "user" = "UserAssignee", "group" = "GroupAssignee"})
 */
class Assignee
{
    /**
     * @var UuidInterface
     *
     * @ORM\Column(type="uuid_binary")
     * @ORM\Id
     */
    protected $uuid;

    /**
     * @var Job
     *
     * @ORM\ManyToOne(targetEntity="Job", inversedBy="assignee")
     * @ORM\JoinColumn(name="job_uuid", referencedColumnName="uuid")
     */
    protected $job;

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