<?php

namespace App\Http\Controllers\Admin\Type;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateRequest;
use App\Models\Source;
use App\Models\Type;
use http\Env\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Type $type)
    {
        $data = $request->validated();
        $type->update($data);
        return redirect()->route('admin.type.index', compact('type'));
    }
}
