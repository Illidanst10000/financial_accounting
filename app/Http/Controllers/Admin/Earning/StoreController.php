<?php

namespace App\Http\Controllers\Admin\Earning;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Earning\StoreRequest;
use App\Models\Category;
use App\Models\Earning;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();

        Earning::firstOrCreate($data);
        return redirect()->route('admin.earning.index');
    }
}
