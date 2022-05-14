<?php

namespace App\Http\Controllers\Admin\Earning;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Earning;

class DeleteController extends Controller
{
    public function __invoke(Earning $earning)
    {
        $earning->delete();
        return redirect()->route('admin.earning.index');
    }
}
