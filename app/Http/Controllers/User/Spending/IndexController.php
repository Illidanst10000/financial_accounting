<?php

namespace App\Http\Controllers\User\Spending;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Earning;
use App\Models\Source;
use App\Models\Spending;
use Illuminate\Support\Facades\DB;

class IndexController extends BaseController
{
    public function __invoke()
    {
           $spendings = auth()->user()->spendings()->get();

        return view('user.spending.index', compact('spendings'));
    }
}
