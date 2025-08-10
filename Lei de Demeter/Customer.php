<?php

require 'Address.php';

class Customer
{
    public function __construct(
        private Address $address
    ) {}

    public function getZipCode(): string
    {
        return $this->address->getZipCode();
    }
}
