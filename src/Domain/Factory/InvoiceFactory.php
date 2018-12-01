<?php

namespace CleanPhp\Invoicer\Domain\Factory;

use CleanPhp\Invoicer\Domain\Entity\Invoice;
use CleanPhp\Invoicer\Domain\Entity\Order;
use DateTimeImmutable;

class InvoiceFactory
{
    /**
     * @param Order $order
     * @return Invoice
     * @throws \Exception
     */
    public function createFromOrder(Order $order): Invoice
    {
        $invoice = new Invoice();

        $invoice->setOrder($order);
        $invoice->setInvoiceDate(new DateTimeImmutable());
        $invoice->setTotal($order->getTotal());

        return $invoice;
    }
}
