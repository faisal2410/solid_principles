<?php
include "Discount.php";
class PercentageDiscount implements Discount
{
    public function calculate($amount)
    {
        return $amount*0.10;
    }
}