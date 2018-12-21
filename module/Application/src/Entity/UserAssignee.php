<?php
declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class UserAssignee
 *
 * @package Application\Entity
 *
 * @ORM\Entity
 */
class UserAssignee extends Assignee
{
    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="entity_uuid", referencedColumnName="uuid")
     */
    protected $entity;
}