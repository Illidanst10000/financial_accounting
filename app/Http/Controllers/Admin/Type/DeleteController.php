<?php

namespace App\Http\Controllers\Admin\Type;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateRequest;
use App\Models\Source;
use App\Models\Type;
use http\Env\Request;

class DeleteController extends Controller
{
    public function __invoke(Type $type)
    {
        $type->delete();
        return redirect()->route('admin.type.index');
    }
}
