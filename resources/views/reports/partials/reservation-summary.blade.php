<div class="row summary-report__header">
    <div class="col-md-12 d-flex justify-content-between align-items-center">
        <h1><i class="fas fa-chart-line"></i> Reservation Report</h1>
        <span>
            <a class="btn btn-primary" href="{{ route('reservation-report') }}">
                View Details <i class="fa fa-angle-right ml-1"></i>
            </a>
        </span>
    </div>
</div>
<div class="summary-report__details shadow-sm text-primary">
    <div class="row justify-content-center mb-4">
        <div class="col-md-12">
            <div class="card bg-default border-primary">
                <div class="card-body">
                    <h1 class="card-title d-flex justify-content-center">
                        Grand Total
                    </h1>
                    <h1 class="card-title d-flex justify-content-center">
                        <i class="fas fa-poll-h"></i>
                        <strong>
                            <count-number to="{{
                                $reservations['reservations_total']['grand_total']
                            }}"></count-number>
                        </strong>
                    </h1>
                </div>
                <div class="card-footer border-primary bg-primary-light d-flex justify-content-center align-items-center">
                    <i class="fas fa-building mr-1"></i> <strong>Total # of companies:</strong>
                    <span class="ml-1">
                        <count-number to="{{
                            $reservations['companies_total']}}"
                        ></count-number>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mb-4">
        <div class="col-md-6">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white d-flex justify-content-center align-items-center">
                    <i class="fas fa-ship mr-1"></i> Shipping (International)
                </div>
                <div class="card-body">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{
                            $reservations['reservation_details']['international']['total']
                        }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white d-flex justify-content-center align-items-center">
                    <i class="fas fa-ship mr-1"></i> Shipping (Domestic)
                </div>
                <div class="card-body">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{
                            $reservations['reservation_details']['domestic']['total']
                        }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mb-4">
        <div class="col-md-4">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white d-flex justify-content-center align-items-center">
                    <i class="fas fa-truck mr-1"></i> Trucking
                </div>
                <div class="card-body">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{
                                $reservations['reservation_details']['trucking']['total']
                            }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white d-flex justify-content-center align-items-center">
                    <i class="fas fa-people-carry mr-1"></i> Customs Broker
                </div>
                <div class="card-body">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{
                            $reservations['reservation_details']['customs_broker']['total']
                        }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white d-flex justify-content-center align-items-center">
                    <i class="fas fa-warehouse mr-1"></i> Warehouse
                </div>
                <div class="card-body">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{
                            $reservations['reservation_details']['warehouse']['total']
                        }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
