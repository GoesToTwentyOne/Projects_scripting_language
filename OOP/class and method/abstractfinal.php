<?php

abstract class romaniya
{


    public $name, $age;
    function NaAg()
    {
        return $this->name . '  ' . $this->age;
    }
    abstract function message();
}
class romaniya_girl extends romaniya
{
    function message()
    {
        echo "Nhad hossain";
    }
    function NaAg()
    {
        return parent::NaAg();
    }
}
$rom = new romaniya_girl();
$rom->message();;

$rom->name = "Nihad Hossain";
$rom->age = 52;
echo $rom->NaAg();
