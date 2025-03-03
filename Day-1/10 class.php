
<?php  

class Car{
    public $brand;
    public $model;
    public $year;
    public $price;

    function setBrand($brand){
         $this->brand=$brand;
    }
    function getBrand(){
        return $this->brand;
    }

    function setModel($model){
        $this->model=$model;
    }

    function getModel(){
        return $this->model;
    }

    function setYear($year){
        return $this->year=$year;
    }
    function getYear(){
        return $this->year;
    }
    function setPrice($price){
        return $this->price=$price;
    }
    function getPrice(){
        return $this->price;
    }
}
$car1= new car();
$car1->setBrand("Toyotaa");
$car1->SetModel("Corolla"); 
$car1->setYear("2019");
$car1->setPrice("2000000");
echo "<br>";

echo "Brand: " . $car1->getBrand() . "<br>";
echo "Model: " . $car1->getModel() . "<br>";
echo "Year: " . $car1->getYear() . "<br>";
echo "Price: " . $car1->getPrice() . "<br>";

?>