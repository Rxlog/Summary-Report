<?php
namespace App\Queries\Reservations;

trait ReservationComputation
{
    /**
     * Compute daily reservations
     *
     * @return int
     */
    protected function computeDailyReservations()
    {
        return
            $this->dailyDomesticShippingReservations +
            $this->dailyInternationalShippingReservations +
            $this->dailyTruckingReservations +
            $this->dailyCustomsBrokerReservations +
            $this->dailyWarehouseReservations;
    }

    /**
     * Compute weekly reservations
     *
     * @return int
     */
    protected function computeWeeklyReservations()
    {
        return
            $this->weeklyDomesticShippingReservations +
            $this->weeklyInternationalShippingReservations +
            $this->weeklyTruckingReservations +
            $this->weeklyCustomsBrokerReservations +
            $this->weeklyWarehouseReservations;
    }

    /**
     * Compute monthly reservations
     *
     * @return int
     */
    protected function computeMonthlyReservations()
    {
        return
            $this->monthlyDomesticShippingReservations +
            $this->monthlyInternationalShippingReservations +
            $this->monthlyTruckingReservations +
            $this->monthlyCustomsBrokerReservations +
            $this->monthlyWarehouseReservations;
    }

    /**
     * Compute total reservations of all time
     *
     * @return int
     */
    protected function computeTotalReservations()
    {
        return
            $this->totalDomesticShippingReservations +
            $this->totalInternationalShippingReservations +
            $this->totalTruckingReservations +
            $this->totalCustomsBrokerReservations +
            $this->totalWarehouseReservations;
    }
}
