<?php

function dumpAll(array $items)
{
    foreach ($items as $item) {
        var_dump($item);
    }
}

function dumpAll1(iterable $items)
{
    foreach ($items as $item) {
        var_dump($item);
    }
}

class Collection implements IteratorAggregate
{
    protected $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }
}

//dumpAll(['one', 'two', 'three']);

$collection = new Collection(['one', 'two', 'three']);

// dumpAll($collection); it will fail because method accepts only array not object
dumpAll1($collection); // but iterable will accept the object
