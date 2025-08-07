<?php

require_once 'PhoneNumber.php';
require_once 'Email.php';

class ContactInfo
{
    public function __construct(
        private Email $email,
        private PhoneNumber $phoneNumber,
    ) {}

    public function getEmail(): string
    {
        return $this->email->getValue();
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber->getValue();
    }
}
