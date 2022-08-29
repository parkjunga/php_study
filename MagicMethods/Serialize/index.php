<?php

class A 
{
    private $msg = 'Hello, wolrd';

    public function __sleep()
    {
        return [ 'sayHello' ];
    }

    public function __wakeup()
    {
        var_dump(__METHOD__);
    }
}

$a = new A();

$serialized = serialize($a);
var_dump($serialized);

unserialize($serialized);

// 요즘방식
class B implements Serializable
{
    private $msg = 'TEST';

    public function serialize()
    {
        return serialize($this->msg);
    }

    public function unserialize($serialized)
    {
        $this->msg = unserialize($serialized);
    }
}

$b = new B();

$serialized = serialize($b);
var_dump($serialized);
var_dump(unserialize($serialized));