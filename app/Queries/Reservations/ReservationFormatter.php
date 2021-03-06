<?php
namespace App\Queries\Reservations;

trait ReservationFormatter
{
    use ReservationCount, TeuCount, ReservedCompaniesCount, ReservationComputation;

    /**
     * Format reservations total
     *
     * @return array
     */
    public function formatReservationTotals()
    {
        return [
            'daily' => $this->computeDailyReservations(),
            'weekly' => $this->computeWeeklyReservations(),
            'monthly' => $this->computeMonthlyReservations(),
            'grand_total' => $this->computeTotalReservations(),
        ];
    }


    /**
     * Format reservation details query
     *
     * @return array
     */
    protected function formatReservationDetails()
    {
        return [
            'domestic' => [
                'label' => 'Shipping (Domestic)',
                'daily' => $this->dailyDomesticShippingReservations,
                'weekly' => $this->weeklyDomesticShippingReservations,
                'monthly' => $this->monthlyDomesticShippingReservations,
                'total' => $this->totalDomesticShippingReservations,
            ],
            'international' => [
                'label' => 'Shipping (International)',
                'daily' => $this->dailyInternationalShippingReservations,
                'weekly' => $this->weeklyInternationalShippingReservations,
                'monthly' => $this->monthlyInternationalShippingReservations,
                'total' => $this->totalInternationalShippingReservations,
            ],
            'trucking' => [
                'label' => 'Trucking',
                'daily' => $this->dailyTruckingReservations,
                'weekly' => $this->weeklyTruckingReservations,
                'monthly' => $this->monthlyTruckingReservations,
                'total' => $this->totalTruckingReservations,
            ],
            'customs_broker' => [
                'label' => 'Customs Broker',
                'daily' => $this->dailyCustomsBrokerReservations,
                'weekly' => $this->weeklyCustomsBrokerReservations,
                'monthly' => $this->monthlyCustomsBrokerReservations,
                'total' => $this->totalCustomsBrokerReservations
            ],
            'warehouse' => [
                'label' => 'Warehouse',
                'daily' => $this->dailyWarehouseReservations,
                'weekly' => $this->weeklyWarehouseReservations,
                'monthly' => $this->monthlyWarehouseReservations,
                'total' => $this->totalWarehouseReservations,
            ]
        ];
    }


    /**
     * Format teus totals
     *
     * @return array
     */
    public function formatTeusTotals()
    {
        return [
            'daily' => $this->dailyTEUS['total_teus'],
            'weekly' => $this->weeklyTEUS['total_teus'],
            'monthly' => $this->monthlyTEUS['total_teus'],
            'grand_total' => $this->totalTEUS['total_teus'],
        ];
    }


    /**
     * Format teus details query
     *
     * @return array
     */
    protected function formatTeusDetails()
    {
        return [
            'domestic' => [
                'label' => 'Shipping (Domestic)',
                'daily' => $this->dailyDomesticShippingTEUS,
                'weekly' => $this->weeklyDomesticShippingTEUS,
                'monthly' => $this->monthlyDomesticShippingTEUS,
                'total' => $this->totalDomesticShippingTEUS,
            ],
            'international' => [
                'label' => 'Shipping (International)',
                'daily' => $this->dailyInternationalShippingTEUS,
                'weekly' => $this->weeklyInternationalShippingTEUS,
                'monthly' => $this->monthlyInternationalShippingTEUS,
                'total' => $this->totalInternationalShippingTEUS,
            ]
        ];
    }


    /**
     * Format companies with reservations details query
     *
     * @return array
     */
    protected function formatCompaniesWithReservation()
    {
        return [
            'domestic' => [
                'label' => 'Shipping (Domestic)',
                'daily' => $this->dailyDomesticShippingCompanies,
                'weekly' => $this->weeklyDomesticShippingCompanies,
                'monthly' => $this->monthlyDomesticShippingCompanies,
                'total' => $this->totalDomesticShippingCompanies
            ],
            'international' => [
                'label' => 'Shipping (International)',
                'daily' => $this->dailyInternationalShippingCompanies,
                'weekly' => $this->weeklyInternationalShippingCompanies,
                'monthly' => $this->monthlyInternationalShippingCompanies,
                'total' => $this->totalDomesticShippingCompanies
            ],
            'trucking' => [
                'label' => 'Trucking',
                'daily' => $this->dailyTruckingCompanies,
                'weekly' => $this->weeklyTruckingCompanies,
                'monthly' => $this->monthlyTruckingCompanies,
                'total' => $this->totalTruckingCompanies,
            ],
            'customs_broker' => [
                'label' => 'Customs Broker',
                'daily' => $this->dailyCustomsBrokerCompanies,
                'weekly' => $this->weeklyCustomsBrokerCompanies,
                'monthly' => $this->monthlyCustomsBrokerCompanies,
                'total' => $this->totalCustomsBrokerCompanies
            ],
            'warehouse' => [
                'label' => 'Warehouse',
                'daily' => $this->dailyCustomsBrokerCompanies,
                'weekly' => $this->weeklyWarehouseCompanies,
                'monthly' => $this->monthlyWarehouseCompanies,
                'total' => $this->totalWarehouseCompanies
            ]
        ];
    }
}
