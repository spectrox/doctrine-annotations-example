<?php
declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class GroupAssignee
 *
 * @package Application\Entity
 *
 * @ORM\Entity
 */
class GroupAssignee extends Assignee
{
    /**
     * @var Group
     *
     * @ORM\ManyToOne(targetEntity="Group")
     * @ORM\JoinColumn(name="entity_uuid", referencedColumnName="uuid")
     */
    protected $entity;
}