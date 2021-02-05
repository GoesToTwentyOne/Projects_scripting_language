<?php
class Whitelook
{
    public $look, $lip, $eye, $heart;
}
class Whitelookdetails extends Whitelook
{
    public $look = "beautiful and i like the Australian Guy ";
    public $lip = "Very mate color uses i like it";
    public $eye = "I don't forget amizing!";
    public $heart = "It holds my life";
}
class Whitelookdisplay extends Whitelookdetails
{
    function display()
    {
        echo $this->look;

        echo $this->lip;
        echo $this->eye;
        echo $this->heart;
    }
}


$ob1 = new Whitelookdisplay();
$ob1->display();
