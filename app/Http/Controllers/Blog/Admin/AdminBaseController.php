<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Http\Controllers\Blog\BaseController as MainBaseController;
use Illuminate\Http\Request;

abstract class AdminBaseController extends MainBaseController
{
    public function __constructor()
    {
        $this->middleware('auth');
        $this->middleware('status');

    }
}
