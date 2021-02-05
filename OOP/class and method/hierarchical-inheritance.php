<?php
class Google
{
    public  $PrincipleEngineer, $MarkeetingEngineer;
    public $SoftwareEngineer = "This Engineer are the best guy and so much talent";
}
class SoftwareEngineer extends Google
{

    function display()
    {
        echo $this->SoftwareEngineer;
    }
}
class PrincipleEngineer extends Google
{
    public $PrincipleEngineer = "There are very talented and punctual engineer in the world";
    function display()
    {
        echo $this->PrincipleEngineer;
    }
}
$ob1 = new SoftwareEngineer();
$ob1->display();
$ob2 = new PrincipleEngineer();
$ob2->display();
