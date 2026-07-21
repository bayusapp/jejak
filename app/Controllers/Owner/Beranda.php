<?php

namespace App\Controllers\Owner;

use App\Controllers\BaseController;

class Beranda extends BaseController
{

  public function index()
  {
    return view('owner/beranda/index');
  }
}
