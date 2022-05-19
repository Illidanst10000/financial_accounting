<?php

namespace App\Http\Controllers\Admin\Source;

use App\Http\Controllers\Controller;
use App\Models\Source;

class EditController extends Controller
{
    public function __invoke(Source $source)
    {
        return view('admin.source.edit', compact('source'));
    }
}
