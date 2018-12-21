<?php
namespace App\Queries\Registrations;

use App\Models\Shipper;
use App\Models\Trucker;
use App\Models\CustomsBroker;
use App\Models\Warehouse;
use App\Models\RegistrationLead;

class RegistrationReportQuery
{
    use RegistrationCount, RegistrationComputation, RegistrationFormatter;

    /**
     * Initialize registration counts
     */
    public function __construct()
    {
        $this->initShippingRegistrations();
        $this->initShippingLineRegistrations();
        $this->initTruckingRegistrations();
        $this->initCustomsBrokerRegistrations();
        $this->initWarehouseRegistrations();
    }

    public function __invoke()
    {
        return collect([
            'overall_total' => [
                'daily' => $this->computeDailyRegistrations(),
                'weekly' => $this->computeWeeklyRegistrations(),
                'monthly' => $this->computeMonthlyRegistrations(),
                'grand_total' => $this->computeTotalRegistrations()
            ],
            'details' => $this->formatRegistrationDetails()
        ]);
    }
}
