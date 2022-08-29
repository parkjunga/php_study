<?php

// 함수가 아님, 외부에 값을 던져준다.
// yield가 있음

function gen()
{
    yield 1;
    yield 2;
    yield 3;
}

$gen = gen();
var_dump($gen->current());
$gen->next();

// foreach ($gen as $number) 
// {
//     var_dump($number);
// }

function gen2()
{
    yield 1;
    yield from gen();
    yield 2;
}

foreach (gen2() as $number) {
    var_dump($number);
}

function gen3()
{
    yield 'message' => 'Hello';
}

foreach (gen3() as $key => $value) {
    var_dump($key, $value);
}

function gen4()
{
    $data = yield;
    yield $data;
}

$gen4 = gen4();

var_dump($gen4->current());
var_dump($gen4->send('Heelo'));
var_dump($gen4->current());

function __range($start, $end, $step = 1)
{
    for ($i=0; $i < $end; $i += $step) {
        yield $i;
    }
}

$s = microtime(true);

foreach (__range(0, 10000) as $number) {} // Generator
foreach(range(0, 10000) as $number) {} // built-in function
var_dump(microtime(true) - $s, memory_get_peak_usage());