<?php

namespace App\Http\Controllers;

use App\Queries\Reservations\ReservationReportQuery;
use App\Queries\Registrations\RegistrationReportQuery;

class SummaryReportController extends Controller
{
    /**
     * Display summary report
     *
     * @return view
     */
    public function __invoke(ReservationReportQuery $reservations, RegistrationReportQuery $registrations)
    {
        return view('reports.index')
            ->with('reservations', $reservations())
            ->with('registrations', $registrations());
    }
}
