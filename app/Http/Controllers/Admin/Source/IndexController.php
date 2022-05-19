<?php

namespace App\Http\Controllers\Admin\Source;

use App\Http\Controllers\Controller;
use App\Models\Source;

class IndexController extends Controller
{
    public function __invoke()
    {
        $sources = Source::all();
        return view('admin.source.index', compact('sources'));
    }
}
