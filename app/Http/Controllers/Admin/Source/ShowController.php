<?php

namespace App\Http\Controllers\Admin\Source;

use App\Http\Controllers\Controller;
use App\Models\Source;

class ShowController extends Controller
{
    public function __invoke(Source $source)
    {
        return view('admin.source.show', compact('source'));
    }
}
