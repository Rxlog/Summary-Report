<?php
namespace App\Queries\Registrations;

trait RegistrationFormatter
{
    /**
     * Format registration details query
     *
     * @return array
     */
    protected function formatRegistrationDetails()
    {
        return [
            'shipper_domestic' => [
                'label' => 'Domestic Shipper',
                'daily' => $this->dailyDomesticShipperRegistrations,
                'weekly' => $this->weeklyDomesticShipperRegistrations,
                'monthly' => $this->monthlyDomesticShipperRegistrations,
                'total' => $this->totalDomesticShipperRegistrations
            ],
            'shipper_international' => [
                'label' => 'International Shipper',
                'daily' => $this->dailyInternationalShipperRegistrations,
                'weekly' => $this->weeklyInternationalShipperRegistrations,
                'monthly' => $this->monthlyInternationalShipperRegistrations,
                'total' => $this->totalInternationalShipperRegistrations
            ],
            'shipper_consignee' => [
                'label' => 'Consignee Shipper',
                'daily' => $this->dailyConsigneeShipperRegistrations,
                'weekly' => $this->weeklyConsigneeShipperRegistrations,
                'monthly' => $this->monthlyConsigneeShipperRegistrations,
                'total' => $this->totalConsigneeShipperRegistrations
            ],
            'shipping_line' => [
                'label' => 'Shipping Line',
                'daily' => $this->dailyShippingLineRegistrations,
                'weekly' => $this->weeklyShippingLineRegistrations,
                'monthly' => $this->monthlyShippingLineRegistrations,
                'total' => $this->totalShippingLineRegistrations
            ],
            'trucker' => [
                'label' => 'Trucker',
                'daily' => $this->dailyTruckingRegistrations,
                'weekly' => $this->weeklyTruckingRegistrations,
                'monthly' => $this->monthlyTruckingRegistrations,
                'total' => $this->totalTruckingRegistrations
            ],
            'customs_broker' => [
                'label' => 'Customs Broker',
                'daily' => $this->dailyCustomsBrokerRegistrations,
                'weekly' => $this->weeklyCustomsBrokerRegistrations,
                'monthly' => $this->monthlyCustomsBrokerRegistrations,
                'total' => $this->totalCustomsBrokerRegistrations
            ],
            'warehouse' => [
                'label' => 'Warehouse',
                'daily' => $this->dailyWarehouseRegistrations,
                'weekly' => $this->weeklyWarehouseRegistrations,
                'monthly' => $this->monthlyWarehouseRegistrations,
                'total' => $this->totalWarehouseRegistrations
            ]
        ];
    }
}
