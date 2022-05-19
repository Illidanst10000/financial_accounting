<?php

namespace App\Http\Controllers\User\Spending;

use App\Http\Controllers\Controller;
use App\Http\Service\SpendingService;
use App\Models\Category;
use App\Models\Source;
use App\Models\Tag;
use App\Models\Type;

class BaseController extends Controller
{
    public $service;

    public function __construct(SpendingService $service)
    {
        $this->service = $service;
    }
}
