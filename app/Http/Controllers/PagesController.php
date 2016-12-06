<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function home()
    {
        $people = ['bob', 'dom', 'stom', 'jom', 'lom'];
        return view('welcome')->withPeople($people);
    }

    public function about()
    {
        return view('about');
    }
}
