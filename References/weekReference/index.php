<?php

/**
 * WeekReference 내장클래스
 */

// $class = new stdClass(); 배열을 객체로 바꿀때 반환되는 클래스
// $messages = [
//     'sayHello' => 'Hello'
// ];
// var_dump((object) $messages);

// 캐시로 사용할 수도있음
$class = new stdClass();
$weakRef = WeakReference::create($class);
var_dump($weakRef->get());

unset($class);

var_dump($weakRef->get());