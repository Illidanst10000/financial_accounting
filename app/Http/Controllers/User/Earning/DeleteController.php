<?php

namespace App\Http\Controllers\User\Earning;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Earning;

class DeleteController extends Controller
{
    public function __invoke(Earning $earning)
    {
        $earning->delete();
        return redirect()->route('user.earning.index');
    }
}
