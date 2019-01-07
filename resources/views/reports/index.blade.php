@extends('layouts.app')
@section('content')
    <section class="reservation">
        <div class="row">
            <div class="col-sm-6">
                @include('reports.partials.reservation-summary')
            </div>
            <div class="col-sm-6">
                @include('reports.partials.registration-summary')
            </div>
        </div>
    </section>
@endsection
