<?php
declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

/**
 * Class Job
 *
 * @package Application\Entity
 *
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="job_type", type="string")
 * @ORM\DiscriminatorMap({"unknown" = "Job", "simple" = "SimpleJob", "complex" = "ComplexJob", "standard" = "StandardJob"})
 */
class Job
{
    /**
     * @var UuidInterface
     *
     * @ORM\Column(type="uuid_binary")
     * @ORM\Id
     */
    protected $uuid;

    /**
     * @var Assignee
     *
     * @ORM\OneToMany(targetEntity="Assignee", mappedBy="job")
     * @ORM\JoinColumn(name="assignee_uuid", referencedColumnName="uuid")
     */
    protected $assignee;

    /**
     * Job constructor.
     *
     * @throws \Exception
     */
    public function __construct()
    {
        $this->uuid = Uuid::uuid4();
    }
}