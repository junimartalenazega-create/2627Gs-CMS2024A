<?php
namespace App\Controllers;

class FrameworkDemo extends BaseController
{
    public function index(): string
    {
        return view('framework_demo');
    }
}