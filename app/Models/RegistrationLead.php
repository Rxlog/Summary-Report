<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Shared\DateFilters;

class RegistrationLead extends Model
{
    use DateFilters;


    /**
     * Filter registered shipping line
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeShippingLine($query)
    {
        return $query->where('account_type', 6);
    }
}
