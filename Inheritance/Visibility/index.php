<?php

// 가시성 

class A 
{
    public $public = 'public';
    protected $protected = 'protected';
    private $private = 'private'; // 내부에서만 접근 가능
}
$a = new A();

class B extends A 
{
    private $mest = 'Hello, msg';

    public function foo()
    {
        return $this->protected;

        $this->mest;
    }
}

$b = new B();
var_dump($b->foo());