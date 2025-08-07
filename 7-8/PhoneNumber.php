<?php
class PhoneNumber{
    public function __construct(private readonly string $phoneNumber)
    {
    }

    public function getValue(): string
    {
        return $this->phoneNumber;
    }
}