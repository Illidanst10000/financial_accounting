<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Source;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('admin.main.index');
    }
}
