<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Shared\DateFilters;

class ShippingReservation extends Model
{
    use DateFilters;

    /**
     * Filter domestic shipping reservation
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeDomestic($query)
    {
        return $query->whereNull('export_reservation_event_status_id');
    }

    /**
     * Filter international shipping resrvation
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeInternational($query)
    {
        return $query->whereNull('domestic_reservation_event_status_id');
    }

    /**
     * Shipping reservation belongs to a shipper
     *
     * @return BelongsTo
     */
    public function shipper()
    {
        return $this->belongsTo(Shipper::class);
    }

    /**
     * The container sizes associated to the shipping reservation.
     *
     * @return belongsToMany
     */
    public function containerSizes()
    {
        return $this->belongsToMany(ContainerSize::class)
            ->withPivot('rate', 'quantity', 'bid_rate');
    }
}
