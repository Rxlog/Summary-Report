<div class="row">
    <div class="col-md-12 d-flex justify-content-between">
        <h1>Reservation Report</h1>
        <span>
            <a class="btn btn-dark" href="{{ route('reservation-report') }}">
                View Details
            </a>
        </span>
    </div>
    <div class="col-md-12">
        <hr>
    </div>
</div>
<div class="row justify-content-center mb-3">
    <div class="col-md-3">
        <div class="card text-white bg-dark">
            <div class="card-header d-flex justify-content-center">
                <strong>GRAND TOTAL</strong>
            </div>
            <div class="card-body">
                <h2 class="card-title d-flex justify-content-center">
                    <count-number to="{{
                        $reservations['overall_total']['grand_total']
                    }}"></count-number>
                </h2>
                <p class="d-flex justify-content-center">
                    Total # of companies:
                    <span class="ml-1">
                        <count-number to="{{
                            $reservations['companies_total']}}"
                        ></count-number>
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center mb-3">
    <div class="col-md-3">
        <div class="card text-white bg-primary">
            <div class="card-header d-flex justify-content-center">
                Shipping (International)
            </div>
            <div class="card-body">
                <h2 class="card-title d-flex justify-content-center">
                    <count-number to="{{
                        $reservations['details']['international']['total']
                    }}"></count-number>
                </h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-primary">
            <div class="card-header d-flex justify-content-center">
                Shipping (Domestic)
            </div>
            <div class="card-body">
                <h2 class="card-title d-flex justify-content-center">
                    <count-number to="{{
                        $reservations['details']['domestic']['total']
                    }}"></count-number>
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-3">
        <div class="card text-white bg-primary">
            <div class="card-header d-flex justify-content-center">
                Trucking
            </div>
            <div class="card-body">
                <h2 class="card-title d-flex justify-content-center">
                    <count-number to="{{
                            $reservations['details']['trucking']['total']
                        }}"></count-number>
                </h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-primary">
            <div class="card-header d-flex justify-content-center">
                Customs Broker
            </div>
            <div class="card-body">
                <h2 class="card-title d-flex justify-content-center">
                    <count-number to="{{
                        $reservations['details']['customs_broker']['total']
                    }}"></count-number>
                </h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-primary">
            <div class="card-header d-flex justify-content-center">
                Warehouse
            </div>
            <div class="card-body">
                <h2 class="card-title d-flex justify-content-center">
                    <count-number to="{{
                        $reservations['details']['warehouse']['total']
                    }}"></count-number>
                </h2>
            </div>
        </div>
    </div>
</div>
