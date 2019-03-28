<?php
namespace App\Queries\Reservations;

class ReservationReportQuery
{
    use ReservationFormatter;

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
        $this->initContainerSizes();
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
            'reservations_total' => $this->formatReservationTotals(),
            'reservation_details' => $this->formatReservationDetails(),
            'teus_total' => $this->formatTeusTotals(),
            'teu_details' => $this->formatTeusDetails(),
            'companies_total' => $this->totalNumberOfCompanies(),
            'company_with_reservations' => $this->formatCompaniesWithReservation()
        ]);
    }
}
