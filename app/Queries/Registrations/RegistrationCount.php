<?php
namespace App\Queries\Registrations;

use App\Models\Shipper;
use App\Models\RegistrationLead;
use App\Models\Trucker;
use App\Models\CustomsBroker;
use App\Models\Warehouse;

trait RegistrationCount
{
    /**
     * Daily shipper registrations
     */
    protected $dailyDomesticShipperRegistrations;
    protected $weeklyDomesticShipperRegistrations;
    protected $monthlyDomesticShipperRegistrations;
    protected $totalDomesticShipperRegistrations;

    protected $dailyInternationalShipperRegistrations;
    protected $weeklyInternationalShipperRegistrations;
    protected $monthlyInternationalShipperRegistrations;
    protected $totalInternationalShipperRegistrations;

    protected $dailyConsigneeShipperRegistrations;
    protected $weeklyConsigneeShipperRegistrations;
    protected $monthlyConsigneeShipperRegistrations;
    protected $totalConsigneeShipperRegistrations;

    /**
     * Daily shipping line registrations
     */
    protected $dailyShippingLineRegistrations;
    protected $weeklyShippingLineRegistrations;
    protected $monthlyShippingLineRegistrations;
    protected $totalShippingLineRegistrations;

    /**
     * Monthly trucker registrations
     */
    protected $dailyTruckingRegistrations;
    protected $weeklyTruckingRegistrations;
    protected $monthlyTruckingRegistrations;
    protected $totalTruckingRegistrations;

    /**
     * Customs broker reservations
     */
    protected $dailyCustomsBrokerRegistrations;
    protected $weeklyCustomsBrokerRegistrations;
    protected $monthlyCustomsBrokerRegistrations;
    protected $totalCustomsBrokerRegistrations;

    /**
     * Warehouse reservations
     */
    protected $dailyWarehouseRegistrations;
    protected $weeklyWarehouseRegistrations;
    protected $monthlyWarehouseRegistrations;
    protected $totalWarehouseRegistrations;

    /**
     * Initialize shipping registrations query/variables
     *
     * @return void
     */
    protected function initShippingRegistrations()
    {
        $domesticShippers = Shipper::domestic()->get(['created_at']);
        $this->dailyDomesticShipperRegistrations = getDailyRecords($domesticShippers)->count();
        $this->weeklyDomesticShipperRegistrations = getWeeklyRecords($domesticShippers)->count();
        $this->monthlyDomesticShipperRegistrations = getMonthlyRecords($domesticShippers)->count();
        $this->totalDomesticShipperRegistrations = $domesticShippers->count();

        $internationalShippers = Shipper::international()->get(['created_at']);
        $this->dailyInternationalShipperRegistrations = getDailyRecords($internationalShippers)->count();
        $this->weeklyInternationalShipperRegistrations = getWeeklyRecords($internationalShippers)->count();
        $this->monthlyInternationalShipperRegistrations = getMonthlyRecords($internationalShippers)->count();
        $this->totalInternationalShipperRegistrations = $internationalShippers->count();

        $consigneeShippers = Shipper::consignee()->get(['created_at']);
        $this->dailyConsigneeShipperRegistrations = getDailyRecords($consigneeShippers)->count();
        $this->weeklyConsigneeShipperRegistrations = getWeeklyRecords($consigneeShippers)->count();
        $this->monthlyConsigneeShipperRegistrations = getMonthlyRecords($consigneeShippers)->count();
        $this->totalConsigneeShipperRegistrations = $consigneeShippers->count();
    }

    /**
     * Initialize shipping line registrations query/variables
     *
     * @return void
     */
    protected function initShippingLineRegistrations()
    {
        $shippingLines = RegistrationLead::shippingLine()->get(['created_at']);

        $this->dailyShippingLineRegistrations = getDailyRecords($shippingLines)->count();
        $this->weeklyShippingLineRegistrations = getWeeklyRecords($shippingLines)->count();
        $this->monthlyShippingLineRegistrations = getMonthlyRecords($shippingLines)->count();
        $this->totalShippingLineRegistrations = $shippingLines->count();
    }

    /**
     * Initialize trucking registrations query/variables
     *
     * @return void
     */
    protected function initTruckingRegistrations()
    {
        $truckers = Trucker::get(['created_at']);

        $this->dailyTruckingRegistrations = getDailyRecords($truckers)->count();
        $this->weeklyTruckingRegistrations = getWeeklyRecords($truckers)->count();
        $this->monthlyTruckingRegistrations = getMonthlyRecords($truckers)->count();
        $this->totalTruckingRegistrations = $truckers->count();
    }

    /**
     * Initialize customs broker registrations query/variables
     *
     * @return void
     */
    protected function initCustomsBrokerRegistrations()
    {
        $customsBrokers = CustomsBroker::get(['created_at']);

        $this->dailyCustomsBrokerRegistrations = getDailyRecords($customsBrokers)->count();
        $this->weeklyCustomsBrokerRegistrations = getWeeklyRecords($customsBrokers)->count();
        $this->monthlyCustomsBrokerRegistrations = getMonthlyRecords($customsBrokers)->count();
        $this->totalCustomsBrokerRegistrations = $customsBrokers->count();
    }

    /**
     * Initialize warehouse registrations query/variables
     *
     * @return void
     */
    protected function initWarehouseRegistrations()
    {
        $warehouses = Warehouse::get(['created_at']);

        $this->dailyWarehouseRegistrations = getDailyRecords($warehouses)->count();
        $this->weeklyWarehouseRegistrations = getWeeklyRecords($warehouses)->count();
        $this->monthlyWarehouseRegistrations = getMonthlyRecords($warehouses)->count();
        $this->totalWarehouseRegistrations = $warehouses->count();
    }
}
