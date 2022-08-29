<?php

$message= 'Hello';
$satHello =& $message; // 참고, 이름을 하나 부여함 동일한 이름

$satHello = 'Who are you?';
var_dump($message); 


// Function and Methods
function foo()
{
    $message =& $GLOBALS['message'];
    $message = 'Bye';
}

foo();
var_dump($message);

function foo2(&$message)
{
    $message = 'Hello, world';
}

foo2($message);
var_dump($message);
#foo2('Hello'); // 다이렉트 주입 불가능

class MyClass 
{
    public $message = 'Hello, world2';

    public function &getMessage() 
    {
        return $this->message;
    }
}

$myClass = new MyClass();

$sayHello2 =& $myClass->getMessage();
$satHello2 = 'Bye2';
#var_dump($myClass->message);

$sayHello2 =& $message;
unset($satHello2);

var_dump($message);