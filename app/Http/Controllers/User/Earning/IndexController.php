<?php

namespace App\Http\Controllers\User\Earning;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Earning;
use App\Models\Source;
use App\Models\Type;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke()
    {
        $earnings = auth()->user()->earnings()->get();

        return view('user.earning.index', compact('earnings'));
    }
}
