<?php 
class Car{
         public $brand;

    function setBrand($brand){
    $this->brand=$brand;
    
}
function getBrand(){
    return $this->brand;
}
}
$car1= new car();
$car1->setBrand("Toyota");
echo $car1->getBrand();
echo "<br>";
?>