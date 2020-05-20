<?php

// if repeated suffixes are like following

class User {
    public function favoritesCount() {

    }

    public function watchLaterCount() {

    }

    public function completionCount() {

    }

    public function experienceCount() {

    }
}

(new User())->favoritesCount();

// In this case we can do following

class Stats {
    public function favorites() {

    }

    public function watchLater() {

    }

    public function completion() {

    }

    public function experience() {

    }
}

class User {
    public function stats() {
        return new Stats($this);
    }
}

(new User())->stats()->experience();