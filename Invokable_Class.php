<?php

class Example {
    
    function __invoke() {
        return 'hello world';
    }
}

Route::get('/', function() {
    $example = new Example;
    return $example();
});

Route::get('/', function(Example $example) {
    return $example();
});

$example = new Example;
var_dump($example());


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

    function __invoke() {
        return "Home controller action";
    }
}
Route::get('/', 'HomeController');


namespace App\Queries;

class FeatureCollectionQuery {
    public function __invoke() {
        dd('Consuming invoke method');
    }
    
    public function run() {
        dd('Running the complex query');
    }
}

namespace App\Http\Controllers;

use App\Queries\FeatureCollectionQuery;

class ApiController extends Controller {
    function __invoke(FeatureCollectionQuery $featureCollection) {
        $featureCollection();
        $featureCollection->run();
    }
}