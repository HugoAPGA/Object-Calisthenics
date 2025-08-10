<?php

class Age
{
    private int $age;

    public function __construct(int $age)
    {
        $this->validate($age);

        $this->$age = $age;
    }

    private function validate(int $age): void
    {
        if ($age <= 18 || $age > 120) {
            throw new DomainException("A idade é inválida");
        }
    }

    public function getValue(): int
    {
        return $this->age;
    }
}