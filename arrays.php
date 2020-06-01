<?php

/**
 * Post class
 */
class Post
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var boolean
     */
    public $published;

    /**
     * Initialize the class
     */
    public function __construct($title, $published)
    {
        $this->title     = $title;
        $this->published = $published;
    }
}


$posts = [
    new Post('This is my first post', true),
    new Post('This is my 2 post', false),
    new Post('This is my 3 post', true),
    new Post('This is my 4 post', false),
    new Post('This is my 5 post', true),
];

//var_dump($posts);

$unpublishedPost = array_filter($posts, function ($post) {
    return !$post->published;
});
//var_dump($unpublishedPost);

$modified = array_map(function ($post) {
    $post->test = true;
    return $post;
}, $posts);

$modified = array_map(function ($post) {
    return (array) $post;
}, $posts);

$modified = array_map(function ($post) {
    return ['new_title' => $post->title];
}, $posts);
//var_dump($modified);

$titles = array_map(function ($post) {
    return ["title" => $post->title];
}, $posts);
// var_dump($titles);

$titles = array_column($posts, 'title');
var_dump($titles);
