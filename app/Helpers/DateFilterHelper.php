<?php

/**
 * Filter records per day
 *
 * @param collection $collection
 * @param string $date
 * @return Builder
 */
if (!function_exists('getDailyRecords')) {
    function getDailyRecords($collection, $date = null)
    {
        return $collection->filter(function ($record) use ($date) {
            $date = $date ?? now();
            return $record->created_at->toDateString() === $date->toDateString();
        });
    }
}

/**
 * Filter record per week
 *
 * @param collection $collection
 * @param string $date
 * @return Builder
 */
if (!function_exists('getWeeklyRecords')) {
    function getWeeklyRecords($collection, $date = null)
    {
        return $collection->filter(function ($record) use ($date) {
            $date = $date ?? now();
            return $record->created_at >= $date->startOfWeek()
                && $record->created_at <= $date->endOfWeek();
        });
    }
}

/**
 * Filter record per month
 *
 * @param collection $collection
 * @param string $date
 * @return Builder
 */
if (!function_exists('getMonthlyRecords')) {
    function getMonthlyRecords($collection, $date = null)
    {
        return $collection->filter(function ($record) use ($date) {
            $date = $date ?? now()->month;
            return $record->created_at->month === $date;
        });
    }
}
