<!-- This is object oriented programming 
its code are more modular and reusable
well organised code
easier to debug
best for medium to large website projects
it work on various MVC Framework
like== codeigniter
Laravel
CakePHP
symfony
Yii
Zend  -->
<?php
class calculation
{
    public $a, $b, $c;
    function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}
$c1 = new calculation();
$c1->a = 20;
$c1->b = 10;
$c2 = new calculation();
$c2->a = 50;
$c2->b = 35;
echo "sum value of c1" . $c1->sum() . "\n<br>";
echo "substraction value of c2" . $c2->sub() . "\n";


?>