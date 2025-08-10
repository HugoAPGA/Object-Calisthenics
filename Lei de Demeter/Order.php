<?php

require 'Customer.php';

class Order
{
    public function __construct(
        private Customer $customer,
    ) {}

    public function getCustomerZipCode(): string
    {
        return $this->customer->getZipCode();
    }
}
