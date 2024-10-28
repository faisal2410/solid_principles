<?php
include "discount.php";
class FixedDiscount implements Discount
{
    public function calculate($amount)
    {
        return $amount -20;
    }
}