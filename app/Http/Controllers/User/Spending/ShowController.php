<?php

namespace App\Http\Controllers\User\Spending;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Earning;
use App\Models\Source;
use App\Models\Spending;

class ShowController extends BaseController
{
    public function __invoke(Spending $spending)
    {
        return view('user.spending.show', compact('spending'));
    }
}
