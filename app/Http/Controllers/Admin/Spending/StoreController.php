<?php

namespace App\Http\Controllers\Admin\Spending;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Spending\StoreRequest;
use App\Models\Category;
use App\Models\Earning;
use App\Models\Spending;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('admin.spending.index');
    }
}
