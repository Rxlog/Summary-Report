<?php
namespace App\Queries\Reservations;

use App\Models\ShippingReservation;
use App\Models\ContainerSize;

trait TeuCount
{
    /**
     * Domestic shipping reservations
     */
    protected $dailyDomesticShippingTEUS;
    protected $weeklyDomesticShippingTEUS;
    protected $monthlyDomesticShippingTEUS;
    protected $totalDomesticShippingTEUS;

    /**
     * Domestic shipping reservations
     */
    protected $dailyInternationalShippingTEUS;
    protected $weeklyInternationalShippingTEUS;
    protected $monthlyInternationalShippingTEUS;
    protected $totalInternationalShippingTEUS;

    /**
     * Total TEUS
     */
    protected $dailyTEUS;
    protected $weeklyTEUS;
    protected $monthlyTEUS;
    protected $totalTEUS;

    protected $containerNames;

    protected function initContainerSizes()
    {
        $this->containerNames = ContainerSize::get(['name']);
    }

    protected function initDomesticShippingTeus()
    {
        $domesticShippingReservations = ShippingReservation::domestic()
            ->with('containerSizes')->get(['id', 'created_at']);
        $this->totalDomesticShippingTEUS = $this->countTEUS($domesticShippingReservations);

        $dailyDomesticShippingReservations = getDailyRecords($domesticShippingReservations);
        $this->dailyDomesticShippingTEUS = $this->countTEUS($dailyDomesticShippingReservations);

        $weeklyDomesticShippingReservations = getWeeklyRecords($domesticShippingReservations);
        $this->weeklyDomesticShippingTEUS = $this->countTEUS($weeklyDomesticShippingReservations);

        $monthlyDomesticShippingReservations = getMonthlyRecords($domesticShippingReservations);
        $this->monthlyDomesticShippingTEUS = $this->countTEUS($monthlyDomesticShippingReservations);
    }

    protected function initInternationalShippingTeus()
    {
        $internationalShippingReservations = ShippingReservation::international()
            ->with('containerSizes')->get(['id', 'created_at']);
        $this->totalInternationalShippingTEUS = $this->countTEUS($internationalShippingReservations);

        $dailyInternationalShippingReservations = getDailyRecords($internationalShippingReservations);
        $this->dailyInternationalShippingTEUS = $this->countTEUS($dailyInternationalShippingReservations);

        $weeklyInternationalShippingReservations = getWeeklyRecords($internationalShippingReservations);
        $this->weeklyInternationalShippingTEUS = $this->countTEUS($weeklyInternationalShippingReservations);

        $monthlyInternationalShippingReservations = getMonthlyRecords($internationalShippingReservations);
        $this->monthlyInternationalShippingTEUS = $this->countTEUS($monthlyInternationalShippingReservations);
    }

    /**
     * Init total TEUS transactions
     *
     * @return void
     */
    protected function initTotalTEUS()
    {
        $shippingReservations = ShippingReservation::with('containerSizes')->get(['id', 'created_at']);
        $this->totalTEUS = $this->countTEUS($shippingReservations);

        $dailyShippingReservations = getDailyRecords($shippingReservations);
        $this->dailyTEUS = $this->countTEUS($dailyShippingReservations);

        $weeklyShippingReservations = getWeeklyRecords($shippingReservations);
        $this->weeklyTEUS = $this->countTEUS($weeklyShippingReservations);

        $monthlyShippingReservations = getMonthlyRecords($shippingReservations);
        $this->monthlyTEUS = $this->countTEUS($monthlyShippingReservations);
    }

    /**
     * Count total TEUS based on the given shipping reservation
     *
     * @return interger
     */
    private function countTEUS($reservations)
    {
        $details = ['total_containers' => 0, 'total_teus' => 0];
        $teuPerContainerTypeCount = 0;
        $containerPerTypeCount = 0;

        foreach ($this->containerNames as $container) {
            foreach ($reservations as $reservation) {
                $containerPerTypeCount += $reservation->containerSizes->where('name', $container->name)->count();
                $teuPerContainerTypeCount += $reservation->containerSizes->where('name', $container->name)->sum('teu');
                $details['container_details'][$container->name] = [
                    'containers' => $containerPerTypeCount,
                    'teus' => $teuPerContainerTypeCount,
                ];
            }
            $teuPerContainerTypeCount = $containerPerTypeCount = 0;
        }

        foreach ($reservations as $reservation) {
            $totalTeu = $reservation->containerSizes->sum('teu');
            $totalContainers = $reservation->containerSizes->count();

            $details['total_containers'] += $totalContainers;
            $details['total_teus'] += $totalTeu;

            // foreach ($reservation->containerSizes as $containerSize) {
            //     $details['total_containers'] += 1;
            //     $details['total_teus'] += $containerSize->teu;
            // }
        }

        logger($details);

        return $details;
    }
}
