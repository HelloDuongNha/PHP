<?php
class Fruits {
    public function myValue(){
        return __CLASS__;
    }
}
$kiwi = new Fruits();
echo $kiwi->myValue();
?>