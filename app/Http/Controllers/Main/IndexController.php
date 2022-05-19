<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Service\EarningService;
use App\Http\Service\SpendingService;
use App\Models\Source;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke()
    {

        $spendingSum = (new SpendingService())->spendingSum();
        $earningSum = (new EarningService())->earningSum();

        return view('main.index', compact('earningSum', 'spendingSum'));
    }
}
