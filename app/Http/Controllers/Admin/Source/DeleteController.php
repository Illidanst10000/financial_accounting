<?php

namespace App\Http\Controllers\Admin\Source;

use App\Http\Controllers\Controller;
use App\Models\Source;

class DeleteController extends Controller
{
    public function __invoke(Source $source)
    {
        $source->delete();
        return redirect()->route('admin.source.index');
    }
}
