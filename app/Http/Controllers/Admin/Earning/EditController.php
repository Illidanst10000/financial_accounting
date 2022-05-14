<?php

namespace App\Http\Controllers\Admin\Earning;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Earning;
use App\Models\Source;

class EditController extends Controller
{
    public function __invoke(Earning $earning)
    {
        return view('admin.earning.edit', compact('earning'));
    }
}
