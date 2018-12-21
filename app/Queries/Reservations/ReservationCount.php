<?php
namespace App\Queries\Reservations;

use App\Models\ShippingReservation;
use App\Models\TruckingReservation;
use App\Models\CustomsBrokerReservation;
use App\Models\WarehouseReservation;

trait ReservationCount
{
    /**
     * Domestic shipping reservations
     */
    protected $dailyDomesticShippingReservations;
    protected $weeklyDomesticShippingReservations;
    protected $monthlyDomesticShippingReservations;
    protected $totalDomesticShippingReservations;

    /**
     * International shipping reservations
     */
    protected $dailyInternationalShippingReservations;
    protected $weeklyInternationalShippingReservations;
    protected $monthlyInternationalShippingReservations;
    protected $totalInternationalShippingReservations;

    /**
     * Trucking reservations
     */
    protected $dailyTruckingReservations;
    protected $weeklyTruckingReservations;
    protected $monthlyTruckingReservations;
    protected $totalTruckingReservations;

    /**
     * Customs broker reservations
     */
    protected $dailyCustomsBrokerReservations;
    protected $weeklyCustomsBrokerReservations;
    protected $monthlyCustomsBrokerReservations;
    protected $totalCustomsBrokerReservations;

    /**
     * Warehouse reservations
     */
    protected $dailyWarehouseReservations;
    protected $weeklyWarehouseReservations;
    protected $monthlyWarehouseReservations;
    protected $totalWarehouseReservations;

    /**
     * Initialize DOMESTIC shipping reservations query/variables
     *
     * @return void
     */
    protected function initDomesticShippingReservations()
    {
        $domestic = ShippingReservation::domestic()->get(['created_at']);

        $this->dailyDomesticShippingReservations = getDailyRecords($domestic)->count();
        $this->weeklyDomesticShippingReservations = getWeeklyRecords($domestic)->count();
        $this->monthlyDomesticShippingReservations = getMonthlyRecords($domestic)->count();
        $this->totalDomesticShippingReservations = $domestic->count();
    }

    /**
     * Initialize INTERNATIONAL shipping reservations query/variables
     *
     * @return void
     */
    protected function initInternationalShippingReservations()
    {
        $international = ShippingReservation::international()->get(['created_at']);

        $this->dailyInternationalShippingReservations = getDailyRecords($international)->count();
        $this->weeklyInternationalShippingReservations = getWeeklyRecords($international)->count();
        $this->monthlyInternationalShippingReservations = getMonthlyRecords($international)->count();
        $this->totalInternationalShippingReservations = $international->count();
    }

    /**
     * Initialize trucking reservations query/variables
     *
     * @return void
     */
    protected function initTruckingReservations()
    {
        $trucking = TruckingReservation::get(['created_at']);

        $this->dailyTruckingReservations = getDailyRecords($trucking)->count();
        $this->weeklyTruckingReservations = getWeeklyRecords($trucking)->count();
        $this->monthlyTruckingReservations = getMonthlyRecords($trucking)->count();
        $this->totalTruckingReservations = $trucking->count();
    }

    /**
     * Initialize customs broker reservations
     *
     * @return void
     */
    protected function initCustomsBrokerReservations()
    {
        $customsBroker = CustomsBrokerReservation::get(['created_at']);

        $this->dailyCustomsBrokerReservations = getDailyRecords($customsBroker)->count();
        $this->weeklyCustomsBrokerReservations = getWeeklyRecords($customsBroker)->count();
        $this->monthlyCustomsBrokerReservations = getMonthlyRecords($customsBroker)->count();
        $this->totalCustomsBrokerReservations = $customsBroker->count();
    }

    /**
     * Initialize warehouse reservations
     *
     * @return void
     */
    protected function initWarehouseReservations()
    {
        $warehouse = WarehouseReservation::get(['created_at']);

        $this->dailyWarehouseReservations = getDailyRecords($warehouse)->count();
        $this->weeklyWarehouseReservations = getWeeklyRecords($warehouse)->count();
        $this->monthlyWarehouseReservations = getMonthlyRecords($warehouse)->count();
        $this->totalWarehouseReservations = $warehouse->count();
    }
}
