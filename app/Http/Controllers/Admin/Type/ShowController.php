<?php

namespace App\Http\Controllers\Admin\Type;

use App\Http\Controllers\Controller;
use App\Models\Source;
use App\Models\Type;

class ShowController extends Controller
{
    public function __invoke(Type $type)
    {
        return view('admin.type.show', compact('type'));
    }
}
