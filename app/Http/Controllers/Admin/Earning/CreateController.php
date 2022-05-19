<?php

namespace App\Http\Controllers\Admin\Earning;

use App\Http\Controllers\Controller;
use App\Models\Source;
use App\Models\Type;

class CreateController extends Controller
{
    public function __invoke()
    {
        $types = Type::all();
        $sources = Source::all();
        return view('admin.earning.create', compact('types', 'sources'));
    }
}
