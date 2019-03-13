<?php

namespace App\Http\Controllers;

use App\Queries\Reservations\ReservationReportQuery;

class ReservationReportController extends Controller
{
    public function __invoke(ReservationReportQuery $reservations)
    {
        return view('reports.reservations')->with('reservations', $reservations());
    }
}
