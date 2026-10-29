<?php

namespace App\Controllers;

class Eksplorasi extends BaseController
{
    public function index(): string
    {
        return view('eksplorasi');
    }
}