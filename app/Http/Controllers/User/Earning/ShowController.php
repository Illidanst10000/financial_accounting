<?php

namespace App\Http\Controllers\User\Earning;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Earning;
use App\Models\Source;

class ShowController extends Controller
{
    public function __invoke(Earning $earning)
    {
        return view('user.earning.show', compact('earning'));
    }
}
