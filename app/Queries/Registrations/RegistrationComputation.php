<?php
namespace App\Queries\Registrations;

trait RegistrationComputation
{
    /**
     * Compute daily Registrations
     *
     * @return int
     */
    protected function computeDailyRegistrations()
    {
        return
            // $this->dailyShipperRegistrations +
            $this->dailyDomesticShipperRegistrations +
            $this->dailyInternationalShipperRegistrations +
            $this->dailyConsigneeShipperRegistrations +
            $this->dailyShippingLineRegistrations +
            $this->dailyTruckingRegistrations +
            $this->dailyCustomsBrokerRegistrations +
            $this->dailyWarehouseRegistrations;
    }

    /**
     * Compute weekly Registrations
     *
     * @return int
     */
    protected function computeWeeklyRegistrations()
    {
        return
            // $this->weeklyShipperRegistrations +
            $this->weeklyDomesticShipperRegistrations +
            $this->weeklyInternationalShipperRegistrations +
            $this->weeklyConsigneeShipperRegistrations +
            $this->weeklyShippingLineRegistrations +
            $this->weeklyTruckingRegistrations +
            $this->weeklyCustomsBrokerRegistrations +
            $this->weeklyWarehouseRegistrations;
    }

    /**
     * Compute monthly Registrations
     *
     * @return int
     */
    protected function computeMonthlyRegistrations()
    {
        return
            // $this->monthlyShipperRegistrations +
            $this->monthlyDomesticShipperRegistrations +
            $this->monthlyInternationalShipperRegistrations +
            $this->monthlyConsigneeShipperRegistrations +
            $this->monthlyShippingLineRegistrations +
            $this->monthlyTruckingRegistrations +
            $this->monthlyCustomsBrokerRegistrations +
            $this->monthlyWarehouseRegistrations;
    }

    /**
     * Compute total registrations of all time
     *
     * @return int
     */
    protected function computeTotalRegistrations()
    {
        return
            // $this->totalShipperRegistrations +
            $this->totalDomesticShipperRegistrations +
            $this->totalInternationalShipperRegistrations +
            $this->totalConsigneeShipperRegistrations +
            $this->totalShippingLineRegistrations +
            $this->totalTruckingRegistrations +
            $this->totalCustomsBrokerRegistrations +
            $this->totalWarehouseRegistrations;
    }
}
