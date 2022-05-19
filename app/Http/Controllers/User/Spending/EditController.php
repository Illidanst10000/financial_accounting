<?php

namespace App\Http\Controllers\User\Spending;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Earning;
use App\Models\Source;
use App\Models\Spending;
use App\Models\Tag;
use App\Models\Type;

class EditController extends BaseController
{
    public function __invoke(Spending $spending)
    {
        $types = Type::all();
        $tags = Tag::all();
        $categories = Category::all();
        return view('user.spending.edit', compact('spending', 'types', 'tags', 'categories'));
    }
}
