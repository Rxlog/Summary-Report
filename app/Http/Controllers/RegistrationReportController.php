<?php

namespace App\Http\Controllers;

use App\Queries\Registrations\RegistrationReportQuery;

class RegistrationReportController extends Controller
{
    public function __invoke(RegistrationReportQuery $registrations)
    {
        return view('reports.registrations')->with('registrations', $registrations());
    }
}
