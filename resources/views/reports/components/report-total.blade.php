<section class="summary shadow-sm">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-between">
            <h1>Total {{ $label }}</h1>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row justify-content-center mb-3">
        <div class="col-md-3">
            <div class="card text-white bg-dark">
                <div class="card-header d-flex justify-content-center">
                    Today
                </div>
                <div class="card-body">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{ $daily }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-dark">
                <div class="card-header d-flex justify-content-center">
                    This Week
                </div>
                <div class="card-body">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{ $weekly }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-dark">
                <div class="card-header d-flex justify-content-center">
                    This Month
                </div>
                <div class="card-body">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{ $monthly }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-dark">
                <div class="card-header d-flex justify-content-center">
                    <strong>GRAND TOTAL</strong>
                </div>
                <div class="card-body">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{ $grandTotal }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
