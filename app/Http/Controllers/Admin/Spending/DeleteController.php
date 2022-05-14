<?php

namespace App\Http\Controllers\Admin\Spending;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Earning;
use App\Models\Spending;

class DeleteController extends Controller
{
    public function __invoke(Spending $spending)
    {
        $spending->delete();
        return redirect()->route('admin.spending.index');
    }
}
