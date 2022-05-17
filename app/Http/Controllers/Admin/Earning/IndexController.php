<?php

namespace App\Http\Controllers\Admin\Earning;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Earning;
use App\Models\Source;
use App\Models\Type;

class IndexController extends Controller
{
    public function __invoke()
    {
        $earning = Earning::find(1);
        dd($earning->types);
        return view('admin.earning.index', compact('earnings'));
    }
}
