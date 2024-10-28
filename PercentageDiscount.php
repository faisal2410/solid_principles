<?php

class PercentageDiscount implements DiscountInterface
{
    public function calculate($amount)
    {
        return $amount * 0.10;
    }
}