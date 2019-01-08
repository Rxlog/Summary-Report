<section class="total-report">
    <div class="total-report__header">
        <h2><strong>Total {{ $label }}</strong></h2>
    </div>
    <div class="row justify-content-center mb-3">
        <div class="col-md-3">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white d-flex justify-content-center align-items-center">
                    Today
                </div>
                <div class="card-body text-primary">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{ $daily }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white d-flex justify-content-center align-items-center">
                    This Week
                </div>
                <div class="card-body text-primary">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{ $weekly }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white d-flex justify-content-center align-items-center">
                    This Month
                </div>
                <div class="card-body text-primary">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{ $monthly }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white d-flex justify-content-center align-items-center">
                    <strong>GRAND TOTAL</strong>
                </div>
                <div class="card-body text-primary">
                    <h2 class="card-title d-flex justify-content-center">
                        <count-number to="{{ $grandTotal }}"></count-number>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
