<?php

class  BookTransformer {
    public function transform()
    {
        return [];
    }
}

class Item {
    public function __construct($transformer)
    {
        
    }
}

$item = new Item(new class BookTransfer{
    public function transform()
    {
        return [];
    }
});