<?php

// 다중 상속을 지원하지 않음 Php, 상속이나 인터페이스도 애매할 경우 사용하는 경우가 많음 
// 지도 사용할떄 특성을 넣을수 있음

// abstract 메서드 가질수 있음 
trait A 
{
    private $msg = 'HEllo, wolrd';

    public function sayHello()
    {
        return $this->msg;
    }
    
    abstract protected function foo();
}

trait AA 
{
    public function sayHello()
    {
        return __TRAIT__;
    }
}

trait AAA 
{
    // A의 sayHello를 사용하겠다.
    use A,AA {
        A::sayHello insteadOf AA;
        A::sayHello as protected h;
    }
}

class B 
{
    use AAA;

    public function foo()
    {
        return __CLASS__;
    }
}

$b = new B();
var_dump($b->sayHello());


class C 
{
    private $msg = 'Hello, wolrd';

    public function sayHello()
    {
        return $this->msg;
    }
}

trait D 
{
    public function sayHello()
    {
        return __TRAIT__;
    }
}

class E extends C 
{
    use D;

    public function sayHello()
    {
        return __CLASS__;
    }
}

$e = new E();
var_dump($e->sayHello()); 
// 이럴경우 재정의 순임 E가 출력되고 E가없을 경우 trait D가 출력되고 없으면 C 가 출력됨