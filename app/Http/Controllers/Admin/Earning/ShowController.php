<?php

namespace App\Http\Controllers\Admin\Earning;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Earning;
use App\Models\Source;

class ShowController extends Controller
{
    public function __invoke(Earning $earning)
    {
        return view('admin.earning.show', compact('earning'));
    }
}
