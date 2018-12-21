<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Shared\DateFilters;

class Shipper extends Model
{
    use DateFilters;

    /**
     * Filter by domestic shipper
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeDomestic($query)
    {
        return $query->where('domestic_status', '>=', 0);
    }

    /**
     * Filter by international shipper
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeInternational($query)
    {
        return $query->where('shipper_status', '>=', 0);
    }

    /**
     * Filter by consignee
     *
     * @param Builder $query
     * @return void
     */
    public function scopeConsignee($query)
    {
        return $query->where('consignee_status', '>=', 0);
    }
}
