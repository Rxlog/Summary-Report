@extends('layouts.app')
@section('content')
    @component('reports.components.report-total')
        @slot('label')
            Reservations
        @endslot

        @slot('daily')
            {{ $reservations['reservations_total']['daily'] }}
        @endslot

        @slot('weekly')
            {{ $reservations['reservations_total']['weekly'] }}
        @endslot

        @slot('monthly')
            {{ $reservations['reservations_total']['monthly'] }}
        @endslot

        @slot('grandTotal')
            {{ $reservations['reservations_total']['grand_total'] }}
        @endslot
    @endcomponent

    @component('reports.components.report-total')
        @slot('label')
            TEUS
        @endslot

        @slot('daily')
            {{ $reservations['teus_total']['daily'] }}
        @endslot

        @slot('weekly')
            {{ $reservations['teus_total']['weekly'] }}
        @endslot

        @slot('monthly')
            {{ $reservations['teus_total']['monthly'] }}
        @endslot

        @slot('grandTotal')
            {{ $reservations['teus_total']['grand_total'] }}
        @endslot
    @endcomponent

    @component('reports.components.report-details')
        @slot('label')
            Reservation details by # of transactions
        @endslot

        @slot('tableBody')
            @foreach($reservations['reservation_details'] as $type => $reservation)
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
            @foreach($reservations['company_with_reservations'] as $type => $companyReservation)
                <tr>
                    @foreach($companyReservation as $companyReservationDetails)
                        <td>{{ $companyReservationDetails }}</td>
                    @endforeach
                </tr>
            @endforeach
        @endslot
    @endcomponent

    <teus-report inline-template>
        <section>
            @component('reports.components.report-details')
                @slot('label')
                    Reservation details by # of TEUS
                @endslot

                @slot('tableBody')
                    @foreach($reservations['teu_details'] as $type => $teu)
                    <tr>
                        @foreach($teu as $teuDetails)
                            <td>
                                @if(is_array($teuDetails))
                                    <a href="#" @click="showDetails(
                                            {{ json_encode($teuDetails) }}
                                        )"
                                        data-toggle="modal"
                                        data-target="#teuContainerDetails"
                                    >{{ $teuDetails['total_teus'] }}</a>
                                @else
                                    {{ $teuDetails }}
                                @endif
                            </td>
                        @endforeach
                    </tr>
                    @endforeach
                @endslot
            @endcomponent

            @include('reports.partials.modal-teu-details')
        </section>
    </teus-report>

    <section class="report-actions">
        <div class="row justify-content-end">
            <a href="{{ route('summary-report') }}" class="btn btn-secondary">
                Back to Summary Report
            </a>
        </div>
    </section>

@endsection
