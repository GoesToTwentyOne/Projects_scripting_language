<?php
class information
{
    public $name, $age, $phn;

    public function display()
    {
        echo $this->name;
        echo $this->age;
        echo $this->phn;
    }
}


$information1 = new information();
$information1->name = "Nihad";
$information1->age = 25;
$information1->phn = "015555555";
$information1->display();
