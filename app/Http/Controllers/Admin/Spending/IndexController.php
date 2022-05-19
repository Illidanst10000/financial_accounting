<?php

namespace App\Http\Controllers\Admin\Spending;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Earning;
use App\Models\Source;
use App\Models\Spending;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $spendings = Spending::all();

        return view('admin.spending.index', compact('spendings'));
    }
}
