<?php

function deactivate($when = null) {
    $when = $when ?: Carbon::now();
}
$user->deactivate();

function getStripeCustomer($id = null) {
    $id = $id ?: auth()->user()->stripe_id;
}

class Filter {

    public function __construct($oarams = null) {
        $params = $params ?: request()->all();
    }
}

function getFeaturedSeries($ids) {
    $ids = $ids ?: config('laracasts.featured-series');

    Series::findMany($ids);
}