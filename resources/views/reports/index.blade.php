@extends('layouts.app')
@section('content')
    <section class="reservation shadow-sm">
        @include('reports.partials.reservation-summary')
    </section>
    <section class="registration shadow-sm">
        @include('reports.partials.registration-summary')
    </section>
@endsection
