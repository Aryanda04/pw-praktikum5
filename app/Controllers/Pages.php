<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('pages/home', $data);
    }

    public function detail()
    {
        $data = [
            'title' => 'Details',
        ];
        return view('pages/detail', $data);
    }
}
