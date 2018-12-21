<?php
namespace App\Models\Shared;

trait DateFilters
{
    /**
     * Filter record per day
     *
     * @param Builder $query
     * @param string $date
     * @return Builder
     */
    public function scopeDaily($query, $date = null)
    {
        $date = $date ?? now();

        return $query->whereDate('created_at', $date);
    }

    /**
     * Filter record per week
     *
     * @param Builder $query
     * @param string $date
     * @return Builder
     */
    public function scopeWeekly($query, $date = null)
    {
        $date = $date ?? now();

        return $query->whereBetween('created_at', [
            $date->startOfWeek(), $date->endOfWeek()
        ]);
    }

    /**
     * Filter record per month
     *
     * @param Builder $query
     * @param string $date
     * @return Builder
     */

    public function scopeMonthly($query, $date = null)
    {
        $date = $date ?? now();

        return $query->whereMonth('created_at', '=', $date->month);
    }
}
