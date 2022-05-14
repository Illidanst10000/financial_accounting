<?php

namespace App\Http\Controllers\Admin\Earning;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Earning\UpdateRequest;
use App\Models\Category;
use App\Models\Earning;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Earning $earning)
    {
        $data = $request->validated();
        $earning->update($data);
        return redirect()->route('admin.earning.index', compact('earning'));
    }
}
