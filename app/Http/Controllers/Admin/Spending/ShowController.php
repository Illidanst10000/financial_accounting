<?php

namespace App\Http\Controllers\Admin\Spending;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Earning;
use App\Models\Source;
use App\Models\Spending;

class ShowController extends BaseController
{
    public function __invoke(Spending $spending)
    {
        return view('admin.spending.show', compact('spending'));
    }
}
