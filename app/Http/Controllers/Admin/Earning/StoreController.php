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

        $earning = Earning::firstOrCreate($data);
        $userId = auth()->user()->id;
        $earning->users()->attach($userId);
        return redirect()->route('admin.earning.index');
    }
}
