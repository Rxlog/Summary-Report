<section class="report-details">
    <div class="report-details__header">
        <h2>{{ $label }}</h2>
    </div>
    <div class="report-details__content">
        <table class="table table-hover table-bordered">
            <thead class="bg-primary-light text-primary">
                <tr>
                    <th scope="col">Type</th>
                    <th class="text-center" scope="col">Today</th>
                    <th class="text-center" scope="col">This week</th>
                    <th class="text-center" scope="col">This month</th>
                    <th class="text-center" scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                {{ $tableBody }}
            </tbody>
        </table>
    </div>
</section>
