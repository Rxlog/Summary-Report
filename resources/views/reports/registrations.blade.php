@extends('layouts.app')
@section('content')
    @component('reports.components.report-total')
        @slot('label')
            Registrations
        @endslot

        @slot('daily')
            {{ $registrations['overall_total']['daily'] }}
        @endslot

        @slot('weekly')
            {{ $registrations['overall_total']['weekly'] }}
        @endslot

        @slot('monthly')
            {{ $registrations['overall_total']['monthly'] }}
        @endslot

        @slot('grandTotal')
            {{ $registrations['overall_total']['grand_total'] }}
        @endslot
    @endcomponent

    @component('reports.components.report-details')
        @slot('label')
            Registration details by # of registrants
        @endslot

        @slot('tableBody')
            @foreach($registrations['details'] as $type => $registration)
                <tr>
                    @foreach($registration as $registrationDetails)
                        <td>{{ $registrationDetails }}</td>
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
@endsection


