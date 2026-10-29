<?php

namespace App\Controllers;

class Halo extends BaseController
{
    public function sapa($nama = 'Dunia')
    {
        return view('halo_view', ['nama' => $nama]);
    }
}