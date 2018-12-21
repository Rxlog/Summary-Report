<?php
namespace App\Queries\Reservations;

use App\Models\ShippingReservation;
use App\Models\TruckingReservation;
use App\Models\CustomsBrokerReservation;
use App\Models\WarehouseReservation;

trait ReservedCompaniesCount
{
    /**
     * Domestic shipping companies
     */
    protected $dailyDomesticShippingCompanies;
    protected $weeklyDomesticShippingCompanies;
    protected $monthlyDomesticShippingCompanies;
    protected $totalDomesticShippingCompanies;

    /**
     * International shipping companies
     */
    protected $dailyInternationalShippingCompanies;
    protected $weeklyInternationalShippingCompanies;
    protected $monthlyInternationalShippingCompanies;
    protected $totalInternationalShippingCompanies;

    /**
     * Trucking companies
     */
    protected $dailyTruckingCompanies;
    protected $weeklyTruckingCompanies;
    protected $monthlyTruckingCompanies;
    protected $totalTruckingCompanies;

    /**
     * Customs Broker companies
     */
    protected $dailyCustomsBrokerCompanies;
    protected $weeklyCustomsBrokerCompanies;
    protected $monthlyCustomsBrokerCompanies;
    protected $totalCustomsBrokerCompanies;

    /**
     * Count number of companies with shipping reservation
     *
     * @return int
     */
    private function countNumberOfCompanies()
    {
        return ShippingReservation::distinct('shipper_id')->count('shipper_id');
    }

    /**
     * Initialize DOMESTIC shipping companies query/variables
     *
     * @return void
     */
    public function initDomesticShippingCompanies()
    {
        $domestic = ShippingReservation::domestic()->get(['shipper_id', 'created_at']);

        $this->dailyDomesticShippingCompanies = getDailyRecords($domestic)
            ->unique('shipper_id')->count('shipper_id');
        $this->weeklyDomesticShippingCompanies = getWeeklyRecords($domestic)
            ->unique('shipper_id')->count('shipper_id');
        $this->monthlyDomesticShippingCompanies = getMonthlyRecords($domestic)
            ->unique('shipper_id')->count('shipper_id');
        $this->totalDomesticShippingCompanies = $domestic->unique('shipper_id')->count('shipper_id');
    }

    /**
     * Initialize INTERNATIONAL shipping companies query/variables
     *
     * @return void
     */
    public function initInternationalShippingCompanies()
    {
        $international = ShippingReservation::international()->get(['shipper_id', 'created_at']);

        $this->dailyInternationalShippingCompanies = getDailyRecords($international)
            ->unique('shipper_id')->count('shipper_id');
        $this->weeklyInternationalShippingCompanies = getWeeklyRecords($international)
            ->unique('shipper_id')->count('shipper_id');
        $this->monthlyInternationalShippingCompanies = getMonthlyRecords($international)
            ->unique('shipper_id')->count('shipper_id');
        $this->totalInternationalShippingCompanies = $international->unique('shipper_id')->count('shipper_id');
    }

    /**
     * Initialize TRUCKING companies query/variables
     *
     * @return void
     */
    public function initTruckingCompanies()
    {
        $trucking = TruckingReservation::get(['shipper_id', 'created_at']);

        $this->dailyTruckingCompanies = getDailyRecords($trucking)
            ->unique('shipper_id')->count('shipper_id');
        $this->weeklyTruckingCompanies = getWeeklyRecords($trucking)
            ->unique('shipper_id')->count('shipper_id');
        $this->monthlyTruckingCompanies = getMonthlyRecords($trucking)
            ->unique('shipper_id')->count('shipper_id');
        $this->totalTruckingCompanies = $trucking->unique('shipper_id')
            ->count('shipper_id');
    }

    /**
     * Initialize Customs Broker companies query/variables
     *
     * @return void
     */
    public function initCustomsBrokerCompanies()
    {
        $customsBroker = CustomsBrokerReservation::get(['shipper_id', 'created_at']);

        $this->dailyCustomsBrokerCompanies = getDailyRecords($customsBroker)
            ->unique('shipper_id')->count('shipper_id');
        $this->weeklyCustomsBrokerCompanies = getWeeklyRecords($customsBroker)
            ->unique('shipper_id')->count('shipper_id');
        $this->monthlyCustomsBrokerCompanies = getMonthlyRecords($customsBroker)
            ->unique('shipper_id')->count('shipper_id');
        $this->totalCustomsBrokerCompanies = $customsBroker->unique('shipper_id')
            ->count('shipper_id');
    }

    /**
     * Initialize Warehouse companies query/variables
     *
     * @return void
     */
    public function initWarehouseCompanies()
    {
        $warehouse = WarehouseReservation::get(['shipper_id', 'created_at']);

        $this->dailyCustomsBrokerCompanies = getDailyRecords($warehouse)
            ->unique('shipper_id')->count('shipper_id');
        $this->weeklyWarehouseCompanies = getWeeklyRecords($warehouse)
            ->unique('shipper_id')->count('shipper_id');
        $this->monthlyWarehouseCompanies = getMonthlyRecords($warehouse)
            ->unique('shipper_id')->count('shipper_id');
        $this->totalWarehouseCompanies = $warehouse->unique('shipper_id')
            ->count('shipper_id');
    }
}
