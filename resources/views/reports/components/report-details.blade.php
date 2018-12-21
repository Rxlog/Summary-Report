<section class="report-details shadow-sm">
    <div class="row mb-3">
        <div class="col-md-12 d-flex justify-content-between">
            <h1>{{ $label }}</h1>
        </div>
    </div>
    <div class="row mb-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Today</th>
                    <th scope="col">This week</th>
                    <th scope="col">This month</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                {{ $tableBody }}
            </tbody>
        </table>
    </div>
</section>
