<?php
class FixedDiscount implements DiscountInterface
{
    public function calculate($amount)
    {
        return $amount - 20;
    }
}