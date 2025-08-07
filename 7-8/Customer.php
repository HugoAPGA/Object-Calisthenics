<?php
require_once 'ContactInfo.php';
require_once 'Address.php';

class Customer
{
    public function __construct(
        private string $name,
        private ContactInfo $contactInfo,
        private Address $address,
    ) {}

    public function getEmail(): string
    {
        return $this->contactInfo->getEmail();
    }
}

/** Simulação! */

$contactInfo = new ContactInfo(
    new Email("customer@example.com"),
    new PhoneNumber("(21) 99999-9999"),
);

$address = new Address(
    "Rua ABC",
    "123",
    "Apto 45",
    "Bairro XYZ",
    "Cidade QWE",
    "Estado RTY",
    "12345-678"
);

$customer = new Customer(
    "Renato Augusto",
    $contactInfo,
    $address
);

$emal = $customer->getEmail();
