<?php

class Company
{
    private string $email;

    public function __construct(string $email)
    {
        $this->validateEmail($email);
        $this->email = $email;
    }

    private function validateEmail(string $email): void
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new InvalidArgumentException("O email náo é válido");
        }
    }
}
