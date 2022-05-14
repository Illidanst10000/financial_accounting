<?php

namespace App\Http\Controllers\Admin\Source;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Source\StoreRequest;
use App\Models\Source;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Source::firstOrCreate($data);
        return redirect()->route('admin.source.index');
    }
}
