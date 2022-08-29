<?php

class A
{
    public $message;
 
    // final은 재정의가 불가하다. 특히 재정의할떄
    public final function foo()
    {

    }
}

// class B extends A 
// {
//     public function foo()
//     {

//     }
// }