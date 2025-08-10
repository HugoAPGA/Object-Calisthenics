<?php

class Product
{
    public function __construct(
        private float $price
    ) {}

    public function changePrice(float $price): void
    {
        if ($price <= 0) {
            throw new DomainException("O valor novo do produto tem que ser posterior a zero.");
        }

        $this->price = $price;
    }

    public function applyDiscount(float $discount): float
    {
        if ($discount > $this->price) {
            throw new DomainException("O valor do desconto não pode ser maior que o preço do produto.");
        }

        if ($this->price > 20) {
            $this->price = $this->price - $discount;
        }

        return $this->price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}

// Código cliente
$product = new Product(100);
$price = $product->applyDiscount(20);
$product->changePrice(50);
$price = $product->getPrice();