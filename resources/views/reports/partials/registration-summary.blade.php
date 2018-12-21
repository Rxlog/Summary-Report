<div class="row mb-3">
    <div class="col-md-12 d-flex justify-content-between">
        <h1>Registration Report</h1>
        <span>
            <a class="btn btn-dark" href={{ route('registration-report') }}>
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
                        $registrations['overall_total']['grand_total']
                    }}"></count-number>
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center mb-3">
    <div class="col-md-3">
        <div class="card text-white bg-primary">
            <div class="card-header d-flex justify-content-center">
                Shippers (Domestic)
            </div>
            <div class="card-body">
                <h2 class="card-title d-flex justify-content-center">
                    <count-number to="{{
                        $registrations['details']['shipper_domestic']['total']
                    }}"></count-number>
                </h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-primary">
            <div class="card-header d-flex justify-content-center">
                Shippers (International)
            </div>
            <div class="card-body">
                <h2 class="card-title d-flex justify-content-center">
                    <count-number to="{{
                            $registrations['details']['shipper_international']['total']
                        }}"></count-number>
                </h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-primary">
            <div class="card-header d-flex justify-content-center">
                Shippers (Consignee)
            </div>
            <div class="card-body">
                <h2 class="card-title d-flex justify-content-center">
                    <count-number to="{{
                            $registrations['details']['shipper_consignee']['total']
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
                Shipping Lines
            </div>
            <div class="card-body">
                <h2 class="card-title d-flex justify-content-center">
                    <count-number to="{{
                            $registrations['details']['shipping_line']['total']
                        }}"></count-number>
                </h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-primary">
            <div class="card-header d-flex justify-content-center">
                Truckers
            </div>
            <div class="card-body">
                <h2 class="card-title d-flex justify-content-center">
                    <count-number to="{{
                            $registrations['details']['trucker']['total']
                        }}"></count-number>
                </h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-primary">
            <div class="card-header justify-content-center">
                Customs Brokers
            </div>
            <div class="card-body">
                <h2 class="card-title d-flex justify-content-center">
                    <count-number to="{{
                        $registrations['details']['customs_broker']['total']
                    }}"></count-number>
                </h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-primary">
            <div class="card-header d-flex justify-content-center">
                Warehouses
            </div>
            <div class="card-body d-flex justify-content-center">
                <h2 class="card-title">
                    <count-number to="{{
                        $registrations['details']['warehouse']['total']
                    }}"></count-number>
                </h2>
            </div>
        </div>
    </div>
</div>
