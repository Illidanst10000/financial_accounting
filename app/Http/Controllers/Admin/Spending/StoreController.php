<?php

namespace App\Http\Controllers\Admin\Spending;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Spending\StoreRequest;
use App\Models\Category;
use App\Models\Earning;
use App\Models\Spending;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);
        $spending = Spending::firstOrCreate($data);
        $spending->tags()->attach($tagIds);
        return redirect()->route('admin.spending.index');
    }
}
