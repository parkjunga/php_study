<?php

class A 
{
    // 정의되지 않은 메서드 호출시 호출하는 메서드
    public function __call($name, $args) 
    {
        var_dump($name, $args);
    }

    // 정적메서드 호출시 
    public static function __callStatic($name, $args)
    {
        var_dump($name, $args);
    }

    // invoke는 객체를 함수처럼 실행 
    public function __invoke(...$args)
    {
        var_dump($args);
    }
}

$a = new A();
$a->foo('Hello,world');
//A::foo();
$a('HEllo','args');