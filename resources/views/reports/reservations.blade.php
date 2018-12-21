@extends('layouts.app')
@section('content')
    @component('reports.components.report-total')
        @slot('label')
            Reservations
        @endslot

        @slot('daily')
            {{ $reports['reservations_total']['daily'] }}
        @endslot

        @slot('weekly')
            {{ $reports['reservations_total']['weekly'] }}
        @endslot

        @slot('monthly')
            {{ $reports['reservations_total']['monthly'] }}
        @endslot

        @slot('grandTotal')
            {{ $reports['reservations_total']['grand_total'] }}
        @endslot
    @endcomponent

    @component('reports.components.report-total')
        @slot('label')
            TEUS
        @endslot

        @slot('daily')
            {{ $reports['teus_total']['daily'] }}
        @endslot

        @slot('weekly')
            {{ $reports['teus_total']['weekly'] }}
        @endslot

        @slot('monthly')
            {{ $reports['teus_total']['monthly'] }}
        @endslot

        @slot('grandTotal')
            {{ $reports['teus_total']['grand_total'] }}
        @endslot
    @endcomponent

    @component('reports.components.report-details')
        @slot('label')
            Reservation details by # of transactions
        @endslot

        @slot('tableBody')
            @foreach($reports['reservation_details'] as $type => $reservation)
                <tr>
                    @foreach($reservation as $reservationDetails)
                        <td>{{ $reservationDetails }}</td>
                    @endforeach
                </tr>
            @endforeach
        @endslot
    @endcomponent

    @component('reports.components.report-details')
        @slot('label')
            Reservation details by # of companies
        @endslot

        @slot('tableBody')
            @foreach($reports['company_with_reservations'] as $type => $companyReservation)
                <tr>
                    @foreach($companyReservation as $companyReservationDetails)
                        <td>{{ $companyReservationDetails }}</td>
                    @endforeach
                </tr>
            @endforeach
        @endslot
    @endcomponent

    @component('reports.components.report-details')
        @slot('label')
            Reservation details by # of TEUS
        @endslot

        @slot('tableBody')
            @foreach($reports['teu_details'] as $type => $teu)
                <tr>
                    @foreach($teu as $teuDetails)
                        <td>
                            <a href="#" data-toggle="modal"
                                data-target="#teuContainerDetails">
                                {{ $teuDetails['total_teus'] ?? $teuDetails }}
                                {{-- <input type="hidden" value="{{ is_array($teuDetails) ? json_encode($teuDetails) : $teuDetails }}"> --}}
                            </a>
                        </td>
                    @endforeach
                </tr>
            @endforeach
        @endslot
    @endcomponent

    <section class="report-actions">
        <div class="row justify-content-end">
            <a href="{{ route('summary-report') }}" class="btn btn-secondary">
                Back to Summary Report
            </a>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="teuContainerDetails" tabindex="-1" role="dialog" aria-labelledby="teuContainerDetailsTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="teuContainerDetailsTitle">
                        TEU details
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                </div>
                <div class="modal-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Type</th>
                                <th scope="col">TEU points</th>
                                <th scope="col"># of Containers</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
