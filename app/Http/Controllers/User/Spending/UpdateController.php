<?php

namespace App\Http\Controllers\User\Spending;

use App\Http\Requests\User\Spending\UpdateRequest;
use App\Models\Spending;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Spending $spending)
    {
        $data = $request->validated();

        $this->service->update($data, $spending);

        return redirect()->route('user.spending.index', compact('spending'));
    }
}
