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
        $earnings = Earning::all();
        return view('admin.earning.index', compact('earnings'));
    }
}
