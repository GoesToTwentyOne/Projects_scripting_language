
<?php

class A
{
    function A()
    {
        echo "nihad";
    }
}
class B extends A
{
    function B()
    {
        parent::A();
        echo "Nihad Hossain";
    }
    function __destruct()
    {
        echo "destroy";
    }
}
$ob1 = new B();
?>