<?php

namespace App\Http\Controllers\Admin\Spending;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Spending\UpdateRequest;
use App\Models\Category;
use App\Models\Earning;
use App\Models\Spending;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Spending $spending)
    {
        $data = $request->validated();
        $spending->update($data);
        return redirect()->route('admin.spending.index', compact('spending'));
    }
}
