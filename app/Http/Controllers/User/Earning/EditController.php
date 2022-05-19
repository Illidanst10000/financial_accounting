<?php

namespace App\Http\Controllers\User\Earning;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Earning;
use App\Models\Source;
use App\Models\Type;

class EditController extends Controller
{
    public function __invoke(Earning $earning)
    {
        $types = Type::all();
        $sources = Source::all();

        return view('user.earning.edit', compact('earning', 'types', 'sources'));
    }
}
