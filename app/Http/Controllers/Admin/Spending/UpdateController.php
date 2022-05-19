<?php

namespace App\Http\Controllers\Admin\Spending;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Spending\UpdateRequest;
use App\Models\Spending;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Spending $spending)
    {
        $data = $request->validated();

        $this->service->update($data, $spending);

        return redirect()->route('admin.spending.index', compact('spending'));
    }
}
