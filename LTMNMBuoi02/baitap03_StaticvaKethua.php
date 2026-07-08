<?php
class MathHelper{
    public static function add($a,$b){
        return $a+$b;
    }
}
class AdvanceMath extends MathHelper{
    public static function pow($a,$b){
        return $a ** $b;
    }
}

//goi phuong thuc tinh
echo "3 + 5 = " . MathHelper::add(3,5). "<br>";
echo "2 ^ 3 = " . AdvanceMath::pow(2,3). "<br>";
?>