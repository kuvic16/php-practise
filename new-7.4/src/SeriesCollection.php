<?php

use Illuminate\Support\Collection;

class SeriesCollection extends Collection
{
    public function firstByTitle($title)
    {
        return $this->first(function ($series) use ($title) {
            return $series->title === $title;
        });

        //return $this->first(fn ($series) => $series->title ===  $title);
    }
}
