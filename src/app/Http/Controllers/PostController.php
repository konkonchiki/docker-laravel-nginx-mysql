<?php

namespace App\Http\Controllers;

public function index() {
    $post = "Hello Laravel !!";
    return view('posts.index', ['post' => $post]);
}

