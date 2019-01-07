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

    /**
     * Get container sizes name
     *
     * @return void
     */
    protected function initContainerSizes()
    {
        $this->containerNames = ContainerSize::get(['name']);
    }

    /**
     * Initialize domestic shipping reservation TEUS
     *
     * @return void
     */
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

    /**
     * Initialize internation shipping TEUS
     *
     * @return void
     */
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
        $details['container_details'] = $this->perContainerNameTotals($reservations);

        $totalCounts = $this->containerSizesTotals($reservations);
        $details['total_teus'] = $totalCounts['teus'];
        $details['total_containers'] = $totalCounts['containers'];

        return $details;
    }


    /**
     * Get TEU & Container Sizes total count per container size name column
     *
     * @param collection $reservations
     * @return collection
     */
    private function perContainerNameTotals($reservations)
    {
        $details = [];
        $containerPerTypeCount = 0;
        $teuPerContainerTypeCount = 0;

        foreach ($this->containerNames as $container) {
            foreach ($reservations as $reservation) {
                $teuPerContainerTypeCount += $reservation->containerSizes->where('name', $container->name)->sum('teu');
                $containerPerTypeCount += $reservation->containerSizes->where('name', $container->name)->count();
                $details[$container->name] = [
                    'teus' => $teuPerContainerTypeCount,
                    'containers' => $containerPerTypeCount,
                ];
            }
            $teuPerContainerTypeCount = $containerPerTypeCount = 0;
        }

        return $details;
    }


    /**
     * Get TEU & Container Sizes total count
     *
     * @param collection $reservations
     * @return collection
     */
    public function containerSizesTotals($reservations)
    {
        $details = ['teus' => 0, 'containers' => 0];

        foreach ($reservations as $reservation) {
            $totalTeu = $reservation->containerSizes->sum('teu');
            $totalContainers = $reservation->containerSizes->count();

            $details['teus'] += $totalTeu;
            $details['containers'] += $totalContainers;
        }

        return $details;
    }
}
