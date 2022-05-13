<?php

namespace App\Http\Controllers\Admin\Source;

use App\Http\Controllers\Controller;
use App\Models\Source;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.source.create');
    }
}
