<?php

namespace App\Http\Service;

use App\Models\Spending;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class SpendingService
{
    public function store($data) {
        try {
            DB::beginTransaction();

            if (isset($data['tag_ids'])) {
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            $spending = Spending::firstOrCreate($data);

            if (isset($tagIds)) {
                $spending->tags()->attach($tagIds);
            }

            $userId = auth()->user()->id;
            $spending->users()->attach($userId);

            DB::commit();
        }
        catch (Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update($data, $spending) {
        try {
            DB::beginTransaction();

            if (isset($data['tag_ids'])) {
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            $spending->update($data);

            if (isset($tagIds)) {
                $spending->tags()->sync($tagIds);
            }
            else {
                $spending->tags()->delete();
            }

            DB::commit();
        }
        catch (Exception $exception) {
            DB::rollBack();
            abort(500);
        }

        return $spending;
    }

    public function spendingSum() {
        $userId = auth()->user()->id;
        $spendingSum = DB::table('spendings')
            ->join('user_spending', 'spendings.id', '=', 'user_spending.spending_id')
            ->where('user_id', '=', $userId)
            ->sum('amount');
        return $spendingSum;
    }
}
