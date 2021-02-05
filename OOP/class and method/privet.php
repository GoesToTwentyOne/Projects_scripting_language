<?php
class camera
{
    public   $lens;
    private $f;
    function camerainfo()
    {
        echo "Lens is " . $this->lens;
    }
}
class camera1 extends camera
{
    function camera1info()
    {
        echo "focus of :" . $this->f;
    }
}
$ob = new camera1();
$ob->lens = "20px";
$ob->f = "focus 20";
$ob->camerainfo();
$ob->camera1info();
