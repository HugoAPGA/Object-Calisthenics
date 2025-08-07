<?php

class Address
{
    public function __construct(
        private string $street,
        private string $number,
        private string $complement,
        private string $neighboor,
        private string $city,
        private string $state,
        private string $zipCode,
    ) {}
}
