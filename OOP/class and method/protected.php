<?php
class toy
{
    protected $homemade, $industry;
    protected function home()
    {
        echo "Home made toy" . ' ' . $this->homemade;
    }
}
class toy1 extends toy
{
    function indus()
    {
        echo "Industry made " . '  ' . $this->industry;
    }
}
$ob = new toy1();
$ob->homemade = "Tom Tom";
$ob->industry = "Plane";
$ob->home();
$ob->indus();
