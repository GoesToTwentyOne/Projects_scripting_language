<?php
class add
{
    public function add()
    {
        echo "Nihad";
    }
}
class add1 extends add
{
    public function add1()
    {
        echo parent::add();
        echo "Joy";
    }
}



$ob1 = new add1();
