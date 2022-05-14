<?php

namespace App\Http\Controllers\Admin\Spending;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Source;
use App\Models\Tag;
use App\Models\Type;

class CreateController extends Controller
{
    public function __invoke()
    {
        $types = Type::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.spending.create', compact('types', 'categories', 'tags'));
    }
}
