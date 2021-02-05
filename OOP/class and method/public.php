<?php
class girl
{
    public  $lip, $ear;
    function lovegirl()
    {
        echo "Very hot \n" . $this->lip;
    }
}
class romania_girl extends girl
{
    function beautiful()
    {

        echo "beautiful look " . $this->ear;
    }
}
$ob = new romania_girl();
$ob->lip = "kissing look";
$ob->ear = "small";
$ob->beautiful();
$ob->lovegirl();
