<?php
abstract class animal
{
    public $name;
    abstract function details();
    function about()
    {
        echo $this->name;
    }
}
class cat extends animal
{
    function details()
    {

        echo "my name is Nihad ";
    }
}
$cat = new cat();
$cat->name = "joybangla";
