<?php

require 'Email.php';
require 'CPF.php';
require 'Age.php';

class Customer
{
    private Email $email;
    private CPF $cpf;
    private Age $age;
    private bool $isActive;

    public function __construct(
        Email $email,
        CPF $cpf,
        Age $age
    ) {
        $this->email = $email;
        $this->cpf = $cpf;
        $this->age = $age;
    }

    public function getEmail(): string
    {
        return $this->email->getValue();
    }

    public function getCpf(): string
    {
        return $this->cpf->getValue();
    }

    public function getAge(): int
    {
        return $this->age->getValue();
    }
}

// Código cliente

$email = new Email("example@gamil.com");
$cpf = new CPF("12345678909");
$age = new Age(20);

$customer = new Customer($email, $cpf, $age);