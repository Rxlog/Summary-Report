<div class="row summary-report__header">
    <div class="col-md-12 d-flex justify-content-between align-items-center">
        <h1><i class="fas fa-chart-line"></i> Registration Report</h1>
        <span>
            <a class="btn btn-primary" href={{ route('registration-report') }}>
                View Details <i class="fa fa-angle-right"></i>
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
                                $registrations['registrations_total']['grand_total']
                            }}"></count-number>
                        </strong>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mb-4">
        <div class="col-md-4">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white d-flex justify-content-center align-items-center">
                    <i class="fas fa-ship mr-1"></i> Shippers (Domestic)
                </div>
                <div class="card-body">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{
                            $registrations['registration_details']['shipper_domestic']['total']
                        }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white d-flex justify-content-center align-items-center">
                    <i class="fas fa-ship mr-1"></i> Shippers (International)
                </div>
                <div class="card-body">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{
                                $registrations['registration_details']['shipper_international']['total']
                            }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white d-flex justify-content-center align-items-center">
                    <i class="fas fa-ship mr-1"></i> Shippers (Consignee)
                </div>
                <div class="card-body">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{
                                $registrations['registration_details']['shipper_consignee']['total']
                            }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mb-4">
        <div class="col-md-3">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white d-flex justify-content-center align-items-center">
                    <i class="fas fa-vector-square mr-1"></i> Shipping Lines
                </div>
                <div class="card-body">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{
                                $registrations['registration_details']['shipping_line']['total']
                            }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white d-flex justify-content-center align-items-center">
                    <i class="fas fa-truck mr-1"></i> Truckers
                </div>
                <div class="card-body">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{
                                $registrations['registration_details']['trucker']['total']
                            }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white justify-content-center align-items-center">
                    <i class="fas fa-people-carry mr-1"></i> Customs Brokers
                </div>
                <div class="card-body">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{
                            $registrations['registration_details']['customs_broker']['total']
                        }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white d-flex justify-content-center align-items-center">
                    <i class="fas fa-warehouse mr-1"></i> Warehouses
                </div>
                <div class="card-body d-flex justify-content-center">
                    <h2 class="card-title">
                        <count-number to="{{
                            $registrations['registration_details']['warehouse']['total']
                        }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
