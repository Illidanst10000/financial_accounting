<?php

namespace App\Http\Controllers\Admin\Source;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Source\UpdateRequest;
use App\Models\Source;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Source $source)
    {
        $data = $request->validated();
        $source->update($data);
        return redirect()->route('admin.source.index', compact('source'));
    }
}
