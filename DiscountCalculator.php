<?php
include "PercentageDiscount.php";
class DiscountCalculator
{
    public function calculateDiscount(Discount $discount,$amount)
    {
       return $discount->calculate($amount);

        }

    }

    $percantageDiscount=new PercentageDiscount();

    $discountCalculator =new DiscountCalculator();
   echo $discountCalculator->calculateDiscount($percantageDiscount,5000);