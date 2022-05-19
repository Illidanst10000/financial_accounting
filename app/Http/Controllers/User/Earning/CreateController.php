<?php

namespace App\Http\Controllers\User\Earning;

use App\Http\Controllers\Controller;
use App\Models\Source;
use App\Models\Type;

class CreateController extends Controller
{
    public function __invoke()
    {
        $types = Type::all();
        $sources = Source::all();
        return view('user.earning.create', compact('types', 'sources'));
    }
}
