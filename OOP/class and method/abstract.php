<?php
abstract class A
{
    abstract function name();
}
class B extends A
{
    function name()
    {
        echo "Nihad";
    }
}
class C extends A
{
    function name()
    {
        echo "Joy Bangla";
    }
}
$b = new B();
$b->name();
$c = new C();
$c->name();
