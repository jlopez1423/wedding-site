<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function create() {
        return view('pages.create');
    }
}