<?php
namespace App\Queries\Registrations;

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
            'registrations_total' => [
                'daily' => $this->computeDailyRegistrations(),
                'weekly' => $this->computeWeeklyRegistrations(),
                'monthly' => $this->computeMonthlyRegistrations(),
                'grand_total' => $this->computeTotalRegistrations()
            ],
            'registration_details' => $this->formatRegistrationDetails()
        ]);
    }
}
