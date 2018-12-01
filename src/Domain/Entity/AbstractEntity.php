<?php

declare(strict_types = 1);

namespace CleanPhp\Invoicer\Domain\Entity;

/**
 * Class AbstractEntity
 * @package CleanPhp\Invoicer\Domain\Entity
 * To keep from repeating ourselves, and as a way to identify all entities,
 * let's go ahead and create this abstract class that all of entities can inherit
 */
abstract class AbstractEntity
{
    protected $id;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
}
