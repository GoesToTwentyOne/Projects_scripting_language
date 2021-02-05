

<?php
class Foo
{
    public $name;
    public function Foo()
    {
        return $this->name;
    }
}
class Foo20 extends Foo
{
    function Foo20()
    {
        echo parent::Foo();
        echo "My name is Joy bangla";
    }
}
$obj = new Foo20("Nihad");


?>