<?php

class DiscountCalculator
{
    public function calculateDiscount(DiscountInterface $discount, $amount)
    {
       $discount->calculate($amount);
    }
}