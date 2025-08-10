<?php

class Address
{
    public function __construct(
        private string $zipCode,
        private string $city
    ) {}

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    public function getCity(): string
    {
        return $this->city;
    }
}
