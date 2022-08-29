<?php

// private, protected 사용 불가 
interface A
{
    public function foo();
}

// interface끼리 확장시에는 Extends를 사용해야됨 

interface AA extends A 
{
    public function sayHello();
}

class B implements A 
{
    public function foo()
    {
        return __CLASS__;
    }
}

$b = new B();