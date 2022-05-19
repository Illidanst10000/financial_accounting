<?php

namespace App\Http\Service;

use App\Models\Spending;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class EarningService
{
    public function earningSum() {
        $userId = auth()->user()->id;
        $earningSum = DB::table('earnings')
            ->join('user_earning', 'earnings.id', '=', 'user_earning.earning_id')
            ->where('user_id', '=', $userId)
            ->sum('amount');
        return $earningSum;
    }
}
