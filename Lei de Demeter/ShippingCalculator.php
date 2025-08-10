<?php

require 'Order.php';

class ShippingCalculator
{
    public function calculate(Order $order): void
    {
        // Lógica para calcular o valor do frete

        $zipCode = $order->getCustomerZipCode();
    }
}