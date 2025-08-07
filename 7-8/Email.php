<?php

class Email
{
    public function __construct(private readonly string $email)
    {
        $this->validate($email);
    }

    private function validate(string $email): void
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new InvalidArgumentException("O email não é válido");
        }
    }

    public function getValue(): string
    {
        return $this->email;
    }
}
