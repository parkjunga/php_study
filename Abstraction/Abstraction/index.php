<?php

// 독립적으로 클래스를 사용할 수 없음 
abstract class A 
{
    protected $msg = 'Hello';

    public function sayHello()
    {
        return $this->msg;
    }

    abstract public function foo();
}
// 무조건 상속받아서 써야됨

class B extends A 
{
    public function foo()
    {
        return __CLASS__;
    }
}

$b = new B();
var_dump($b->foo());