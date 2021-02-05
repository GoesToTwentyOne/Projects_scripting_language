<?php
class A
{
    public $name, $age, $qualification;
}
class B extends A
{
    public function display()
    {
        echo "my name is " . $this->name;
    }
}
$ob1 = new B();
$ob1->name = "Nihad";
$ob1->display();
