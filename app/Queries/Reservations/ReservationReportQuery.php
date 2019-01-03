<?php
namespace App\Queries\Reservations;

use App\Models\ShippingReservation;
use App\Models\TruckingReservation;
use App\Models\CustomsBrokerReservation;
use App\Models\WarehouseReservation;

class ReservationReportQuery
{
    use ReservationCount,
        TeuCount,
        ReservedCompaniesCount,
        ReservationComputation,
        ReservationFormatter;

    /**
     * Initialize reservation counts
     */
    public function __construct()
    {
        /** Initialize reservations */
        $this->initDomesticShippingReservations();
        $this->initInternationalShippingReservations();
        $this->initTruckingReservations();
        $this->initCustomsBrokerReservations();
        $this->initWarehouseReservations();

        /** Initialize TEUS */
        $this->initDomesticShippingTeus();
        $this->initInternationalShippingTeus();
        $this->initTotalTEUS();

        /** Initialize companies */
        $this->initDomesticShippingCompanies();
        $this->initInternationalShippingCompanies();
        $this->initTruckingCompanies();
        $this->initCustomsBrokerCompanies();
        $this->initWarehouseCompanies();
    }

    public function __invoke()
    {
        return collect([
            'reservations_total' => [
                'daily' => $this->computeDailyReservations(),
                'weekly' => $this->computeWeeklyReservations(),
                'monthly' => $this->computeMonthlyReservations(),
                'grand_total' => $this->computeTotalReservations(),
            ],
            'reservation_details' => $this->formatReservationDetails(),
            'teus_total' => [
                'daily' => $this->dailyTEUS['total_teus'],
                'weekly' => $this->weeklyTEUS['total_teus'],
                'monthly' => $this->monthlyTEUS['total_teus'],
                'grand_total' => $this->totalTEUS['total_teus'],
            ],
            'teu_details' => $this->formatTeusDetails(),
            'companies_total' => $this->countNumberOfCompanies(),
            'company_with_reservations' => $this->formatCompaniesWithReservation()
        ]);
    }
}
