
<?php
class BaseClass
{
    public function fun()
    {
        echo 'Hiii ';
    }
}
trait myTrait
{
    public function fun()
    {
        parent::fun();
        echo 'John!';
    }
}
class Implementation extends BaseClass
{
    use myTrait;
}

$o = new Implementation();
$o->fun();
?>