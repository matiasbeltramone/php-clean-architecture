<?php

declare(strict_types = 1);

namespace CleanPhp\Invoicer\Domain\Entity;

/**
 * Class Order
 * @package CleanPhp\Invoicer\Domain\Entity
 * Let's define our Order entity, which has a Many to One relationship with Customer
 */
class Order
{
    private $customer;
    private $orderNumber;
    private $description;
    private $total;

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer): self
    {
        $this->customer = $customer;
        return $this;
    }

    public function getOrderNumber(): int
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(int $orderNumber): self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->total = $total;
        return $this;
    }
}
