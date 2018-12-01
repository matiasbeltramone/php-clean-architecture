<?php

declare(strict_types = 1);

namespace CleanPhp\Invoicer\Domain\Entity;

/**
 * Class Customer
 * @package CleanPhp\Invoicer\Domain\Entity
 */
class Customer extends AbstractEntity
{
    private $name;
    private $email;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
}
