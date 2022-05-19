<?php

namespace App\Http\Controllers\User\Spending;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Earning;
use App\Models\Spending;

class DeleteController extends BaseController
{
    public function __invoke(Spending $spending)
    {
        $spending->delete();
        return redirect()->route('user.spending.index');
    }
}
