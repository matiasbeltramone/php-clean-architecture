<?php

declare(strict_types = 1);

namespace CleanPhp\Invoicer\Domain\Entity;

use DateTimeImmutable;

/**
 * Class Invoice
 * @package CleanPhp\Invoicer\Domain\Entity
 * Our Invoice entity, which has a Many to One relationship with an Order
 */
class Invoice
{
    private $order;
    private $invoiceDate;
    private $total;

    public function getOrder(): Order
    {
        return $this->order;
    }

    public function setOrder(Order $order): self
    {
        $this->order = $order;
        return $this;
    }

    public function getInvoiceDate(): DateTimeImmutable
    {
        return $this->invoiceDate;
    }

    public function setInvoiceDate(DateTimeImmutable $invoiceDate): self
    {
        $this->invoiceDate = $invoiceDate;
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
